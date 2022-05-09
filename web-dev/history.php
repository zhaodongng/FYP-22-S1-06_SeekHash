<?php
session_start();
include 'db_inc.php';

if(isset($_SESSION['name']))
{
    include'header_footer2.php'; 
}
else
{ 
    include'header_footer.php'; 
}?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>SeekHash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/history_page.css" type="text/css"/> 
    </head>
    <body>

    <?php
        $current_user = $_SESSION["name"];

        // Select data to display from seekhashdb.file_info table
        try{
            $conn = mysqli_connect("localhost", "root", "root", "seekhash_db");
        }
        catch (mysqli_sql_exception $e)
        {
            die("Connection failed: " . mysqli_connect_errno() . " - " . 
                mysqli_connect_error());
        }

        $sql = "SELECT * FROM seekhash_db.file_info WHERE upload_user = '$current_user'";

        try{
            $conn = mysqli_query($conn, $sql);
            $items = array();
            while ($row = mysqli_fetch_assoc($conn)) {
                $items[] = $row;
            }
        }
        catch (mysqli_sql_exception $e)
        {
            die("Select from seekhash_db.file_info failed: " . mysqli_connect_errno() . " - " . 
                mysqli_connect_error());
        }

        echo '<section class="history">';
        echo "<h4>History</h4>";

        $report_count = count($items);
        for($i = 1; $i <= $report_count; $i++) {
            echo '<div class="report">
                  <h5 class="fw-bold"><strong>Report ' . $i . '</strong></h5>' . 
                  '<p>File ID: ' . $items[$i-1]["f_id"]. '</p>' . 
                  '<p>Uploaded on: ' . $items[$i-1]["day_upload"]. '</p>' . 
                  '<p>Uploaded file: ' . $items[$i-1]["file_read_in"]. '</p>' . 
                  '<a href="report_page.php">View More</a>
                  </div>';
        } 

        echo '</section>';
        
        mysqli_close($conn);

    ?>                
        
    </body>
</html>