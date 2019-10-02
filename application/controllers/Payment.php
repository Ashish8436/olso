<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Payment_model','payment_model');
		$this->load->model('User_details_model','user_details');
		$this->load->model('User_notifications_model','notification_model');
	}

	// initialized cURL Request
    private function get_curl_handle($payment_id, $amount)  {
        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id = RAZOR_KEY_ID;
        $key_secret = RAZOR_KEY_SECRET;
        $fields_string = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0); 
        curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__).'/ca-bundle.crt');
        return $ch;
    }   
        

	public function callback() {   

        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            $currency_code = 'INR';
            $amount = $this->input->post('merchant_total');
            $vendor_id = $this->input->post('vendor_id');
            $user_id = $this->input->post('user_id');
            $item_id = $this->input->post('item_id'); 
            $req_id = $this->input->post('req_id'); 
			$success = false;
            $error = '';
            try {                
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);

                //execute post
                $result = curl_exec($ch);
                
                $ex_result = explode(',', $result);
                
               
                $status = explode(':', $ex_result[4]);
                $method = explode(':', $ex_result[8]);
                $bank = explode(':', $ex_result[14]);
                $created_at = explode(':', $ex_result[24]);// use rtrim($veriable,'}');

                $status1 =substr($status[1], 1, -1);
                $method1 =substr($method[1], 1, -1);
                $bank1 =substr($bank[1], 1, -1);
                $created_at1 = rtrim($created_at[1],'}');

                $amount1 = substr($amount, 0, -2);


                               
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                   // echo "<pre>";print_r($response_array);exit;
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }
            if ($success === true) {
                if(!empty($this->session->userdata('ci_subscription_keys'))) {
                    $this->session->unset_userdata('ci_subscription_keys');
                 }
                if (!$order_info['order_status_id']) {
                	$sql="INSERT INTO payment(order_id,oauth_uid,vendor_id,req_id,item_id,payment_id,payment_amount,payment_method,payment_bank,created_at,payment_status) values('$merchant_order_id','$user_id','$vendor_id','$req_id','$item_id','$razorpay_payment_id','$amount1','$method1','$bank1','$created_at1','$status1')";
                	$this->db->query($sql);
                    redirect($this->input->post('merchant_surl_id')."?id=".$razorpay_payment_id);
                } else {
                	$sql="INSERT INTO payment(order_id,oauth_uid,vendor_id,req_id,item_id,payment_id,payment_amount,payment_method,payment_bank,created_at,payment_status) values('$merchant_order_id','$user_id','$vendor_id','$req_id','$item_id','$razorpay_payment_id','$amount1','$method1','$bank1','$created_at1','$status1')";
                	$this->db->query($sql);
                    redirect($this->input->post('merchant_surl_id')."?id=".$razorpay_payment_id);
                }

            } else {
            	$sql="INSERT INTO payment(order_id,oauth_uid,vendor_id,req_id,item_id,payment_id,payment_amount,payment_method,payment_bank,created_at,payment_status) values('$merchant_order_id','$user_id','$vendor_id','$req_id','$item_id','$razorpay_payment_id','$amount1','$method1','$bank1','$created_at1','$status1')";
                	$this->db->query($sql);
                redirect($this->input->post('merchant_furl_id')."?id=".$razorpay_payment_id);
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    } 

     public function orders() {
        error_reporting(0);
     	$payment_id = $_REQUEST['id'];
        $otu_id = $this->session->userdata('oauth_uid');
        $data['title'] = 'OLSO | Order Details';

        $data['user_details'] = $this->user_details->get_users_details($otu_id);
        $data['order_details'] = $this->payment_model->fetch_order_details($payment_id,$otu_id); 
        $data['fetch_orders'] = $this->payment_model->fetch_orders($otu_id); 

        $this->load->view('orders', $data);
    }  
    public function failed() {
        $data['title'] = 'Razorpay Failed | TechArise';            
        $this->load->view('failed', $data);
    } 

}

?>