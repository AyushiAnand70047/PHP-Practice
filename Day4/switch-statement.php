<?php
$day = "Tuesday";
switch($day){
    case "Monday":
        echo "Work from 9 to 5";
        break;
    case "Tuesday":
        echo "Work in night shift";
        break;
    case "Wednesday":
        echo "Nothing to do";
        break;
    case "Thursday":
        echo "work from 10 to 6";
        break;
    default:
        echo "Holiday";
}
?>