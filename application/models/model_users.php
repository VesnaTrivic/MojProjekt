<?php

class Model_users extends CI_Model{
    
    public function can_log_in(){

        $this->db->select('username, password, user_type');        
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));
        $this->db->limit(1);
        $query=$this->db->get('users');

        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function create_member(){
        $new_member_insert_data = array(
            'username' => $this->input->post('username'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'cpassword' => $this->input->post('cpassword')
        );

        $insert = $this->db->insert('users', $new_member_insert_data);
        return $insert;
    }

}
?>