<?php

// get request
// if($_GET){
//     echo "User name is ".$_GET['user_name']."<br/>";
//     echo "User password is ".$_GET['user_password'];
// }

// post request
print_r($_POST);
echo "<br/>";
echo "User name is ".$_POST['user_name']."<br/>";
echo "User password id ".$_POST['user_password'];
?>