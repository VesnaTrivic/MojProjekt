<?php 
class Admin extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->helper(['form', 'url']);
        $this->load->model('model_users');
        $this->load->library('session');
        }
    }

    public function index(){
        $this->load->model('model_users');
        $users = $this->model_users->get();

        $this->load->view('admin/admin', ['users' => $users]);
    }

    public function create_user(){

        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $cpassword = $this->input->post('cpassword');

        $this->load->model('model_users');
        $this->model_users->create($first_name, $last_name, $username, $email, $password, $cpassword);
    }

    public function delete_user($user_id){
        $this->load->model('model_users');
        echo $this->model_users->delete(user_id);
    }
}
?>