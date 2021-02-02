<?php
 
ini_set('display_errors',1);
 

 
class createDBConnection // create a class for make connection
{
 
var $host="localhost";
var $username="rakesh";
var $password="rakesh";
var $database=" ";
var $dbconn;
function connectToDatabase() //specify the server details for mysql
{
 
$conn=mysqli_connect($this->host,$this->username,$this->password);
 
if(!$conn)//testing the connection
{
die("Cannot connect to the database");
 
}else{
 
$this->dbconn=$conn;
echo "Connection established";
 
}
return $this->dbconn;
 
}
 
 function selectDatabase($database) // selecting the database
 {
 
 //use php inbuild function foer select database
 
 mysqli_select_db($this->dbconn,$this->database);
 
 if(mysqli_error($this->dbconn)) // if error occured display the error message 
 {
 echo "Cannot find the database".$this->database;
 
 }
 
 echo "Database Selected..";
 }
 
 function closeConnection() // close the connection
 {
 mysqli_close($this->dbconn);
 
 echo "Connection closed";
 
 }
 
 }
  
 
?>
