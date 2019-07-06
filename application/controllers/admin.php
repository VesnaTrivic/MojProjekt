<?php 
class Admin extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->helper(['form', 'url']);
        $this->load->model('model_users');
        $this->load->library('session');
    }

    public function index(){
         $this->load->view('admin');
    }

    
}
?>