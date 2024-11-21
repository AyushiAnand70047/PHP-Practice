<?php

$result = array(

array('name'=>'Manoj','cgpa'=>6.7,'status'=>'pass'),

array('name'=>"Shalini",'cgpa'=>9.8,'status'=>'pass'),

array('name'=>'Mani','cgpa'=>3.2,'status'=>'fail')

);

$names = array_column($result, 'status', 'name');

print_r($names);

?>