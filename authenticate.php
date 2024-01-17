<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "kanban_db";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($query);

   if ($result->num_rows > 0) {
    // Login berhasil, tandai dengan session
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    header('location: index.php');
    exit();
  } else {
    // Login gagal
    echo json_encode(["Login Gagal"]);
  }
}


$conn->close();
?>
