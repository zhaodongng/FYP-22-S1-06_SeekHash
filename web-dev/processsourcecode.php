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
            //echo "<p>Source code processing ... </p>";

            // Retrieve the uploaded source code file.
            $sourceCodeFile = $_FILES['sourcecode']['name'];
            //echo $sourceCodeFile;

            // Execute the SeekHash python program.
            $output = shell_exec("/usr/local/bin/python3.8 seekhash_v3.py $sourceCodeFile 2>&1");
            //echo $output;

            include "report_page.php";
        ?>
    </body>
</html>