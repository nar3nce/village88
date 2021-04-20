<?php

class product extends DataMapper {

    var $created_field = 'date_created';
    var $table = 'products';
    
    var $has_one = array("manufacturer");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>