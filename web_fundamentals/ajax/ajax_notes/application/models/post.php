<?php

class post extends CI_Model {
    function fetch_all()
    {
        return $this->db->query("SELECT * FROM posts order by id desc")->result_array();
    }

    function insert_post($data)
    {
        $query = "INSERT INTO posts (id, title, description, created_at) VALUES (NULL, ?, ?, ?)";
        $values = array($data['title'],$data['description'], date('y-m-d h:i:s A')); 
        return $this->db->query($query, $values);
        
    }

    function delete_post($data)
    {
        $query = "DELETE FROM `posts` WHERE `posts`.`id` =  ?"; 
        return $this->db->query($query, $data);
        
    }
}

?>