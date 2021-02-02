<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
?>
</body>
</html>