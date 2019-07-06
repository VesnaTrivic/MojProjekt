<?php
class Model_reservation extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function create_rdata(){

    $data=array(
        'product_id'=>$this->input->post('product_id'),
        'product_name'=>$this->input->post('product_name'),
        'price'=>$this->input->post('price'),
        'image'=>$this->input->post('image')
    );

    $this->db->insert('products', $data);
    }

    public function create_rdata1(){
    $data=array(
        'quantity'=>$this->input->post('quantity'),
        'date'=>$this->input->post('date'),
        'time'=>$this->input->post('time')
    );

    $this->load->insert('order', $data);
    }

    public function createp(){
    $new_product_insert_data = array(
        'date' => $this->input->post('date'),
        'begin_time' => $this->input->post('begin_time'),
        'end_time' => $this->input->post('end_time'),
        'quantity' => $this->input->post('quantity')
    );

    $insert = $this->db->insert('order', $new_product_insert_data);
    return $insert;
    }

    
}
?>