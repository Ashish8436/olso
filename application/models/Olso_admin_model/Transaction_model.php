<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction_model extends CI_Model{

	public function payments_vendors(){
		$sql = "select * from payment as p, users as u where p.vendor_id=u.oauth_uid GROUP BY vendor_id";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function show_not_payment($vendor_id){
		$sql = "select * from payment as p, create_item as ci, booking_request as br where p.item_id=ci.item_id and p.req_id=br.req_id and p.vendor_id='$vendor_id' and p.admin_payment='0'";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function show_lender_payment($vendor_id){
		$sql = "select * from payment as p, create_item as ci, booking_request as br where p.item_id=ci.item_id and p.req_id=br.req_id and p.vendor_id='$vendor_id' and p.admin_payment='1'";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function store_admin_to_lender_payment($payment_id,$array){
		return	$this->db->where('payment_id',$payment_id)
				 ->update('payment', $array);
	}

}

?>