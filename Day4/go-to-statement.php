<?php
$x = 10;
if($x + 2 == 12){
    echo "Inside if ";
    goto abc;
}
echo "statement before goto ";
echo "This part is skipped if condition is true ";
abc:
echo "Statement after goto ";
echo "done";
?>