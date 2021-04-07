<?php


$csv =  array_map('str_getcsv', file('us-500.csv'));

foreach ($csv as $key => $csv_)
{
    echo $key;
}

?>