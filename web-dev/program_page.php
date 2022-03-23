<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>SeekHash - Program Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/program_page.css" type="text/css"/> 
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
        <?php include("index_template.php") ?>
        <div class="supreme-container">
            <!-- Program Page Contents -->
            <section class="program">
                <div class="programbox">
                <form action="processhash.php" method="post">
                    <div class="uploadhashbox">
                        <h2 style="color:aliceblue;"><b>Upload Hash Code</b></h2>
                        <input type="text" name="hashcode" onfocus="this.value = ''" value="Type your hash output"/>&nbsp;&nbsp;
                        <input type="submit" />
                        <span id="verifyhashresult" class="errorMessage"></span>
                    </div>
                </form>

                <hr />

                <form action="processsourcecode.php" method="post" enctype="multipart/form-data">
                    <div class="uploadsourcecodebox">
                        <h2 class ="pb-1" style="color:aliceblue;"><b>Upload Your Source Code</b></h2>
                        <input type="file" name="sourcecode" id="sourcecode"/><br />
                        <input type="submit" value="UPLOAD SOURCE CODE"/>
                    </div>
                </form>
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
                                    onClick="location.href='login_page.php'" value='Log In'> Or 
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


