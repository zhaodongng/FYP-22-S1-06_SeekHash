<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SeekHash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/blockhash_page.css" type="text/css"/> 
    </head>
    <body>
		<?php
            //echo "<h1>Block hash processing ... </h1>";

            $blockhash_option = $_POST["blockhash_option"];
            $blockhash_option_arg = "";
            if($blockhash_option == "Block")
            {
                $blockhash_option_arg = "-b";      
            }
            else if($blockhash_option == "Address")
            {
                $blockhash_option_arg = "-a";
            }
            else if($blockhash_option == "Transaction")
            {
                $blockhash_option_arg = "-t";
            }
            else
            {
                $blockhash_option_arg = "-help";
            }

            $blockhash = $_POST["blockhash"];
            $output = shell_exec("/usr/local/bin/python3.8 Blockchain_API.py $blockhash_option_arg $blockhash 2>&1");
            echo "<pre>$output</pre>";

            //include "after_logIn_program.php";
            
        ?>
    </body>
</html>