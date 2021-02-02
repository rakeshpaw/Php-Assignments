<?php
$file ="test2.txt";


$lines =file($file);
$count =count(file($file));
echo $count;

$text ='hello everyone';

$lines[3] =$text ."\n";

file_put_contents("test2.txt", $lines);

fclose($handle);


?>
