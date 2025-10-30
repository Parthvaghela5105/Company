<<<<<<< HEAD
<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");
$users = [];

while ($row = $result->fetch_assoc()) {
  $users[] = $row;
}

echo json_encode($users);
?>
=======
<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");
$users = [];

while ($row = $result->fetch_assoc()) {
  $users[] = $row;
}

echo json_encode($users);
?>
>>>>>>> 7d694a78247822321e911d7d64a2177850f3b929
