<?php
$result = array(
    array(
        "name" => "Manoj",
        "cgpa" => 7.8,
        "status" => "pass"
    ),
    array(
        "name" => "Aditya",
        "cgpa" => 8.5,
        "status" => "pass"
    ),
    array(
        "name" => "Anuj",
        "cgpa" => 4.9,
        "status" => "fail"
    )
);
echo $result[0]["name"]. "----CGPA is: " . $result[0]["cgpa"]." and his status is ".$result[0]["status"]."<br>";
echo $result[1]["name"]. "----CGPA is: " . $result[1]["cgpa"]." and his status is ".$result[1]["status"]."<br>";
echo $result[2]["name"]. "----CGPA is: "  . $result[2]["cgpa"]." and his status is ".$result[2]["status"];
?>