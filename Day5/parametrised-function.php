<?php

function sum($num1,$num2){
    echo $num1 + $num2;
    echo "<br/>";
}

sum(20,50);
sum(10,40);
sum(30,60);

function applycolor($name,$color){
    echo "<h1 style='color:$color'>$name</h1>";
}

applycolor("Ayushi","red");
applycolor(" Anand","green");

?>