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

$order = $_POST["order"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "connected to ". $dbname . "\n\n";

$sql = "SELECT * FROM " . $table . " order by " . $order . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo $row[$column1]. "*" . $row[$column2]. "*" . $row[$column3]. "*" . $row[$column4] . "*";


    /*echo "id: " . $row["CNIC"]. " - Name: " . $row["name"]. "  - last name: " . $row["lastname"].  "  - date of birth: " . $row["dob"]. "\n";*/
    //echo $str . ": - " . $row[$str] . "\n";
  }
} else {
  echo "0 results";
}
$conn->close();
?>