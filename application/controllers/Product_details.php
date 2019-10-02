<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_details extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Client_items_model','client_item');
		$this->load->model('Create_item_model','item_model');
	}

	public function view_product_details($random_itemno)
	{	
		error_reporting(0);
		$data=array();
		$data['title']='OLSO: Buy. Sell. Rent.';
		$data['random_itemno'] = $random_itemno;
        $log_aut['authURL'] =  $this->facebook->login_url();
        $log_aut['loginURL'] = $this->google->loginURL();  
        
        // Load login & profile view
		$data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['product_details'] = $this->client_item->get_product_details($random_itemno);
		$data['fetch_months'] = $this->client_item->fetch_months();

		$data['fetch_hours'] = $this->client_item->fetch_hours();
		
		$data['fetch_category'] = $this->item_model->get_category();

		$this->load->view('product_details',$data);
	}

	function fetch_drop_time()
	 {
	  if($this->input->post('item_recive_time_id'))
	  {
	   echo $this->client_item->fetch_drop_time($this->input->post('item_recive_time_id'),$this->input->post('owner_id'));
	  }
	}

	function fetch_as()
	 {
	  if($this->input->post('as_id'))
	  {
	   echo $this->client_item->fetch_as($this->input->post('as_id'));
	  }
	}

	function fetch_discount_and_total_price()
	 {
	  if($this->input->post('month_id'))
	  {
	   echo $this->client_item->fetch_discount_and_total_price($this->input->post('month_id'),$this->input->post('random_itemno'));
	  }
	}

	function fetch_hours_price_ajax()
	 {
	  if($this->input->post('hours_id'))
	  {
	   echo $this->client_item->fetch_hours_price_ajax($this->input->post('hours_id'),$this->input->post('random_itemno'));
	  }
	}
}

?>