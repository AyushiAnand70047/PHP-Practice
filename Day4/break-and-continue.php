<?php
for($i=1;$i<=10;$i++){
    echo $i;
    echo "<br/>";
    if($i == 5){
        echo "Break at $i";
        echo "<br/>";
        break;
    }
}
for($i=1;$i<=10;$i++){
    if($i == 5 || $i == 7){
        echo "continue at $i";
        echo "<br/>";
        continue;
    }
    echo $i;
    echo "<br/>";
}
?>