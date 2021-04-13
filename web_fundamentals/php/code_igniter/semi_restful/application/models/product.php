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

    function add_product($product)
    {
        $query = "INSERT INTO products (name, description, price) VALUES (?,?,?)";
        $values = array($product['name'], $product['description'], $product['price']); 
        return $this->db->query($query, $values);
    }

    function delete_product($product_id)
    {
        return $this->db->query("DELETE FROM `products` WHERE `products`.`id` = ?", array($product_id));
    }

    function update_product($product)
    {
        $query = "UPDATE `products` SET `name` = ?, `description` = ?, `price` = ? WHERE `products`.`id` = ?;"; 
        $values = array($product['name'], $product['description'], $product['price'], $product['id'] ); 
        return $this->db->query($query, $values);
    }
}

?>