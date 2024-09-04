<?php
$users = [
    [1,"Ayushi","Samastipur"],
    [2,"Anand","Patna"],
    [3,"Tauqueer","Dehri"]
];
echo "<pre>";
print_r($users);
echo "</pre>";
for($i=0;$i<count($users);$i++){
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j]." ";
    }
    echo "<br/>";
}
?>