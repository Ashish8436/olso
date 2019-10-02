<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_notifications_model extends CI_Model{
		
	public function fetch_user_notification($otu_id){
		//$sql = "select * from booking_request as br, create_item as ci where br.item_id=ci.item_id and br.oauth_uid='$otu_id'";

		$sql = "select * from booking_request as br , create_item as ci where br.item_id=ci.item_id and br.oauth_uid='$otu_id' and NOT EXISTS 
    (SELECT * 
     FROM payment 
     WHERE payment.req_id = br.req_id)";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_user_notification_details($item_id,$req_id){
		$otu_id= $this->session->userdata('oauth_uid');
		$sql = "select * from booking_request as br, create_item as ci,item_price as ip where br.item_id=ci.item_id and ci.random_itemno=ip.random_itemno and br.oauth_uid='$otu_id' and br.item_id='$item_id' and br.req_id='$req_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}

}

?>