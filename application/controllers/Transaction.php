<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Transaction_model','trans_model');
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Document_management_model','docuemnt_model');
		
	}


	public function show_transaction(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$data['title']='Dashboard | OLSO';
		
       	$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		$data['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		
		$data['fetch_admin_payment_complete'] = $this->trans_model->fetch_admin_payment_complete($otu_id);
		$data['fetch_admin_payment_upcoming'] = $this->trans_model->fetch_admin_payment_upcoming($otu_id);
		
		$this->load->view('lender/transaction/transactions',$data);
	}
}

?>