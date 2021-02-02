
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $name= $_POST["name"]; 
    $marks= $_POST["marks"];
    
    





if ($marks>=800)
{ 
    echo "user".$name ."got Distinction";
}



 else if($marks>500 and $marks<800)
 {
    echo "user".$name."got first class";

 }
 else if($marks>400 and $marks<500)
 {
    echo "user". $name."got pass class";

 }
else
 {
    echo "user". $name."failed";

}


?> 
</body>
</html>

