<!-- Template for SeekHash website-->
<!DOCTYPE html>
<html>
    <head>
        
        <link rel= "stylesheet" href="styles/header_footer.css" type="text/css"/> 
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-2 mt-1 text-center logo">
                        <h1 class="d-inline p-0">Seek</h1>
                        <h1 class="d-inline p-0 fw-bold hash"><b>#</b></h1>
                    </div>
                    <div class="col-10 d-flex justify-content-end nav1">
                    <nav class="mt-3">
                            <ul class ="nav__links">
                                <li><a href="home.php">Home</a></li>
                                <li><div class="dropdown">
                                        <button class="btn dropdownBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Program
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="program_page.php">Hash/File</a>
                                            <a class="dropdown-item" href="blockhash_page.php">Block/Address/Transaction</a>    
                                        </div>
                                    </div>
                                </li>
                                <li><a href="about_us.php">About Us</a></li>
                                <li><a href = "logIn.php" style="font-weight: bold;">Log In</a>&nbsp;|&nbsp;
                                <a href = "signup_page.php" style="font-weight: bold;">Sign Up</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
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


