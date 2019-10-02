<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Request_for_item extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Create_item_model','item_model');
		$this->load->model('Document_management_model','docuemnt_model');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Request_for_item_model','req_model');
		
	}

	public function show_request_for_item(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_category'] = $this->item_model->get_category();
		$data['fetch_country'] = $this->dashboard_model->get_country();
		$this->load->view('request_for_item',$data);
	}

	public function store_request_for_item(){
		$data = array();
			
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
        
        $data['item_name']=$this->input->post('item_name');
        $data['cat_id']=$this->input->post('cat_id');
		$data['subcat_id']=$this->input->post('subcat_id');
		$data['address']=$this->input->post('address');
		$data['req_from']=$this->input->post('req_from');
		$data['req_to']=$this->input->post('req_to');
		

		date_default_timezone_set('Asia/Calcutta');
        $data['req_for_date'] = date('Y-m-d h-i-s');
        if($this->req_model->store_request_for_item($data)){
	  		echo "<script>alert('Your Request Item Send Successfully')</script>";
	  		return redirect($_SESSION['url']);
	  	}
		
	}

}

?>