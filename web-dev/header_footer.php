<!-- Template for SeekHash website-->
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel= "stylesheet" href="styles/header_footer.css" type="text/css"/> 
    </head>
    <body>
        <header>
            <div class="d-none d-md-block container-fluid">
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
                                        <div class="dropdown-menu dmenu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item ditem" href="program_page.php">Hash/File</a>
                                            <a class="dropdown-item ditem" href="blockhash_page.php">Block/Address/Transaction</a>    
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
            <div class="d-md-none d-lg-none d-xl-none container-fluid">
                <div class="row p-0 m_logo">
                <div class="col-sm-7 col-xs-6 menu-wrap">
                        <input type="checkbox" class="togger">
                        <div class="hamburger"><div></div></div>
                        <div class="menu">
                            <div>
                                <div>
                                    <ul>
                                        <li><a href="home.php">Home</a></li>
                                        <li><div class="dropdown">
                                                <button class="btn m_dropdownBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Program
                                                </button>
                                                <div class="dropdown-menu m_dmenu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item m_ditem" href="program_page.php">Hash/File</a></br>
                                                    <a class="dropdown-item m_ditem" href="blockhash_page.php">Block/Address/Transaction</a>    
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="about_us.php">About Us</a></li>
                                        <li><a href = "logIn.php" style="font-weight: bold;">Log In</a>&nbsp;|&nbsp;
                                        <a href = "signup_page.php" style="font-weight: bold;">Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-6 mt-1 mb-2 text-end">
                        <h1 class="d-inline">Seek</h1>
                        <h1 class="d-inline fw-bold hash"><b>#</b></h1>
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


