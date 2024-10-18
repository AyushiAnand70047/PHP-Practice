<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call PHP function</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" value="button1">Call Function</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    btn_click_test();
}

function btn_click_test(){
    echo "Function called on button click";
}

?>