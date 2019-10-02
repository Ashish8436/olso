<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_details_model extends CI_Model {
	
	public function get_users_details($otu_id){
		$sql="select * from users where oauth_uid='$otu_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}

	public function store_profile_info($oauth_uid,$array){
		return	$this->db->where('oauth_uid',$oauth_uid)
				 		->update('users', $array);
	}

	public function update_profile_picture($oauth_uid,$array){
		return	$this->db->where('oauth_uid',$oauth_uid)
				 		->update('users', $array);
	}

	public function get_language(){
		return $this->db->get('language')
				 ->result();
	}

	public function fetch_social_account($otu_id){
		return $this->db->where('oauth_uid',$otu_id)
						->get('social_account')
				 		->row();
	}

	public function fetch_id_verification($otu_id){
		$sql="select * from id_verification where oauth_uid='$otu_id'";
		$q = $this->db->query($sql);
		return $q->row();
	}

	
}

?>