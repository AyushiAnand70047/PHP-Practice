<?php
include("hello-world.php");
echo "<br/>Hi<br/>";
for($i=0;$i<5;$i++){
    include("hello-world.php");
    echo "<br/>";
}
?>