<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$table = $_POST["table"]; // coming from unity
$columnToUpdate = $_POST["columnToUpdate"]; // coming from unity
$value = $_POST["input"]; // price value
$where = $_POST["where"]; // itemID
$condition = $_POST["condition"]; // ID

/*$table = "item"; // coming from unity
$column1 = "9823";
$column2 = "bench";
$column3 = "50000";
$column4 = "2";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE " . $table . " set " . $columnToUpdate . " = '" . $value . "' where " . $where . " = '" . $condition . "';";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "\n" . $conn->error;
}

$conn->close();
?>