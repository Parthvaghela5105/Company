<<<<<<< HEAD
<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (
  isset($data->name) && !empty(trim($data->name)) &&
  isset($data->email) && !empty(trim($data->email)) &&
  isset($data->phone) && !empty(trim($data->phone))
) {
  // ✅ Escape input to prevent SQL injection
  $name = $conn->real_escape_string($data->name);
  $email = $conn->real_escape_string($data->email);
  $phone = $conn->real_escape_string($data->phone);

  $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
  if ($conn->query($sql)) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "error" => $conn->error]);
  }
} else {
  echo json_encode(["success" => false, "error" => "Invalid input"]);
}

$conn->close();
?>
=======
<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

if (
  isset($data->name) && !empty(trim($data->name)) &&
  isset($data->email) && !empty(trim($data->email)) &&
  isset($data->phone) && !empty(trim($data->phone))
) {
  // ✅ Escape input to prevent SQL injection
  $name = $conn->real_escape_string($data->name);
  $email = $conn->real_escape_string($data->email);
  $phone = $conn->real_escape_string($data->phone);

  $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
  if ($conn->query($sql)) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "error" => $conn->error]);
  }
} else {
  echo json_encode(["success" => false, "error" => "Invalid input"]);
}

$conn->close();
?>
>>>>>>> 7d694a78247822321e911d7d64a2177850f3b929
