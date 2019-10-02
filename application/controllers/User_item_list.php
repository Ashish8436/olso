<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_item_list extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('User_item_model','item_model');
	}

	public function view_user_item_list()
	{	
		 $otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='My Items | OLOS';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['show_user_items_category'] = $this->item_model->show_user_items_category($otu_id);
		
		$this->load->view('lender/listing/my_item',$data);
	}

	public function item_status($id=""){  
        $sts = $this->input->post('sts');
        
	        if($sts == 1){
	            $upsts = '0'; 
	        }else{
	            $upsts = '1';
	        }
	      
	        if($this->db->update('create_item',array('item_status'=>$upsts),array('item_id'=>$id))){
	          echo $upsts;  
	        }        
	}


}

?>