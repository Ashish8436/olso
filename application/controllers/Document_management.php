<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document_management extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Document_management_model','docuemnt_model');
	}

	public function view_document_management(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$get_id_verify = $this->user_details->fetch_id_verification($this->session->userdata('oauth_uid'));

		if($get_id_verify->verification_status=='1'){
			$data=array();
			$user['user_details'] = $this->user_details->get_users_details($otu_id);
			$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
			$data['title']='Document Verify | OLSO';
			$data['header']=$this->load->view('lender/pages/header',$user,true);
			$data['footer']=$this->load->view('lender/pages/footer','',true);
	        $log_aut['authURL'] =  $this->facebook->login_url();
	        $log_aut['loginURL'] = $this->google->loginURL();  
	        
	        // Load login & profile view
			$data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
			
			
			$data['user_details'] = $this->user_details->get_users_details($otu_id);
			$data['fetch_user_documents']= $this->docuemnt_model->fetch_user_documents($otu_id);
			$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
			$this->load->view('lender/document_management',$data);
		}else{
			redirect('Trust-Verification');
		}
	}

	public function view_id_verification(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$get_id_verify = $this->user_details->fetch_id_verification($this->session->userdata('oauth_uid'));
		if(empty($get_id_verify) || $get_id_verify->verification_status=='0'||$get_id_verify->no_verify_reason!=''){
			$data=array();
			$user['user_details'] = $this->user_details->get_users_details($otu_id);
			$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
			$data['title']='ID Verification | OLSO';
			$data['header']=$this->load->view('lender/pages/header',$user,true);
			$data['footer']=$this->load->view('lender/pages/footer','',true);
	        $log_aut['authURL'] =  $this->facebook->login_url();
	        $log_aut['loginURL'] = $this->google->loginURL();  
	        
	        // Load login & profile view
			$data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
			
			
			$data['user_details'] = $this->user_details->get_users_details($otu_id);
			$data['fetch_user_documents']= $this->docuemnt_model->fetch_user_documents($otu_id);
			$this->load->view('lender/id_verification',$data);
		}else{
			redirect('Trust-Verification');
		}
	}

	public function view_take_selfi(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$data=array();
		$data['title']='Document Verify | OLSO';
		
        $log_aut['authURL'] =  $this->facebook->login_url();
        $log_aut['loginURL'] = $this->google->loginURL();  
        
        // Load login & profile view
		$data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_user_documents']= $this->docuemnt_model->fetch_user_documents($otu_id);
		$this->load->view('take_selfi',$data);
	}

	public function user_documents1(){
		$config['upload_path']          = './uploads/document/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('doc_file1'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/document/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}
	public function user_documents2(){
		$config['upload_path']          = './uploads/document/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('doc_file2'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/document/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}


	public function store_document_files(){

		$oauth_uid= $this->session->userdata('oauth_uid');
		$doc_type=$this->input->post('doc_type');
		$data=array();

		$data['oauth_uid']=$this->session->userdata('oauth_uid');
		

		if($doc_type == 'Voter ID'){
			$data['voter_id1']=$this->user_documents1();
			$data['voter_id2']=$this->user_documents2();
		}else if($doc_type == 'Student ID / Employee ID'){
			$data['stu_emp_id1']=$this->user_documents1();
			$data['stu_emp_id2']=$this->user_documents2();
		}else if($doc_type == 'Rent agreement / Utility Bill'){
			$data['rent_bill1']=$this->user_documents1();
			$data['rent_bill2']=$this->user_documents2();
		}elseif($doc_type == 'Driving License'){
			$data['driving_license1']=$this->user_documents1();
			$data['driving_license2']=$this->user_documents2();
			if($this->docuemnt_model->update_id_verification($oauth_uid,$data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('Docuement-Verify');
		}else if($doc_type == 'Passport'){
			$data['passport1']=$this->user_documents1();
			$data['passport2']=$this->user_documents2();
			if($this->docuemnt_model->update_id_verification($oauth_uid,$data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('Docuement-Verify');
		}else if($doc_type == 'Aadhar Card'){
			$data['aadhar_card1']=$this->user_documents1();
			$data['aadhar_card2']=$this->user_documents2();
			if($this->docuemnt_model->update_id_verification($oauth_uid,$data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('Docuement-Verify');
		}

		

		$fetch_user_docuements = $this->docuemnt_model->fetch_user_documents($oauth_uid);
		if($fetch_user_docuements >0){
			if($this->docuemnt_model->update_doc_files($oauth_uid,$data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('Docuement-Verify');
		}
		else{
			if($this->docuemnt_model->store_doc_files($data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('Docuement-Verify');
		}
		
	}

	public function store_id_verification(){

		$oauth_uid= $this->session->userdata('oauth_uid');
		$doc_type=$this->input->post('doc_type');

		//$no_image = $this->input->post('no_image');
		$data=array();

		$data['oauth_uid']=$this->session->userdata('oauth_uid');
		

		if($doc_type == 'Driving License'){
			$data['driving_license1']=$this->user_documents1();
			$data['driving_license2']=$this->user_documents2();
		}else if($doc_type == 'Passport'){
			$data['passport1']=$this->user_documents1();
			$data['passport2']=$this->user_documents2();
		}else if($doc_type == 'Aadhar Card'){
			$data['aadhar_card1']=$this->user_documents1();
			$data['aadhar_card2']=$this->user_documents2();
		}

		$img = $this->input->post('image');
	    $folderPath = "uploads/document/";
		$image_parts = explode(";base64,", $img);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	  
	    $image_base64 = base64_decode($image_parts[1]);
	    $fileName = uniqid() . '.png';
	  
	    $file = $folderPath . $fileName;
	    file_put_contents($file, $image_base64);
		$data['selfi']=$file;
		
		$data['verification_status']='0';
		$data['no_verify_reason']='';
		date_default_timezone_set('Asia/Calcutta');
        $data['upload_date'] = date('Y-m-d h-i-s');

        $fetch_id_verify = $this->user_details->fetch_id_verification($oauth_uid);
        if($fetch_id_verify >0){
        	if($this->docuemnt_model->update_id_verification($oauth_uid,$data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}			
		}else{
			if($this->docuemnt_model->store_id_verification($data)){
				$this->session->set_flashdata('feedback','Docuemnt Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
			}else{
				$this->session->set_flashdata('feedback','Document failed to Added, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
		}	
		return redirect('Trust-Verification');
	}
}

?>