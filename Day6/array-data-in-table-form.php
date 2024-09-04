<html>
<head>
    <style>
        table,tr,td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <?php
    $users = [
        [1,"Ayushi","Samastipur"],
        [2,"Anand","Patna"],
        [3,"Tauqueer","Dehri"]
    ];
    echo "<table>";
    for($i=0;$i<count($users);$i++){
        echo "<tr>";
        for($j=0;$j<count($users[$i]);$j++){
            echo "<td>";
            echo $users[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>