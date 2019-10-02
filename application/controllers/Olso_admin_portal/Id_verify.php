<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Id_verify extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Olso_admin_model/Idverify_model','idverify_model');
		
	}

	public function view_id_verification(){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$data['fetch_id_Verify_vendors'] = $this->idverify_model->fetch_id_Verify_vendors();
		$this->load->view('olso_admin_portal/id_verification',$data);
	}

	public function view_id_verification_details($verification_id,$oauth_uid){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$data['verify_details'] = $this->idverify_model->fetch_id_Verify_vendors_details($oauth_uid);
		$this->load->view('olso_admin_portal/id_verification_details',$data);
	}

	public function accept_id_verify(){
		$veri_id = $_REQUEST['veri_id'];
		
		$sql = "update id_verification set verification_status='1' where verification_id='$veri_id'";
		$run_sql = $this->db->query($sql);
		if($run_sql){
			redirect('Admin-portal/ID-Verification');
		}
		
	}

	public function cancel_id_verify(){
		$veri_id = $this->input->post('veri_id');
		$cancel_reason = $this->input->post('cancel_reason');

		$sql = "update id_verification set verification_status='1', no_verify_reason='$cancel_reason' where verification_id='$veri_id'";
		$run_sql = $this->db->query($sql);

		if($run_sql){
			redirect('Admin-portal/ID-Verification');
		}
	}
}

?>