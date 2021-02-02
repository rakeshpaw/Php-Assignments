

<?php
 
 $db=Employee;
include('oops2.php');
 
// $con =new createDBConnection();
$con =new createDBConnection(); //create a new object
 
$con->connectToDatabase();//connection to the database
 
echo"<br>";
 
$con->selectDatabase($db); //close connection
 
echo "<br>";
 
$con->closeConnection();
 
?>