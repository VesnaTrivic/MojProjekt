<?php 
class Model_products extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function create_data(){
        $data = array(
            'product_name'=>$this->input->post('product_name'),
            'price'=>$this->input->post('price'),
            'image'=>$this->input->post('image')
        );
        $this->db->insert('products', $data);
    }

    public function get_all_data(){
        $query = $this->db->query('SELECT * FROM products');
        return $query->result();
    }

    public function get_data($product_id){
        $query = $this->db->query('SELECT * FROM products WHERE `product_id`=' .$product_id);
        return $query->row();
    }

    public function update_data($product_id){
        $data = array(
            'product_name'=>$this->input->post('product_name'),
            'price'=>$this->input->post('price'),
            'image'=>$this->input->post('image')
        );
        $this->db->where('product_id', $product_id);
        $this->db->update('products', $data);
    }

    public function delete_data($product_id){
        $this->db->where('product_id', $product_id);
        $this->db->delete('products');
    }
}
?>