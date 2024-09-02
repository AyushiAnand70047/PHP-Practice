<?php
$x = 10;
$y = "10";
echo var_dump($x==$y)."<br/>";
echo var_dump($x===$y)."<br/>";
echo var_dump($x!=$y)."<br/>";
echo var_dump($x<>$y)."<br/>";
echo var_dump($x!==$y)."<br/>";
$y = 5;
echo var_dump($x>$y)."<br/>";
echo var_dump($x<$y)."<br/>";
echo var_dump($x>=$y)."<br/>";
echo var_dump($x<=$y)."<br/>"; 
$a = 10;
$b = 5;
$c = 10;
echo $a<=>$b;
echo "<br/>";
echo $b<=>$c;
echo "<br/>";
echo $a<=>$c;
?>