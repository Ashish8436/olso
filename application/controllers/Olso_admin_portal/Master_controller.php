<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_controller extends CI_Controller{


	public function dashboard(){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$this->load->view('olso_admin_portal/dashboard');
	}

}

?>