<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Request_item_model extends CI_Model{

	public function store_request_item_user($array){
		return $this->db->insert('booking_request',$array);
	}

	public function fetch_request_item($otu_id){
		$sql = "select * from  booking_request as br, create_item as ci, users as u where br.item_id=ci.item_id and br.oauth_uid=u.oauth_uid and br.vendor_id='$otu_id' and br.request_apply IS NULL";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_customer_orders($otu_id){
		$sql = "select * from payment as p, booking_request as br, create_item as ci, users as u where p.vendor_id='$otu_id' and p.payment_status='captured' and p.req_id=br.req_id and p.item_id=ci.item_id and p.oauth_uid=u.oauth_uid";
		$q = $this->db->query($sql);
		return $q->result();
	}
}

?>