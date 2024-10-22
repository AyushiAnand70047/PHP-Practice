<form action="" method="post">
    <input type="text" name="user" placeholder="Enter user name"/>
    <br/><br/>
    <button name="btn" value="set">set session</button>
    <button name="btn" value="get">get session</button>
    <button name="btn" value="delete">delete session</button>
</form>

<?php
session_start();
if(isset($_POST['btn'])){
    if($_POST['btn'] == 'set'){
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
    }
    if($_POST['btn'] == 'get'){
        echo $_SESSION['user'];
    }
    if($_POST['btn'] == 'delete'){
        session_destroy();
    }
}

?>