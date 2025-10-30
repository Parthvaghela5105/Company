<<<<<<< HEAD
<?php
include 'db.php';

$id = $_GET['id'] ?? 0;

if ($id) {
  $sql = "DELETE FROM users WHERE id=$id";
  if ($conn->query($sql)) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "error" => $conn->error]);
  }
} else {
  echo json_encode(["success" => false, "error" => "No ID provided"]);
}
?>
=======
<?php
include 'db.php';

$id = $_GET['id'] ?? 0;

if ($id) {
  $sql = "DELETE FROM users WHERE id=$id";
  if ($conn->query($sql)) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "error" => $conn->error]);
  }
} else {
  echo json_encode(["success" => false, "error" => "No ID provided"]);
}
?>
>>>>>>> 7d694a78247822321e911d7d64a2177850f3b929
