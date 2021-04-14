<?php

class user extends CI_Model {
    
    function search_player($search_player)
    {
        return $this->db->query("SELECT * FROM `users` WHERE name = ? or gender = ? or sports = ?", array($search_player['name'], $search_player['gender'], $search_player['sport']))->result_array();
    }

}

?>