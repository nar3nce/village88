<?php

class Course extends CI_Model {
    function get_all_courses()
    {
        return $this->db->query("SELECT * FROM courses order by id desc")->result_array();
    }

    function get_course_by_id($course_id)
    {
        return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
    }

    function add_course($course)
    {
        $query = "INSERT INTO Courses (name, description, date) VALUES (?,?,?)";
        $values = array($course['title'], $course['description'], date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }

    function destroy_course($course_id)
    {
        return $this->db->query("DELETE FROM `courses` WHERE `courses`.`id` = ?", array($course_id));
    }
}

?>