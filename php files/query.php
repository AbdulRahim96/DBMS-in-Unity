<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitydatabase";

$query =  $_POST["query"]; // coming from unity


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "connected to ". $dbname . "\n\n";

$sql = $query ;
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  //echo "Error: " . $sql . "\n" . $conn->error;
}
$conn->close();
?>