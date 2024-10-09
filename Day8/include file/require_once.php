<?php
require_once("hello-world.php");
echo "<br/>Hi<br/>";
for($i=0;$i<5;$i++){
    require_once("hello-world.php");
    echo "<br/>";
}
?>