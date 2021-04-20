<?php

class manufacturer extends DataMapper {

    var $table = 'manufacturer';
    var $has_many = array("product");
    
    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>