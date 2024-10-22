<?php
session_start();
//echo $_SESSION['color'];
//echo $_SESSION['fruit'];
print_r($_SESSION);
// destroy session
session_destroy();
?>