<?php
$a = 5;
$b = 20;
$b = $a; // a=5,b=5
echo $b."<br/>";
$b += $a; // b = 5+5 = 10
echo $b."<br/>";
$b -= $a; // b = 10-5=5
echo $b."<br/>";
$b *= $a; // b = 5*5 = 25
echo $b."<br/>";
$b /= $a; // b = 25/5 = 5
echo $b."<br/>";
$b %= $a; // b = 5%5 = 0
echo $b."<br/>";
$a /= 2;
echo $a."<br/>";
?>