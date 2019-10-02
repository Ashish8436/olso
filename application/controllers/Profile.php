<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Client_items_model','client_item');
		$this->load->model('Create_item_model','item_model');
	}
	
	public function view_profile($vendor_id)
	{	
		$data=array();
		$data['title']='OLSO: Buy. Sell. Rent.';
		
        $log_aut['authURL'] =  $this->facebook->login_url();
        $log_aut['loginURL'] = $this->google->loginURL();  
        
        // Load login & profile view
		$data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_vendor_details'] = $this->user_details->get_users_details($vendor_id);
		$data['client_item_category'] = $this->client_item->fetch_item_category();
		$data['fetch_category'] = $this->item_model->get_category();
		$this->load->view('profile',$data);
	}

}

?>