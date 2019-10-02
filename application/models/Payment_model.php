<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model{

	public function fetch_order_details($payment_id,$otu_id){
		$otu_id= $this->session->userdata('oauth_uid');
		$sql = "select * from payment as p, booking_request as br,create_item as ci,item_price as ip where p.item_id=ci.item_id and p.item_id=br.item_id and ci.random_itemno=ip.random_itemno and p.oauth_uid='$otu_id' and p.payment_id='$payment_id' and p.oauth_uid='$otu_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}

	public function fetch_orders($otu_id){
		$sql = "select * from payment as p, create_item as ci where p.item_id=ci.item_id and p.oauth_uid='$otu_id' and p.payment_status='captured'";		
		$q = $this->db->query($sql);
		return $q->result();
	}
}

?>