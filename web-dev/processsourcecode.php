<?php
session_start();
include 'db_inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SeekHash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/report_page.css" type="text/css"/> 
    </head>
    <body>
        <?php
            // Retrieve the uploaded source code file.
            $sourceCodeFile = $_FILES['sourcecode']['name'];

            // Execute the SeekHash python program.
            $output = shell_exec("/usr/local/bin/python3.8 seekhash_v3.6.py $sourceCodeFile 2>&1");
            //echo $output;

            // Convert output string into an array
            $output_array = explode(";", $output);
            echo "<pre>";
            print_r($output_array);
            echo "</pre>";

            $upload_user = $_SESSION["name"];
            $file_read_in = $output_array[0];
            $programming_language_detected = $output_array[1];
            $platforms = $output_array[2];
            $probabilities = $output_array[3];
            $hashes_found_at = $output_array[4];
            $hash_information = $output_array[5];
            $digital_signature = $output_array[6];

            // Insert elements of output array into seekhashdb.file_info table
            $conn = mysqli_connect("localhost", "root", "root", "seekhash_db");
            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
            $sql = "INSERT INTO seekhash_db.file_info(upload_user, day_upload, file_read_in, programming_language_detected, 
                                                      platforms, probabilities, hashes_found_at, hash_information, 
                                                      digital_signature) 
                    VALUES ('$upload_user', now(), '$file_read_in', '$programming_language_detected', 
                            '$platforms', '$probabilities', '$hashes_found_at', '$hash_information', 
                            '$digital_signature')";
            if($conn->query($sql)){
                echo "results inserted!";
            }
            mysqli_close($conn);

            include "report_page.php";
            
        ?>
    </body>
</html>
