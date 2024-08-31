<?php
$name = "Ayushi Anand";
echo $name."<br/>";
echo var_dump($name)."<br/>";
$num = 10;
echo $num."<br/>";
echo var_dump($num)."<br/>";
$numFloat = 10.99;
echo $numFloat."<br/>";
echo var_dump($numFloat)."<br/>";
$bool = true;
echo $bool."<br/>";
echo var_dump($bool)."<br/>";
$arr = ["Ayushi","Tauqueer",1];
// echo $arr."<br/>";
print_r($arr);
echo "<br/>";
echo var_dump($arr)."<br/>";
$empty = null;
echo $empty."<br/>";
echo var_dump($empty)."<br/>";
//$user = new className();
$connection = ftp_connect("127.0.0.1") or die("local host not found");
echo var_dump($connection);
?>