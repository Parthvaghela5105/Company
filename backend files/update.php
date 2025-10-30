<<<<<<< HEAD
<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$email = $data->email;
$phone = $data->phone;

$sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
if ($conn->query($sql)) {
  echo json_encode(["success" => true]);
} else {
  echo json_encode(["success" => false, "error" => $conn->error]);
}
?>
=======
<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$email = $data->email;
$phone = $data->phone;

$sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
if ($conn->query($sql)) {
  echo json_encode(["success" => true]);
} else {
  echo json_encode(["success" => false, "error" => $conn->error]);
}
?>
>>>>>>> 7d694a78247822321e911d7d64a2177850f3b929
