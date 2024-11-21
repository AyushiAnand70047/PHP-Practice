<?php

$courses = array("PHP", "Laravel", "Node js");

echo "I like " . $courses[0] . ", " . $courses[1] . " and " .
    $courses[2];

echo "<br>";

$courseslength = count($courses);
for ($x = 0; $x < $courseslength; $x++) {

    echo $courses[$x];

    echo "<br>";

}
?>