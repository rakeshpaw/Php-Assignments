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

$sql = "select department,SUM(salary)from employee group by department desc limit 1 ;
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " Department: " . $row["department"]. " Total Salary: " . $row["SUM(salary)"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>