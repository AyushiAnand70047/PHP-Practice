<?php

echo $status = (empty($user)) ? "anonymous" : $user;

echo "<br>";

$user = "Michael";

echo $status = (empty($user)) ? "anonymous" : $user;

?>

<?php

echo $status = $user ?? 'anonymous';

echo "<br>";

$user = "Michael";

echo $status = $user ?? 'anonymous';

?>