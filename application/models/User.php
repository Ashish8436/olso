<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	
	function __construct() {
        $this->tableName = 'users';
        $this->primaryKey = 'id';

        $this->tableName2 = 'social_Account';
        $this->primaryKey2 = 'social_id';
    }
    
    /*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUser($userData = array()){
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName, $userData, array('id' => $prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            }else{
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName, $userData);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }

    public function checkUser2($userData = array()){
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey2);
            $this->db->from($this->tableName2);
            $this->db->where(array('social_oauth_provider'=>$userData['social_oauth_provider'], 'social_oauth_uid'=>$userData['social_oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['social_modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName2, $userData, array('social_id' => $prevResult['social_id']));
                
                //get user ID
                $userID = $prevResult['social_id'];
            }else{
                //insert user data
                $userData['social_created']  = date("Y-m-d H:i:s");
                $userData['social_modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName2, $userData);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }

    public function user_register($array){
        return $this->db->insert('users',$array);
    }

    private function email_exists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
    }

    public function get_user_detail($email){
        $sql="select * from users where email='$email'";
        $q = $this->db->query($sql);
        return $q->row();
    }
}
