<?php

$lang = "PHP";

function mytest()

{

global $lang;

echo $lang;

echo "<br>";

}

mytest();

echo $lang;

?>