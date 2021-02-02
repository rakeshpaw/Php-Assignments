<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


  $string = file_get_contents("regular4.txt");
  echo $string;
$patterns = array();
$patterns[0] = '/Indian/';
$patterns[1] = '/Munnaf Patel/';
$patterns[2] = '/Zaheer Khan/';
$replacements = array();
$replacements[2] = 'Pak';
$replacements[1] = 'IMohammad Amir ';
$replacements[0] = 'Mohammad Asif';
echo "<hr>";
echo preg_replace($patterns, $replacements,$string);

?>
</body>
</html>
