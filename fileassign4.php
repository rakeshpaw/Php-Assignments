
<?php
    ini_set('display_errors', 0);
    $dir = "csv";
    if(isset($_POST['submit'])){
        if(!is_dir($dir)){
            umask(0);
            mkdir($dir, 0777);
        }
        $file_name = $dir."/".time().".csv";
        move_uploaded_file($_FILES['file']["tmp_name"],$file_name);
        $file_contents = file($file_name);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST['submit'])){
            $server_name = $_SERVER['PHP_SELF'];
            echo <<< FORM
            <form action="$server_name" method="post" enctype="multipart/form-data">
            Select the csv file: &nbsp; &nbsp; <input type="file" name="file" />
            <input type="submit" name="submit" value="Sumit" />
            </form>
FORM;
        } else {
            $table = "<table border=1>";
            foreach ($file_contents as $key => $value) {
                $table .= "<tr>";
                $elements = explode(",", $value);

                foreach ($elements as $key => $value) {
                
                    $table .= "<td>".trim($value, '", ')."</td>";
                }
                $table .= "</tr>";
            }
            $table .=  "</table>";
            echo $table;

        }
    ?>

</body>
</html>
