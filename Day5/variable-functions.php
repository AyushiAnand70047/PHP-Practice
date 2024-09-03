<?php
function test(){
    echo "test function is called";
}
$val = "test";
$val();
// callback function
function check($val){
    echo "test function is passed as parameter";
    $val();
}
check($val);
?>