<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Document_management_model extends CI_Model{
	
	public function update_doc_files($oauth_uid,$array){
		return	$this->db->where('oauth_uid',$oauth_uid)
				 		->update('user_documents', $array);
	}

	public function store_doc_files($array){
        return $this->db->insert('user_documents',$array);
    }

    public function update_id_verification($oauth_uid,$array){
		return	$this->db->where('oauth_uid',$oauth_uid)
				 		->update('id_verification', $array);
	}
    public function store_id_verification($array){
        return $this->db->insert('id_verification',$array);
    }

	public function fetch_user_documents($oauth_uid){
		return $this->db->where('oauth_uid',$oauth_uid)
				 ->get('user_documents')
				 ->row();
	}	
}

?>