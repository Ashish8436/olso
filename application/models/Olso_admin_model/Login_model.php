<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model{

	public function admin_featch_login($email){
		$sql="select * from admin_login where admin_email='$email'";
		$q = $this->db->query($sql);
		return $q->row();
	}
}

?>