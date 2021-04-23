<?php 
    class Task extends CI_Model {
        
        function get_tasks()
        {
            return $this->db->query("SELECT * FROM tasks order by id desc")->result_array();
        }

        function add_task($data)
        {
            $query = "INSERT INTO tasks (name) VALUES (?)"; 
            return $this->db->query($query, $data);
        }

        function edit_task($data)
        {
            $query = "UPDATE `tasks` SET `name` = ? WHERE `tasks`.`id` = ?;            "; 
            $values = array($data['task_name'], $data['id']); 
            return $this->db->query($query, $values);
        }

        function complete_task($data)
        {
            $query = "UPDATE `tasks` SET `status` = ? WHERE `tasks`.`id` = ?;            "; 
            $values = array('completed', $data['id']); 
            return $this->db->query($query, $values);
        }
    }
?>