<?php
class Crud_users extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('model_users');
    }

    public function index(){
        $data['result']=$this->model_users->get_all_data();
        $this->load->view('crud_users', $data);
   }

    public function create_user(){
        $this->model_users->create_data();
        redirect('crud_users');
   }

    public function edit_user($user_id){
       $data['row']=$this->model_users->get_data($user_id);
       $this->load->view('crud_edit_user', $data);
   }

    public function update_user($user_id){
       $this->model_users->update_data($user_id);
       redirect('crud_users');
   }

    public function delete_user($user_id){
       $this->model_users->delete_data($user_id);
       redirect('crud_users');
   }

}
?>