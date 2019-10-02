<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Approble_item extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Olso_admin_model/Listed_item_approble_model','listitem_model');
		
	}

	public function show_manage_approble_item(){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$data['un_approble_items'] = $this->listitem_model->fetch_unapproble_item();
		$this->load->view('olso_admin_portal/manage_listed_item_approble',$data);
	}

	public function show_unapproble_item_details($random_itemno){
		if(! $this->session->userdata('admin_id'))
			return redirect('Admin/Login');
		
		$data['un_approble_items'] = $this->listitem_model->fetch_unapproble_item();
		$data['un_approble_items_details'] = $this->listitem_model->fetch_unapproble_item_details($random_itemno);
		
		$data['random_itemno']=$random_itemno;
		$this->load->view('olso_admin_portal/unapproble_item_details',$data);
	}

	public function accept_unapproble_item(){

		$random_itemno = $this->input->post('random_itemno');
		$data=array();
		$data['admin_approble']='1';
		if($this->listitem_model->accept_unapproble_item($random_itemno,$data)){
			echo "<script>alert('Accept Successfuly')</script>";
			redirect('Admin-portal/Approble-Item');
		}
	}

	public function cancel_unapproble_item(){

		$random_itemno = $this->input->post('random_itemno');
		$data=array();
		$data['admin_approble']='0';
		$data['admin_cancel_reason']=$this->input->post('admin_cancel_reason');
		if($this->listitem_model->cancel_unapproble_item($random_itemno,$data)){
			
			redirect('Admin-portal/Approble-Item');
		}
	}

}

?>