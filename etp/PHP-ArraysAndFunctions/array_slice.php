<?php

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"bro
wn");

print_r(array_slice($a,1,2));

echo "<br>";

$a=array("red","green","blue","yellow","brown");

print_r(array_slice($a,1,2,true));

?>