<?php
$fname = "Ayushi";
function getName(){
    $lname = "Anand";
    //echo $fname;
    global $fname;
    // we can update global variable inside function
    //$fname = "Tauqueer";
    echo $fname;
    echo $lname;
}
getName();
echo $fname;
echo $lname;
?>