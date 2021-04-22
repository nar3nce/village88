<?php

class post extends CI_Model {
    function fetch_all()
    {
        return $this->db->query("SELECT * FROM posts order by id desc")->result_array();
    }

    function insert_post($data)
    {
        $query = "INSERT INTO posts (id, description, created_at) VALUES (NULL, ?, ?)";
        $values = array($data['description'], date('y-m-d h:i:s A')); 
        return $this->db->query($query, $values);
    }
}

?>