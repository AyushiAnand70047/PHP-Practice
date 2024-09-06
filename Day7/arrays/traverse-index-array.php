<?php
$courses = array("PHP", "Laravel", "Node js"); 
$courseslength = count($courses);

for($x = 0; $x <$courseslength; $x++) {
  echo $courses[$x];
  echo "<br>";
}
?>