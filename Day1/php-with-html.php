<!-- HTML inside PHP -->
<?php
$h2_color = "skyblue";
$heading = "This is heading";
echo "<h1 style='color: green'>$heading 1</h1>";
echo "<h2 style='color: blue'>$heading 2</h2>";
echo "<h3 style='color: red'>$heading 3</h3>";
?>

<!-- php inside HTML -->
<h4 style="color: pink">
    <?php
    echo "$heading 4";
    ?>
</h4>

<h2 style="color: <?php echo $h2_color; ?>">Dynamic colour</h2>
<h2 style="color: <?php echo $h2_color; ?>">Dynamic colour</h2>
<h2 style="color: <?php echo $h2_color; ?>">Dynamic colour</h2>
<h2 style="color: <?php echo $h2_color; ?>">Dynamic colour</h2>