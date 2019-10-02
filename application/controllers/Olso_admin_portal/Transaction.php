<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Olso_admin_model/Transaction_model','trans_model');
		
	}

	public function show_transaction(){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$data['all_transaction_vendors'] = $this->trans_model->payments_vendors();
		$this->load->view('olso_admin_portal/manage_payment_vendor',$data);
	}

	public function show_transaction_details(){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$vendor_id = $_REQUEST['lender_id'];
		$data['all_transaction_vendors'] = $this->trans_model->payments_vendors();
		$data['show_not_payment'] = $this->trans_model->show_not_payment($vendor_id);
		$data['show_lender_payment'] = $this->trans_model->show_lender_payment($vendor_id);

		$this->load->view('olso_admin_portal/manage_payment_vendor_details',$data);
	}

	public function store_admin_to_lender_payment(){
		$payment_id = $this->input->post('payment_id');
		$data['admin_payment']='1';
		$data['admin_payment_name']=$this->input->post('admin_payment_name');
		$data['admin_payment_id']=$this->input->post('admin_payment_id');
		if($this->trans_model->store_admin_to_lender_payment($payment_id,$data)){
			$this->session->set_flashdata('success_msg','Payment Successfully');
			redirect($_SESSION['url']);
		}else{
			$this->session->set_flashdata('error_msg','Payment Unsuccessfully');
			redirect($_SESSION['url']);
		}
	}

}

?>