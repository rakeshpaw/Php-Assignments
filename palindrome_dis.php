<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
   
    $pali= $_POST["pali"];


    function Palindrome($pali){   
        $temp = $pali;   
        $new = 0;   
        while (floor($temp)) {   
            $d = $temp % 10;   
            $new = $new * 10 + $d;   
            $temp = $temp/10;   
        }   
        if ($new == $number){   
            echo "string is palindrome";   
        } 
        else{ 
            echo "not palindrome"; 
        } 
    }   
   
    
   

    ?>