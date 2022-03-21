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
                echo "<p>Connection to seekhash_db successful</p>\n";
            }
            catch (mysqli_sql_exception $e)
            {
                die("Connection to seekhash_db failed: " . mysqli_connect_errno() . " - " . 
                    mysqli_connect_error());
            }

            $sql = "SELECT * FROM seekhash_db.user_info WHERE password = '{$_POST["login_password"]}'";

            try{
                $conn = mysqli_query($conn, $sql);
                echo "Select from seekhash_db.user_info successfully";
                $users = array();
                while ($row = mysqli_fetch_assoc($conn)) {
                    $users[] = $row;
                }
                echo "<pre>";
                print_r($users);
                echo "</pre>";
            }
            catch (mysqli_sql_exception $e)
            {
                die("Select from seekhash_db.user_info failed: " . mysqli_connect_errno() . " - " . 
                    mysqli_connect_error());
            }

            include "home.html";

            mysqli_close($conn);
		?>
    </body>
</html>