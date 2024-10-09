<?php
include_once("hello-world.php");
echo "<br/>Hi<br/>";
for($i=0;$i<5;$i++){
    include_once("hello-world.php");
    echo "<br/>";
}
?>