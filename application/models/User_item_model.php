<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_item_model extends CI_Model {

	public function show_user_items_category($otu_id){
		$sql="select * from create_item, category where create_item.cat_id=category.cat_id and create_item.oauth_uid='$otu_id' Group By create_item.cat_id ORDER BY category.cat_name ASC";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function show_user_items($otu_id,$cat_id){
		$sql="select * from create_item, category, item_price where create_item.cat_id=category.cat_id and create_item.random_itemno=item_price.random_itemno and create_item.cat_id='$cat_id' and create_item.oauth_uid='$otu_id' LIMIT 0,3";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_user_adv_book_month_total($otu_id,$item_id){
		$sql = "select * from user_adv_book_month where oauth_uid='$otu_id' and item_id='$item_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}
}

?>