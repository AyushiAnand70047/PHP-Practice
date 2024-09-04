<?php
$users = ["Ayushi","Anand","Tauqueer"];
echo "<pre>";
print_r($users);
array_push($users,"Alam");
print_r($users);
array_push($users,"sweksha","shubh");
print_r($users);
array_pop($users);
print_r($users);
array_splice($users,-2);
print_r($users);
echo "<pre/>";
?>