<?php 

session_start(); 
$myfile = fopen("counter.txt", "w") or die("Unable to open file!");


if(isset($_SESSION['views'])) 
	$_SESSION['views'] = $_SESSION['views']+1;
	
else
	$_SESSION['views']=1; 

	$counter = $_SESSION['views']; 
	echo $counter;
	fwrite($myfile,$counter); 

	
 
fclose($myfile);

?> 
