<<<<<<< HEAD
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "angular_php_crud";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}
?>
=======
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "angular_php_crud";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}
?>
>>>>>>> 7d694a78247822321e911d7d64a2177850f3b929
