<?php

$courses = array(
    "INT220" => "PHP",
    "INT221" => "Laravel",
    "INT222" => "Node js"
);

echo "INT 220 is " . $courses['INT220'] . ". INT 221 is
" . $courses['INT221'] . ". INT222 is " . $courses['INT222'];

foreach ($courses as $course => $value) {

    echo "Key=" . $course . "," . "Value=" . $value;

    echo "<br>";

}
?>