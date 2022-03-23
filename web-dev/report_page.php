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
        <header>
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-2 mt-1 text-center logo">
                        <h1 class="d-inline p-0">Seek</h1>
                        <h1 class="d-inline p-0 fw-bold hash"><b>#</b></h1>
                    </div>
                    <div class="col-10 d-flex justify-content-end nav">
                        <nav class="mt-3">
                            <ul class ="nav__links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Report</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Program</a></li>
                                <li><a href="#">Subscriptions</a></li>
                            </ul>
                        </nav>
                        <button type="button" class="logInBtn">
                            <svg style="color: #F2F7FF;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            &nbsp;
                            Log In
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Report Page Contents -->
        <div class="reportbackground">
            <div class="reportbox">
                <h1>Analysis</h1>
                <h2>
                    <?php
                        $reportFile = fopen("report.txt", "r") or die("Unable to open file!");
                        //$reportContents = fread($reportFile, filesize("report.txt"));
                        //echo "<p>$reportContents</p>";

                        while(!feof($reportFile)) {
                            echo fgets($reportFile) . "<br>";
                        }

                        fclose($reportFile);
                    ?>
                </h2>
                <button>Download</button>
            </div>
        </div>
        
        <div class="fixed__footer">
            &copy;2023 CopyRight By Seek#
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


