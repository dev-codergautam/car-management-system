<?php
class datawork extends CI_model{
        
    public function insert_data($table,$fields){
        $this->db->insert($table,$fields);
        return TRUE;
    }

    public function check_data($table,$con){
        $data = $this->db->where($con)
                         ->get($table);
        if($data->num_rows() > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function count_data($table,$con){
        $data = $this->db->where($con)
                         ->get($table);
        
        return $data->num_rows();
    }
    
    public function count_all($table, $where = NULL){
        if($where = NULL){
            $count = $this->db->count_all_results($table);
            return $count;
        }
        else
        {
            $count = $this->db->where($where)
                              ->count_all_results($table);
            return $count;
        }
    }
    
    public function count_all_note($id){
        $query = $this->db->where("(n_userid = '$id' || n_userid = '0')")
                          ->where("(n_status = '0' || n_status = '2')")    
                          ->count_all_results("notification");
        return $query;
    }
    
    public function update_data($table,$fields,$con){
        $this->db->where($con)->update($table,$fields);
    }
    
    public function get_data_lim_ord($table, $where, $order){
        $data = $this->db->where($where)
                         ->order_by($order, 'DESC')
                         ->limit('8')
                         ->get($table);
                             
        return $data->result();
    }
    
    public function getdata_lim_ord($table, $where, $order, $limit){
        $data = $this->db->where($where)
                         ->order_by($order, 'DESC')
                         ->limit($limit)
                         ->get($table);
                             
        return $data->result();
    }
    
    public function get_ads($session, $id){
        $data = $this->db->where("(b_userid = '$session' && b_id != '$id')")
                         ->order_by('b_id', 'DESC')
                         ->limit('4')
                         ->get('myads');
        return $data->result();
    }
    
    public function get_services($id){
        $data = $this->db->where("(s_id != '$id')")
                         ->order_by('s_id', 'DESC')
                         ->limit('4')
                         ->get('services');
        return $data->result();
    }
    
    public function get_latestads(){
        $data = $this->db->order_by('b_id', 'DESC')
                         ->limit('10')
                         ->get('myads');
        return $data->result();
    }
    
    public function get_latestblogs($id){
        $data = $this->db->order_by('bl_id', 'DESC')
                         ->limit('10')
                         ->where("(bl_id != '$id')")
                         ->get('blogs');
        return $data->result();
    }
    
    public function get_similardata($where, $slug){
        $data = $this->db->order_by('id', 'DESC')
                         ->limit('4')
                         ->where("(status = '0' AND category = '$where' AND name_slug != '$slug')")
                         ->get('bizz');
                         
        return $data->result();
    }
    
    public function get_data($table,$con=NULL,$order=NULL){
        if($con===NULL){
            $data = $this->db->order_by($order)->get($table);
            return $data->result();
        }
        else if ($order == NULL){
            $data = $this->db->where($con)
                             ->get($table);
                             
            return $data->result();
        }
        else {
            $data = $this->db->where($con)
                             ->order_by($order)
                             ->get($table);
            return $data->result();
        }
    }
    
    public function get_notification($table, $con, $order){
        $data = $this->db->where($con)
                         ->or_where('n_userid', '0')
                         ->order_by($order)
                         ->get($table);

        return $data->result();
    }
    
    public function delete_data($table,$con){
        $this->db->delete($table,$con);
        return TRUE;
    }
    
    public function admin_login($table, $username, $password){
        $data = $this->db
                     ->where($username)
                     ->where($password)
                     ->get($table);
        if($data->num_rows() > 0){
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    /*
    public function login($username, $password){
        $query = $this->db->select('*')
                                 ->from('users')
                                 ->where("(u_email = '$username' OR u_contact = '$username')")
                                 ->where('u_password', $password);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function getsession($username){
         $query = $this->db->select('*')
                                 ->from('users')
                                 ->where("(u_email = '$username' OR u_contact = '$username')");
        $query = $this->db->get();
        $data = $query->row_array();
        $loginid = $data['user_id'];
        return $loginid;
    }
    */
    public function get_new_bizzid($id){
         $query = $this->db->select('*')
                                 ->from('bizz')
                                 ->where('u_id', $id)
                                 ->order_by('id DESC');
        $query = $this->db->get();
        $data = $query->row_array();
        $n_id = $data['id'];
        return $n_id;
    }
    
    public function get_new_servicesid($id){
         $query = $this->db->select('*')
                                 ->from('services')
                                 ->where('s_userid', $id)
                                 ->order_by('s_id DESC');
        $query = $this->db->get();
        $data = $query->row_array();
        $n_id = $data['s_id'];
        return $n_id;
    }
    
    public function get_new_blogid($id){
         $query = $this->db->select('*')
                                 ->from('blogs')
                                 ->where('bl_userid', $id)
                                 ->order_by('bl_id DESC');
        $query = $this->db->get();
        $data = $query->row_array();
        $n_id = $data['bl_id'];
        return $n_id;
    }
    
    public function get_id($table, $where){
        $data = $this->db->where($where)->get($table);
        
        return $data->row_array();
    }
        
    public function update_image($table, $fields, $where){
        $this->db->where($where);
        $this->db->update($table, $fields);
    }
    
    public function get_search_event(){
       $match = $this->input->post('query');
        $this->db->where(array('parent_cate'=>'E1000', 'status'=> '0'));
        $this->db->like('business_name', $match);
        $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $this->db->or_like('city', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    public function get_search_medical(){
        $match = $this->input->post('query');
        $this->db->where(array('parent_cate'=>'M1000', 'status'=> '0'));
        $this->db->like('business_name', $match);
         $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $this->db->or_like('city', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    public function get_search_education(){
        $match = $this->input->post('query');
        $this->db->where(array('parent_cate'=>'S1000', 'status'=> '0'));
        $this->db->like('business_name', $match);
        $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    public function get_search_services(){
        
        $match = $this->input->post('query');
        $this->db->where(array('parent_cate'=>'K1000', 'status'=> '0'));
        $this->db->like('business_name', $match);
        $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $this->db->or_like('city', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    public function get_search_construction(){
        
        $match = $this->input->post('query');
        $this->db->where(array('parent_cate'=>'C1000', 'status'=> '0'));
        $this->db->like('business_name', $match);
        $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $this->db->or_like('city', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    public function get_search_shops(){
        
        $match = $this->input->post('query');
        $this->db->where(array('parent_cate'=>'SH100', 'status'=> '0'));
        $this->db->like('business_name', $match);
        $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $this->db->or_like('city', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    public function get_search_main(){
        $match = $this->input->post('query');
        $this->db->where('status', '0');
        $this->db->like('business_name', $match);
        $this->db->or_like('category', $match);
        $this->db->or_like('description', $match);
        $this->db->or_like('city', $match);
        $query = $this->db->get('bizz');
        return $query->result();
    }
    
    function fetch_data($query){
        $this->db->select("*");
        $this->db->from("bizz");
        $this->db->where("(step_status = 0 AND status = 0)");
        if($query != '')
        {
            $this->db->like('business_name', $query);
            $this->db->or_like('category', $query);
            $this->db->or_like('city', $query);
            // $this->db->or_like('PostalCode', $query);
            // $this->db->or_like('Country', $query);
        }
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }
    
    public function insert($data = array()){
        $insert = $this->db->insert_batch('productgallery', $data);
        return $insert?true:false;
    }
    
    public function insertBlogImage($data = array()){
        $insert = $this->db->insert_batch('carimage', $data);
        return $insert?true:false;
    }
    
    function searchCondition($table,$query,$city){
        $query = $this->db
                      ->where(['city'=>$city])
                      ->like('business_name', $query)
                      ->or_like('category', $query)
                      ->or_like('sub_cate', $query)
                      ->get($table);
        return $query->result();
    }
    // Join Data of Two Table
    public function join_data($fromtable, $jointable, $con){
        $this->db->select('*');
        $this->db->from($fromtable);
        $this->db->join($jointable, $con, 'left');
        $this->db->order_by('r_bizzid', 'DESC');
        $query = $this->db->get();
        
        return $query->result();
    }
}
?>