<?php
$x = 10;
$y = 20;
echo "$x , $y";
echo "<br/>";
if($x == 10 && $y == 20){
    echo "x = 10 and y = 20";
}
echo "<br/>";
if($x == 10 and $y == 20){
    echo "x = 10 and y = 20";
}
echo "<br/>";
if($x == 10 || $y == 10){
    echo "x = 10 or y = 10";
}
echo "<br/>";
if($x == 10 || $y == 20){
    echo "x = 10 or y = 20";
}
echo "<br/>";
if($x == 10 xor $y == 10){
    echo "x = 10 xor b = 10";
}
echo "<br/>";
if($x == 10 xor $y == 20){
    echo "x = 10 xor y = 20";
}
if($x != 10){
    echo "x is not 10";
}
?>