<?php
$userDetails = [
    "name"=>"Ayushi",
    "age"=>"20",
    "city"=>"Samastipur",
    "state"=>"Bihar"
];
foreach($userDetails as $key => $data){
    echo $key." is ".$data."<br/>";
}
?>