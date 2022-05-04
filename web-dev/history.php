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
        <style>
            body.modal-open .supreme-container{
            -webkit-filter: blur(1.2rem);
            -moz-filter: blur(1rem);
            -o-filter: blur(1rem);
            -ms-filter: blur(1rem);
            filter: blur(1rem);
            }
        </style> 
    </head>
    <body>
    <?php include("index_template.php"); ?>
    <div class="supreme-container">
        <section class="history">
            <div class="row row1">
                <div class="col-12"><h4>History</h4></div>
            </div>
            <div class="row row2">
                <div class="col-6">
                    <div class="report">
                        <h5 class="fw-bold"><strong>Report</strong></h5>
                        <p>This is a paragraph.</p>
                        <a href="#">View More</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="report2">
                        <h5 class="fw-bold"><strong>Report</strong></h5>
                        <p>This is a paragraph.</p>
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>
            <div class="row row2 mt-4">
                <div class="col-6">
                    <div class="report">
                        <h5 class="fw-bold"><strong>Report</strong></h5>
                        <p>This is a paragraph.</p>
                        <a href="#">View More</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="report2">
                        <h5 class="fw-bold"><strong>Report</strong></h5>
                        <p>This is a paragraph.</p>
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
        
            <!--modal-->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
				            <h5 class="text-center">Please Log in to Continue</h5><hr class="hr1"/>
                            <form>
                                <div class="form-group text-center">
                                    <input type=button class="mbtns" style="margin-right: 0.5rem;"
                                    onClick="location.href='logIn.php'" value='Log In'> Or 
                                    <input type=button class="mbtns" style="margin-left: 0.5rem;"
                                    onClick="location.href='signup_page.php'" value='Sign up'>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        
        <script>
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            })
        </script>
    </body>
</html>