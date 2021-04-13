<?php

class email extends CI_Model {
    

    function get_email($post)
    {
        return $this->db->query("SELECT * FROM users WHERE email = '{$post}'")->row_array();
        //return  "SELECT * FROM users WHERE email = '{$post}'";
    }

}

?>