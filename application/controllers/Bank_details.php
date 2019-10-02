<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Bank_details extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Bank_details_model','bank_model');
	}

	public function view_bank_tansfer_details(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$data['title']='Dashboard | OLSO';
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_country'] = $this->dashboard_model->get_country();
		$data['fetch_currency'] = $this->dashboard_model->get_currency();
		$data['fetch_bank'] = $this->dashboard_model->get_banks();
		$data['fetch_bank_details'] = $this->bank_model->fetch_bank_details($otu_id);
		$this->load->view('lender/bank/add_bank_account',$data);
	}

	public function edit_bank_tansfer_details(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$data['title']='Dashboard | OLSO';
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_country'] = $this->dashboard_model->get_country();
		$data['fetch_currency'] = $this->dashboard_model->get_currency();
		$data['fetch_bank'] = $this->dashboard_model->get_banks();
		$data['fetch_bank_details'] = $this->bank_model->fetch_bank_details($otu_id);

		$this->load->view('lender/bank/edit_bank_account',$data);
	}

	public function store_vendor_account_details(){
		$data=array();

		$data['vendor_id'] = $this->session->userdata('oauth_uid');
		$data['ven_bank_account']=$this->input->post('account');
		$data['ven_bank_country']=$this->input->post('bank_country');
		$data['ven_bank_currency']=$this->input->post('currency');
		$data['ven_bank_name']=$this->input->post('bank_name');
		$data['ven_bank_account_name']=$this->input->post('account_name');
		$data['ven_bank_account_no']=$this->input->post('account_number');
		$data['ven_bank_ifsc']=$this->input->post('ifsc');
		$data['ven_bank_pan']=$this->input->post('pan');
		$data['ven_bank_account_type']=$this->input->post('account_type');
		$data['ven_bank_account_status']='0';


		if($this->bank_model->store_vendor_bank_details($data)){
	  		$this->session->set_flashdata('feedback','Thank You!');
	  		$this->session->set_flashdata('feedback_label','Your bank account details have been received and will be reviewed, after which you will recive an e-mail confirmation with further details.');
			$this->session->set_flashdata('feedback_class','alert-success');
	  	}
		return redirect('OLSO-Payout-Partner-Default-AccountRegistration');
	}

	public function update_vendor_account_details(){
		$data=array();

		$bank_id = $this->input->post('bank_id');
		$data['vendor_id'] = $this->session->userdata('oauth_uid');
		$data['ven_bank_account']=$this->input->post('account');
		$data['ven_bank_country']=$this->input->post('bank_country');
		$data['ven_bank_currency']=$this->input->post('currency');
		$data['ven_bank_name']=$this->input->post('bank_name');
		$data['ven_bank_account_name']=$this->input->post('account_name');
		$data['ven_bank_account_no']=$this->input->post('account_number');
		$data['ven_bank_ifsc']=$this->input->post('ifsc');
		$data['ven_bank_pan']=$this->input->post('pan');
		$data['ven_bank_account_type']=$this->input->post('account_type');
		$data['ven_bank_account_status']='0';


		if($this->bank_model->update_vendor_bank_details($bank_id,$data)){
	  		$this->session->set_flashdata('feedback','Thank You!');
	  		$this->session->set_flashdata('feedback_label','Your bank account details have been Update and will be reviewed, after which you will recive an e-mail confirmation with further details.');
			$this->session->set_flashdata('feedback_class','alert-success');
	  	}
		return redirect('OLSO-Payout-Partner-Default-AccountRegistration');
	}

}

?>