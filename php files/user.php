<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$table = $_POST["table"]; // coming from unity
$columnToFetch1 = $_POST["columnToFetch1"]; // coming from unity
$columnToFetch2 = $_POST["columnToFetch2"]; // coming from unity
$columnToFetch3 = $_POST["columnToFetch3"]; // coming from unity
$where = $_POST["where"]; // itemID
$condition = $_POST["condition"]; // ID

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "connected to ". $dbname . "\n\n";

$sql = "SELECT $columnToFetch1, $columnToFetch2, $columnToFetch3 FROM  $table where $where = '$condition';";
$result = $conn->query($sql);

/*$sql = "SELECT " . $columnToFetch1 . ", " . $columnToFetch2 . ", " . $columnToFetch3 . " FROM " . $table . " where " . $where . " = '$condition';";
$result = $conn->query($sql);*/

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo $row[$columnToFetch1]. "*" . $row[$columnToFetch2]. "*" . $row[$columnToFetch3]. "*";
  }
} else {
  echo "-------";
}
$conn->close();
?>