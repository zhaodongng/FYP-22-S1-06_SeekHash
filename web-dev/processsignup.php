<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SeekHash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/index_template.css" type="text/css"/> 
    </head>
    <body>
		<?php
            // connect to sql databases
			$servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "seekhash_db";
    
            try{
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //echo "<p>Connection to seekhash_db successful</p>\n";
            }
            catch (mysqli_sql_exception $e)
            {
                die("Connection to seekhash_db failed: " . mysqli_connect_errno() . " - " . 
                    mysqli_connect_error());
            }

            $sql = "INSERT INTO seekhash_db.user_info(user_id, name, password, email) 
                    VALUES (NULL,'{$_POST["signup_username"]}','{$_POST["signup_password"]}','{$_POST["signup_email"]}')";

            try{
                $conn = mysqli_query($conn, $sql);
                echo "<p>INSERT row to seekhash_db.user_info successfully</p>\n";
            }
            catch (mysqli_sql_exception $e)
            {
                die("Insert row to seekhash_db.user_info failed: " . mysqli_connect_errno() . " - " . 
                    mysqli_connect_error());
            }

            include "home.html";
            //echo "<p>New user has been signed up.</p>";

            mysqli_close($conn);
		?>
    </body>
</html>