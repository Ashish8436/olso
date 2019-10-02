<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Listed_item_approble_model extends CI_Model{

	public function fetch_unapproble_item(){
		$sql = "select * from create_item as ci, users as u where ci.oauth_uid=u.oauth_uid and ci.admin_approble='0' and ci.admin_cancel_reason IS NULL";
		$q= $this->db->query($sql);
		return $q->result();
	}

	public function fetch_unapproble_item_details($random_itemno){
		$sql = "select * from create_item as ci, item_price as ip, item_address as ia, users as u, category as c, sub_category as sc, subcat_type as st where ci.random_itemno=ip.random_itemno and ci.random_itemno=ia.random_itemno and ci.oauth_uid=u.oauth_uid and ci.cat_id=c.cat_id and ci.subcat_id=sc.subcat_id and ci.subtype_id=st.subtype_id and admin_approble='0' and ci.random_itemno='$random_itemno'";
		$q= $this->db->query($sql);
		return $q->row();	
	}

	public function accept_unapproble_item($random_itemno,$array)
	{
		return	$this->db->where('random_itemno',$random_itemno)
				 ->update('create_item', $array);
	}

	public function cancel_unapproble_item($random_itemno,$array)
	{
		return	$this->db->where('random_itemno',$random_itemno)
				 ->update('create_item', $array);
	}
}
?>