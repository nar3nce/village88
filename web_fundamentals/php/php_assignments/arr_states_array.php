<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

echo '<select name="" id="">';
for($i = 0; $i < count($states); $i++){
    echo'<option value="">'.$states[$i].'</option>';
}
echo '</select>';


echo '<select name="" id="">';
foreach($states as $states_){
    echo'<option value="">'.$states_.'</option>';
}
echo '</select>';

array_push($states,"NJ","NY","DE");

echo '<select name="" id="">';
foreach($states as $states_){
    echo'<option value="">'.$states_.'</option>';
}
echo '</select>';

?>