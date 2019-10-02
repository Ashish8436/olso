<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Idverify_model extends CI_Model{

	public function fetch_id_Verify_vendors(){
		$sql = "select * from  id_verification as idv, users where idv.verification_status='0' and idv.oauth_uid=users.oauth_uid ORDER BY idv.verification_id ASC";
		return $this->db->query($sql)->result();
	}

	public function fetch_id_Verify_vendors_details($oauth_uid){
		$sql = "select * from id_verification as idv, users where idv.oauth_uid=users.oauth_uid and idv.verification_status='0' and idv.oauth_uid='$oauth_uid'";
		return $this->db->query($sql)->row();
	}
}
?>