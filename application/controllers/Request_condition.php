<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Request_condition extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		
		$this->load->model('Document_management_model','docuemnt_model');
		$this->load->model('Request_item_model','request_item');
	}

	public function store_request_item_user(){
		
		$data = array();
		$data['item_id']=$this->input->post('item_id');
		$data['oauth_uid']=$this->session->userdata('oauth_uid');
		$data['vendor_id']=$this->input->post('vendor_id');
		
		$data['start_date']=$this->input->post('start_date');
		$data['end_date']=$this->input->post('end_date');
		
		$data['pick_up']=$this->input->post('item_recive_time');
		$data['drop_off']=$this->input->post('item_drop_time');
		
		$data['booking_name']=$this->input->post('booking_name');
		
		$data['total_day']=$this->input->post('total_day');
		
		$data['total_item_price']=$this->input->post('total_item_price');
		$data['discount_price']=$this->input->post('discount_price');
		
		$data['total_amount']=$this->input->post('total_amount');
		$data['user_comments']=$this->input->post('user_comments');

		$data['total_hours']=$this->input->post('total_hours');
		$data['pickup_date']=$this->input->post('pickup_date');

		$data['total_month']=$this->input->post('month_name');
		
		date_default_timezone_set('Asia/Calcutta');
		$data['request_date']= date('Y-m-d h:i:s');

	    $data['default_time']=time(); 

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->request_item->store_request_item_user($data);
		redirect('welcome');
	}

	public function show_vendor_request_item_view(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Request Item | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		$data['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		
		$lender_seen_sql = "UPDATE booking_request SET lender_seen='1' WHERE vendor_id='$otu_id'";
		$this->db->query($lender_seen_sql);
		
		$data['fetch_request_item'] = $this->request_item->fetch_request_item($otu_id);
		$this->load->view('lender/booking/request_item',$data);
	}

	public function show_customer_orders_in_vendor(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Barrowing | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);

			//vendor id get form header page
		$lender_seen_sql = "UPDATE payment SET lender_seen='1' WHERE vendor_id='$otu_id'";
		$this->db->query($lender_seen_sql);
				
		$data['fetch_customer_orders'] = $this->request_item->fetch_customer_orders($otu_id);
		$this->load->view('lender/booking/orders',$data);
	}

	public function show_request_item_details(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
	
		$otu_id = $this->session->userdata('oauth_uid');
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['fetch_request_item'] = $this->request_item->fetch_request_item($otu_id);
		$this->load->view('request_item_details',$data);
	}

	public function accept_request(){
		$req_id = $_REQUEST['req'];
		$sql = "update booking_request set request_apply='Accept' where req_id='$req_id'";
		$run_sql = $this->db->query($sql);

		if($run_sql){
			redirect($_SESSION['url']);
		}
	}

	public function cancel_request(){
		$req_id = $this->input->post('req_id');
		$cancel_reason = $this->input->post('cancel_reason');

		$sql = "update booking_request set request_apply='Cancel', cancel_reason='$cancel_reason' where req_id='$req_id'";
		$run_sql = $this->db->query($sql);

		if($run_sql){
			redirect($_SESSION['url']);
		}
	}




}

?>