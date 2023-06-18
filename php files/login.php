<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$name =  $_POST["c1"]; // coming from unity
$pass =  $_POST["c2"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "connected to ". $dbname . "\n\n";

$sql = "SELECT * FROM user WHERE email = '" . $name . "' AND password = '" . $pass . "' ;" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  	while($row = $result->fetch_assoc()) {
  		echo $row["username"]. "*" . $row["email"]. "*" . $row["avatar"]. "*" . $row["clothIndex"]. "*" . $row["wallet"];
  	}
} 
else {
  echo "null";
}
$conn->close();
?>