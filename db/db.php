<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_suggestion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function getDb() {
  global $conn;
  return $conn;
}
?>