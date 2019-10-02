<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

	public function get_country(){
		return $this->db->where('status','1')
						->get('country')
						->result();

	}

	public function get_currency(){
		$q = $this->db->where('currency_status','1')
				->get('currency')
				->result();
		return $q;
	}

	public function get_banks(){
		$q = $this->db->where('bank_status','1')
				->get('banks')
				->result();
		return $q;
	}

	public function get_timezones(){
		$q = $this->db->get('timezones')
				->result();
		return $q;
	}

	public function fetch_lender_seen_or_not_payment($otu_id){
		$sql = "select * from payment where payment.vendor_id='$otu_id' and lender_seen='0'";
		$q = $this->db->query($sql);
		return $q->result();
	}
	
}

?>