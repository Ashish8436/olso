<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Trust_verification extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
	}

	public function view_trust_verification(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Trust and Verification | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
        $data['authURL2'] =  $this->facebook->login_url2();
        $data['loginURL'] = $this->google->loginURL();  
        
        // Load login & profile view
				
		
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_social_account'] = $this->user_details->fetch_social_account($otu_id);
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		
		$this->load->view('lender/trust_verification',$data);
	}
}
?>