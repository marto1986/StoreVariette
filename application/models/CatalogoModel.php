<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class CatalogoModel extends CI_Model {
 
    public function construct() {
        parent::__construct();
    }
    
    function traerProductos(){
            $query = $this->db->get('pantuflas');
            return $query->result_array(); 
    }

    function validate_add_cart_item(){
     
    $id = $this->input->post('id'); // Assign posted product_id to $id
    $cty = $this->input->post('quantity'); // Assign posted quantity to $cty
     
    $this->db->where('id', $id); // Select where id matches the posted id
    $query = $this->db->get('pantuflas', 1); // Select the products where a match is found and limit the query by 1
     
    // Check if a row has matched our product id
    if($query->num_rows > 0){
     
    // We have a match!
        foreach ($query->result() as $row)
        {
            // Create an array with product information
            $data = array(
                'id'      => $id,
                'qty'     => $cty,
                'price'   => $row->price,
                'name'    => $row->name
            );
 
            // Add the data to the cart using the insert function that is available because we loaded the cart library
            $this->cart->insert($data); 
             
            return TRUE; // Finally return TRUE
        }
     
    }else{
        // Nothing found! Return FALSE! 
        return FALSE;
    }
} 
}