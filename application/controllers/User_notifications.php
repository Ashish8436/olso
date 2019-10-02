<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_notifications extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('User_notifications_model','notification_model');
	}

	public function show_user_notifications()
	{	
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$data['title']='List item | OLSO';
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_notification'] = $this->notification_model->fetch_user_notification($otu_id);
		$this->load->view('user_notifications',$data);
	}

	public function show_user_notifications_details($random_itemno)
	{	
		$req_id = $_REQUEST['code'];

		$otu_id = $this->session->userdata('oauth_uid');
		$sql = "select * from create_item where random_itemno='$random_itemno'";
		$q = $this->db->query($sql)->row();

		
		$data=array();
		$data['title']='List item | OLSO';
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_notification_details'] = $this->notification_model->fetch_user_notification_details($q->item_id,$req_id);
		$data['fetch_notification_details1'] = $this->notification_model->fetch_user_notification_details($q->item_id,$req_id);
		$data['surl'] = site_url().'Orders';
        $data['furl'] = site_url().'Payment/failed';
        $data['currency_code'] = 'INR';
		if(empty($q) || empty($data['fetch_notification_details'])){
			redirect($_SESSION['url']);
		}
		$this->load->view('user_notifications_details',$data);
	}

}

?>