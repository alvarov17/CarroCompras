<?php
include 'database.php';

$query = "select * from producto";
$result = $conn->query($query);
$rows = array();

while ($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}

print json_encode($rows);
exit();
?>
