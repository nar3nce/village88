<?php

class product extends CI_Model {
    function all_products()
    {
        return $this->db->query("SELECT * FROM products order by id desc")->result_array();
    }
    
    function product_by_id($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
    }
}

?>