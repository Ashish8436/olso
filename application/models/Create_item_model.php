<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Create_item_model extends CI_Model{

	function fetch_subcat($category_id)
	 {
	  $this->db->where('cat_id', $category_id);
	  $this->db->order_by('subcat_name', 'ASC');
	  $query = $this->db->get('sub_category');
	  $output = '<option value="">Choose Sub-Category...</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->subcat_id.'">'.$row->subcat_name.'</option>';
	  }
	  return $output;
	 }

	 function fetch_subtype($subcat_id)
	 {
	  $this->db->where('subcat_id', $subcat_id);
	  $this->db->order_by('subtype_name', 'ASC');
	  $query = $this->db->get('subcat_type');
	  $output = '<option value="">Choose Types...</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->subtype_id.'">'.$row->subtype_name.'</option>';
	  }
	  return $output;
	 }

	 function fetch_subtype_items($subtype_id)
	 {
	 	$out_id = $this->session->userdata('oauth_uid');
	 	$sql = "select * from create_item where subtype_id='$subtype_id' and oauth_uid='$out_id' ORDER BY item_id ASC";
	 	$query = $this->db->query($sql);
	  
		  $output = '<option value="">Choose Item...</option>';
		  foreach($query->result() as $row)
		  {
		   $output .= '<option value="'.$row->item_id.'">'.$row->item_name.'</option>';
		  }
		  return $output;
	 }

	 function fetch_state($country_id)
	 {
	  $this->db->where('country_id', $country_id);
	  $this->db->order_by('state_name', 'ASC');
	  $query = $this->db->get('state');
	  $output = '<option value="">Choose State...</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
	  }
	  return $output;
	 }

	 function fetch_city($state_id)
	 {
	  $this->db->where('state_id', $state_id);
	  $this->db->order_by('city_name', 'ASC');
	  $query = $this->db->get('cities');
	  $output = '<option value="">Choose City...</option>';
	  foreach($query->result() as $row)
	  {
	   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
	  }
	  return $output;
	 }

	 public function get_category(){
	 	$sql="select * from category where cat_status='1'";
		$q = $this->db->query($sql);
		return $q->result();
	 }

	public function store_items($array){
		return $this->db->insert('create_item',$array);
	}

	public function store_items_price($array){
		return $this->db->insert('item_price',$array);
	}

	public function store_items_address($array){
		return $this->db->insert('item_address',$array);
	}

	public function fetch_create_items($random_itemno){
		$sql="select * from create_item, item_price, item_address where create_item.random_itemno=item_price.random_itemno and create_item.random_itemno=item_address.random_itemno and create_item.random_itemno=$random_itemno";
		$q = $this->db->query($sql);
		return $q->row();
	}

	public function fetch_subcategory($cat_id){
		$sql="select * from sub_category where cat_id=$cat_id";
		$q = $this->db->query($sql);
		return $q->result();
	}
	public function fetch_subcategory_type($subcat_id){
		$sql="select * from subcat_type where subcat_id=$subcat_id";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_item_oper_available(){
		$sql="select * from operator_be_available";
		$q = $this->db->query($sql);
		return $q->result();
	}
	public function fetch_available_for_delivery(){
		$sql="select * from available_for_delivery";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_item_state($country_id){
		$sql="select * from state where country_id=$country_id";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_item_city($state_id){
		$sql="select * from cities where state_id=$state_id";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_month(){
		return $this->db->get('month')
				 ->result();
	}
	public function fetch_hours(){
		return $this->db->get('hours')
				 ->result();
	}

	public function update_items($random_itemno,$array){
		return	$this->db->where('random_itemno',$random_itemno)
				 ->update('create_item', $array);
	}

	public function update_items_price($random_itemno,$array){
		return	$this->db->where('random_itemno',$random_itemno)
				 ->update('item_price', $array);
	}

	public function update_items_address($random_itemno,$array){
		return	$this->db->where('random_itemno',$random_itemno)
				 ->update('item_address', $array);
	}

	public function fetch_user_items($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
						->get('create_item')
						->result();
	}

	public function store_create_offer($array){
		return $this->db->insert('offers',$array);
	}

	


}
?>