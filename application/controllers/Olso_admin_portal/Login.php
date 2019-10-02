<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Olso_admin_model/Login_model','login_model');
	}


	public function show_login(){
		error_reporting(0);
		$this->load->view('olso_admin_portal/login');
	}

	public function admin_login(){

		$email = $this->input->post('admin_email');
		$password = $this->input->post('admin_password');
		$password_enc = md5($password);

		$detial = $this->login_model->admin_featch_login($email);
		// print_r($detial);
		// exit();

		if($password_enc == $detial->admin_password){
				$session_data['admin_id'] = $detial->admin_id;
				
				$this->session->set_userdata($session_data);
				redirect('Admin-portal/Dashboard');				
		}else{
			$this->session->set_flashdata('error_msg', 'Incorect Email and Password');
			$this->load->view('olso_admin_portal/login');
		}
	}


	public function admin_logout(){
		$this->session->unset_userdata('admin_id');
		$this->session->set_flashdata('success_msg', 'Logout Successfully');
		$this->load->view('olso_admin_portal/login');
	}
}

?>