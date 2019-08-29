<?php 
    class Controller_reservation extends CI_Controller{

        public function __construct(){
            parent :: __construct();
            $this->load->model('model_reservation');
        }

        public function index(){
            $data['result']=$this->model_reservation->get_all_reservation();
            $this->load->view('reservation1', $data);
        }

        public function create_reservation(){
            $this->model_reservation->create_order();
            redirect("controller_reservation");
        }

    }

?>