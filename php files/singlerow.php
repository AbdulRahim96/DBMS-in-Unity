<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$table = $_POST["table"]; // coming from unity
$where = $_POST["where"]; // itemID
$condition = $_POST["condition"]; // ID

$column1 = $_POST["column1"];
$column2 = $_POST["column2"];
$column3 = $_POST["column3"];
$column4 = $_POST["column4"];

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

$sql = "SELECT * FROM " . $table . " where " . $where . " = '" . $condition . "' ; ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo $row["ItemID"]. "*" . $row["Itemname"]. "*" . $row["price"]. "*" . $row["Stock"] . "*";
  }
} else {
  echo "0 results";
}
$conn->close();
?>