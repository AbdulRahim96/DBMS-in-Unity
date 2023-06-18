<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$table = $_POST["table"]; // coming from unity
$where = $_POST["where"]; // itemID
$condition = $_POST["condition"]; // ID

/*$table = "user"; // coming from unity
$columnToFetch = "avatar"; // coming from unity
$where = "username"; // itemID
$condition = "Hello"; // ID*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE from " . $table . " where " . $where . " = '" . $condition . "';";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "\n" . $conn->error;
}
$conn->close();
?>