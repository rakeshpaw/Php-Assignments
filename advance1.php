<?php
$servername = "localhost";
$username = "rakesh";
$password = "rakesh";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = " select name,salary from employee order by salary desc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Name: " . $row["name"]. " " . $row["salary"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>