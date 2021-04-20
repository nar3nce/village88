<?php

class Customer extends CI_Model {

    function select()
    {
        return $this->db->query("
        SELECT CONCAT(clients.first_name,' ', clients.last_name) as client_name, 
        COUNT(leads.site_id) as num_leads FROM `leads`
        LEFT JOIN sites ON leads.site_id = sites.site_id
        LEFT JOIN clients ON sites.client_id = clients.client_id
        GROUP BY leads.site_id limit 5
        ")->result_array();
    }

    function select_customers($date_deatails)
    {
        return $this->db->query("
        SELECT CONCAT(clients.first_name,' ', clients.last_name) as client_name, 
        COUNT(leads.site_id) as num_leads FROM `leads`
        LEFT JOIN sites ON leads.site_id = sites.site_id
        LEFT JOIN clients ON sites.client_id = clients.client_id
        WHERE leads.registered_datetime BETWEEN ? AND ?
        GROUP BY leads.site_id limit 5
        ",array($date_deatails['from_date'], $date_deatails['to_date']))->result_array();
    }

    function select_customers_by_name($name)
    {
        return $this->db->query("
        SELECT CONCAT(clients.first_name,' ', clients.last_name) as client_name, 
        COUNT(leads.site_id) as num_leads FROM `leads`
        LEFT JOIN sites ON leads.site_id = sites.site_id
        LEFT JOIN clients ON sites.client_id = clients.client_id
        WHERE clients.first_name = ? or clients.last_name = ?
        GROUP BY clients.first_name , clients.last_name limit 5
        ",array($name, $name))->result_array();
    }

    function select_limit($name)
    {
        return $this->db->query("
        SELECT CONCAT(clients.first_name,' ', clients.last_name) as client_name, 
        COUNT(leads.site_id) as num_leads FROM `leads`
        LEFT JOIN sites ON leads.site_id = sites.site_id
        LEFT JOIN clients ON sites.client_id = clients.client_id
        GROUP BY leads.site_id limit 5 offset ?
        ",intval($name))->result_array();
    }
}

?>