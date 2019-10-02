<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	
	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Document_management_model','docuemnt_model');
	}

	public function view_dashboard(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);

		$data['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);

		$data['title']='Dashboard | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);

		$data['fetch_lender_seen_or_not_payment'] = $this->dashboard_model->fetch_lender_seen_or_not_payment($otu_id);

		

		$this->load->view('lender/dashboard',$data);
	}

	public function view_profile(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);

		$data['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);

		$data['title']='Dashboard | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_user_documents'] = $this->docuemnt_model->fetch_user_documents($otu_id);
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$find_lan_tag = "select * from users where oauth_uid='$otu_id'";
	  	$find_lan_tag1 = $this->db->query($find_lan_tag)->result();
	  	
		foreach ($find_lan_tag1 as $b) {
  			$elements = explode(',', $b->language_tag);
		    foreach($elements as $element)
		    {
				$aaa[]= $element;
		    }
  		}
  		
  		$string = rtrim(implode(',', $aaa), ',');
  		if(empty($string)){
  			$string='0';
  		}else{
  			$string=$string;
  		}
  		
  		$fetch_language = "SELECT * FROM language WHERE lan_id IN ($string)";	
	  	$data['fetch_user_lang'] = $this->db->query($fetch_language)->result();
		$this->load->view('lender/profile',$data);
	}

}

?>