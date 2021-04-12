<?php

class student extends CI_Model {
    
    function get_student_by_email($email)
    { 
        $query = 'SELECT * FROM users WHERE email = ?';
        $values = array($email);
        return $this->db->query($query, $values)->row_array();
    }

    function login($user)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ? and password = ?", array($user['email'], $user['password']))->row_array();
    }

    function register_user($user)
    {
        $query = "INSERT INTO users (fullname, email, password, date) VALUES (?,?,?,?)";
        $values = array($user['fullname'], $user['email'], $user['password'], date("y-m-d")); 
        return $this->db->query($query, $values);
    }
}

?>