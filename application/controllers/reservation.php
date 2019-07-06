<?php 
class Reservation extends CI_Controller{

    public function __construct(){
        parent :: __construct();
        $this->load->model('model_reservation');
    }

    public function index(){        
        $data['result']=$this->model_products->get_all_reservation();
        $this->load->view('reservation', $data);
    }

    public function create_reservation(){
        $this->model_products->create_rdata();
        redirect("reservation");
   }

    public function create_reservation1(){
        $this->model_products->create_rdata1();
        redirect("reservation");
    }

    public function reservation_product(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('date', 'Datum', 'required');
        $this->form_validation->set_rules('begin_time', 'Pocetno vrijeme', 'required');
        $this->form_validation->set_rules('end_time', 'Zavrsno vrijeme', 'required|trim');
        $this->form_validation->set_rules('quantity', 'Kolicina', 'required');
      
        if($this->form_validation->run() == FALSE){
            $this->load->view('reservation');
        }else{
            $this->load->model('model_reservation');

            if($query = $this->model_reservation->createp()){
                $this->load->view('reserved');
            }else{
                $this->load->view('reservation');
            }
        }
    }
}
?>