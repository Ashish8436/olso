<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Tools_model extends CI_Model{

	public function fetch_instant_book($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
				 ->get('instant_book')
				 ->row(); 
	}

	public function fetch_advance_booking_notice(){
		return $this->db->get('advance_booking_notice')
						->result();
	}

	public function store_instant_booking($otu_id,$array)
	{	
		return	$this->db->where('oauth_uid',$otu_id)
				 ->update('instant_book', $array);
	}
	public function fetch_offers($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
						->get('offers')
						->result();
	}

	public function delete_offer($offer_id){
		return $this->db->delete('offers',['offer_id'=>$offer_id]);
	}

	public function fetch_user_items($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
						->where('item_status','1')
						->get('create_item')
						->result();
	}

	public function store_policy($array){
		return $this->db->insert('policies',$array);
	}
	public function fetch_policies($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
						->get('policies')
						->result();
	}

	public function delete_policy($policy_id){
		return $this->db->delete('policies',['policy_id'=>$policy_id]);
	}
	public function store_open_hours($array){
		return $this->db->insert('open_hours',$array);
	}
	public function fetch_open_hours($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
						->get('open_hours')
						->result();
	}
	public function update_open_hours($otu_id,$array)
	{	
		return	$this->db->where('oauth_uid',$otu_id)
				 ->update('open_hours', $array);
	}

	public function fetch_advance_booking_months(){
		return $this->db->get('advance_booking_months')
						->result();
	}

	public function store_user_advance_month($array){
		return $this->db->insert('user_adv_book_month',$array);
	}
	public function update_user_advance_month($otu_id,$array)
	{	
		return	$this->db->where('oauth_uid',$otu_id)
				 ->update('user_adv_book_month', $array);
	}

	public function fetch_user_adv_book_month($item_id,$otu_id){
		$sql = "select * from user_adv_book_month as uadv,advance_booking_months as adv where uadv.advmonth_id=adv.advmonth_id and uadv.oauth_uid='$otu_id' and uadv.item_id='$item_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}

}

?>