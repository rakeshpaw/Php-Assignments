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

$sql = "select count(*)AS Count_of_employee,city from emp_detail group by city;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Count Of Employee: " . $row["Count_of_employee"]. " City: " . $row["city"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>