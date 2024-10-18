<?php
$fruit_name = "apple";
setcookie("fruit",$fruit_name,time()+(86400));
if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);
    echo "current cookie is ".$_COOKIE['fruit'];
}
else{
    echo "no cookie set";
}
?>