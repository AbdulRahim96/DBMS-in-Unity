<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$table = $_POST["table"]; // coming from unity
$columnToFetch = $_POST["columnToFetch"]; // coming from unity
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

//echo "connected to ". $dbname . "\n\n";

$sql = "SELECT " . $columnToFetch . " FROM " . $table. " where " . $where . " = '" . $condition . "';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo $row[$columnToFetch];
  }
} else {
  echo "";
}
$conn->close();
?>