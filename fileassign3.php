<?php

$homepage = file_get_contents('http://www.php.net/');
echo $homepage;


file_put_contents("test3.txt", $homepage);

?>
