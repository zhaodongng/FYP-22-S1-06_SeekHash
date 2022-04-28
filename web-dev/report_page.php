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
        <title>SeekHash - Report Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/report_page.css" type="text/css"/> 
    </head>
    <body>
        <?php include("index_template.php");?>
        <!-- Report Page Contents -->
        <div class="reportbackground">
            <div class="reportbox">
                <h1>Analysis</h1>
                    <?php
                        // Select data to display from seekhashdb.file_info table
                        try{
                            $conn = mysqli_connect("localhost", "root", "root", "seekhash_db");
                        }
                        catch (mysqli_sql_exception $e)
                        {
                            die("Connection failed: " . mysqli_connect_errno() . " - " . 
                                mysqli_connect_error());
                        }
            
                        $sql = "SELECT * FROM seekhash_db.file_info";
            
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

                        echo "<table><tr><th>File ID</th><th>Uploaded On</th><th>File Read In</th><th>Programming Language Detected</th><th>Platforms</th>" . 
                             "<th>Probabilities</th><th>Hashes Found At</th>" . "</tr>";
                        foreach($items as $report_data) {
                            echo "<tr>" . 
                                 "<td>{$report_data['f_id']}</td>" . 
                                 "<td>{$report_data['day_upload']}</td>" . 
                                 "<td>{$report_data['file_read_in']}</td>" . 
                                 "<td>{$report_data['programming_language_detected']}</td>" . 
                                 "<td>{$report_data['platforms']}</td>" .
                                 "<td>{$report_data['probabilities']}</td>" . 
                                 "<td>{$report_data['hashes_found_at']}</td></tr>";
                        }
                        
                        echo "</table>";
                        
                        mysqli_close($conn);
                    ?>
                <button>Download</button>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


