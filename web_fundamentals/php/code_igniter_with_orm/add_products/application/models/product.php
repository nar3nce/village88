<?php

class product extends DataMapper {

    var $created_field = 'date_created';
    var $table = 'products';
    

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>