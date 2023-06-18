<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$table = $_POST["table"]; // coming from unity
$column1 = $_POST["column1"];
$column2 = $_POST["column2"];
$column3 = $_POST["column3"];
$column4 = $_POST["column4"];

/*$table = "item"; // coming from unity
$column1 = "5632";
$column2 = "chair";
$column3 = "50000";
$column4 = "2";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO " . $table . "(username, password, email, avatar) VALUES('$column1', '$column2', '$column3', '$column4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "\n" . $conn->error;
}

$conn->close();
?>