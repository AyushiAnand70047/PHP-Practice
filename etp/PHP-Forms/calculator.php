<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" placeholder="Enter first number" name="num1">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="number" placeholder="Enter second number" name="num2">
        <button>Calculate</button>
    </form>
</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = $_POST['num1'];
    $opr = $_POST['operation'];
    $num2 = $_POST['num2'];
    if($opr == "+"){
        $value = $num1 + $num2;
    }
    if($opr == "-"){
        $value = $num1 - $num2;
    }
    if($opr == "*"){
        $value = $num1 * $num2;
    }
    if($opr == "/"){
        $value = $num1 / $num2;
    }
    if($opr == "%"){
        $value = $num1 % $num2;
    }
    echo "$num1 $opr $num2 = $value";
}
?>