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
            echo "<p>Source code processing ... </p>";
            // Works on OS X
            // Need to check if it works on Windows
            $command = escapeshellcmd("/usr/local/bin/python3 seekhash_v2.py sourceCode.txt");
            $output = shell_exec($command);
            echo $output;
        ?>
    </body>
</html>