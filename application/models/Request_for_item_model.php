<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Request_for_item_model extends CI_Model{

	public function store_request_for_item($array){
		return $this->db->insert('request_for_item',$array);
	}
}

?>