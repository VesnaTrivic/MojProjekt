<?php 
    class Crud_products extends CI_Controller{
        public function __construct(){
            parent:: __construct();
            $this->load->model('model_products');
        }

        public function index(){
            $data['result']=$this->model_products->get_all_data();
            $this->load->view('admin', $data);
       }

        public function create_product(){
            $this->model_products->create_data();
            redirect('crud_products');
       }

       public function edit_product($product_id){
           $data['row']=$this->model_products->get_data($product_id);
           $this->load->view('crud_edit', $data);
       }

       public function update_product($product_id){
           $this->model_products->update_data($product_id);
           redirect('crud_products');
       }

       public function delete_product($product_id){
           $this->model_products->delete_data($product_id);
           redirect('crud_products');
       }
    }
?>