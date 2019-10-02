<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Bank_details_model extends CI_Model{

	public function store_vendor_bank_details($array){
		return $this->db->insert('vendor_bank_details',$array);
	}

	public function fetch_bank_details($otu_id){
		$sql = "select * from vendor_bank_details as vbd, country as c, banks as b, currency as curr where vbd.ven_bank_country=c.id and vbd.ven_bank_name=b.bank_id and vbd.ven_bank_currency=curr.currency_id and vbd.vendor_id='$otu_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}

	public function update_vendor_bank_details($bank_id,$array){
		return	$this->db->where('ven_bank_id',$bank_id)
				 ->update('vendor_bank_details', $array);
	}
}

?>