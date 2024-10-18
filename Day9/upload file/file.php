<?php
if($_FILES['fileUpload']){
    $file_name = $_FILES['fileUpload']['name'];
    $file_tmp_name = $_FILES['fileUpload']['tmp_name'];

    move_uploaded_file($file_tmp_name,"uploads/".$file_name);
}
else{
    die("no file found");
}

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
?>