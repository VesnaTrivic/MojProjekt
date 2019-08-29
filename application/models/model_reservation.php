<?php
class Model_reservation extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function create_order(){
        $data=array(
            'user_id'=>$this->input->post('user_id'),
            'product_id'=>$this->input->post('product_id'),
            'date'=>$this->input->post('date'),
            'begin_time'=>$this->input->post('begin_time'),
            'end_time'=>$this->input->post('end_time'),
            'quantity'=>$this->input->post('quantity')
        );
    
        $this->db->insert('orders', $data);
    }

    
    public function get_all_reservation(){
        $query = $this->db->query('SELECT * FROM orders');
        return $query->result();
    }
    
}
?>
