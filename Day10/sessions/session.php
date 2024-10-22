<?php
session_start();
$_SESSION['color'] = "red";
$_SESSION['fruit'] = "mango";
echo $_SESSION['fruit'];
?>