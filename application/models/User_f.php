<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_f extends CI_Model{
    function __construct() {
        $this->tableName = 'users';
        $this->primaryKey = 'user_id';
    }
    
    /*
     * Insert / Update facebook profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUserF($userDataF = array()){
        if(!empty($userDataF)){
            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            $this->db->where(array('oauth_uid'=>$userDataF['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                // $userDataF['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName,$userDataF,array('user_id'=>$prevResult['user_id']));
                
                //get user ID
                $userID = $prevResult['user_id'];
            }else{
                //insert user data
                //$userDataF['created']  = date("Y-m-d H:i:s");
                //$userDataF['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName,$userDataF);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }
}