<?php
require("hello-world.php");
echo "<br/>Hi<br/>";
for($i=0;$i<5;$i++){
    require("hello-world.php");
    echo "<br/>";
}
?>