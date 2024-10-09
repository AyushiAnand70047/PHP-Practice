<?php
print_r($_REQUEST);
echo "<br/>";
foreach($_REQUEST as $data){
    echo $data;
    echo "<br/>";
}
foreach($_REQUEST as $key=>$data){
    echo $key. " is ". $data;
    echo "<br/>";
}
?>