<?php
$result = array (
  array("Manoj",7.8,"pass"),
  array("Aditya",8.5,"pass"),
  array("Anuj",4.9,"fail")

);
    
for ($row = 0; $row < 3; $row++) {
  echo "<h4>Row number $row</h4>";
  for ($col = 0; $col < 3; $col++) {
    echo $result[$row][$col]."<br>";
  }
}
?>