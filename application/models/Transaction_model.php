<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction_model extends CI_Model{


	public function fetch_admin_payment_complete($otu_id){
		$sql="select * from payment as p, create_item as ci where p.item_id=ci.item_id and p.admin_payment='1' and p.vendor_id='$otu_id'";
		$q=$this->db->query($sql);
		return $q->result();
	}

	public function fetch_admin_payment_upcoming($otu_id){
		$sql="select * from payment as p, create_item as ci where p.item_id=ci.item_id and p.admin_payment='0' and p.vendor_id='$otu_id'";
		$q=$this->db->query($sql);
		return $q->result();
	}
}

?>