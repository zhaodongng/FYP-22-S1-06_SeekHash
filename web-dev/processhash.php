<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SeekHash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/program_page.css" type="text/css"/> 
    </head>
    <body>
		<?php
            //echo "<h1>Hash code processing ... </h1>";

            $hashCode = $_POST["hashcode"];
            $output = shell_exec("/usr/local/bin/python3.8 VerifyHash.py $hashCode 2>&1");
            echo $output;

            include "program_page.php";
            
        ?>
    </body>
</html>