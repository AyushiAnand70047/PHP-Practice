<?php
$userDetails = [
    ["name"=>"Ayushi","age"=>"20","email"=>"ayushianand088@gmail.com"],
    ["name"=>"Tauqueer","age"=>"21","email"=>"tauqueeralam42@gmail.com"],
    ["name"=>"Anand","age"=>"20","email"=>"ayushianand763@gmail.com"]
];
echo "<pre>";
print_r($userDetails);
echo "</pre>";
foreach($userDetails as $user){
    foreach($user as $key => $value){
        echo $key. " is ". $value.", ";
    }
    echo "<br/>";
}
?>