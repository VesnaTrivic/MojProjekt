<?php

class Model_users extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

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

    public function create_data(){
        $data = array(
            'username'=>$this->input->post('username'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'cpassword'=>$this->input->post('cpassword'),
            'user_type'=>$this->input->post('user_type')
        );
        $this->db->insert('users', $data);
    }

    public function get_all_data(){
        $query = $this->db->query('SELECT * FROM users');
        return $query->result();
    }

    public function get_data($user_id){
        $query = $this->db->query('SELECT * FROM users WHERE `user_id`=' .$user_id);
        return $query->row();
    }

    public function update_data($user_id){
        $data = array(
            'username'=>$this->input->post('username'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=>$this->input->post('last_name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'cpassword'=>$this->input->post('cpassword'),
            'user_type'=>$this->input->post('user_type')
        );
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);
    }

    public function delete_data($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->delete('users');
    }
}
?>