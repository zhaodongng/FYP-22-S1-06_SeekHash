<!-- Template for SeekHash header-->
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel= "stylesheet" href="styles/header_footer.css" type="text/css"/> 
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    </head>
    <body>
        <header>
        <div class="d-none d-md-block container-fluid">
                <div class="row" style="background-color: #F2F7FF;">
                    <div class="col-2 d-block justify-contents-center text-center logo">
                        <h1 class="d-inline p-0 m-0">Seek <span class="fw-bold hash"><b>#</b></span></h1>
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
                                <li><a href="history.php">History</a></li>
                                <li><a href="about_us.php">About Us</a></li>
                                <li><div class="dropdown">
                                        <button class="btn dropdownBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#F2F7FF" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                            <?php echo $_SESSION['name'];?>
                                        </button>
                                        <div class="dropdown-menu dmenu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item ditem" href="acc_details.php">Profile</a>
                                            <a class="dropdown-item ditem" href="LogOut.php">Log Out</a>
                                    </div>
                                </li>
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
                                        <li><a href="history.php">History</a></li>
                                        <li><div class="dropdown">
                                                <button class="btn m_dropdownBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#F2F7FF" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                                    </svg>
                                                    <?php echo $_SESSION['name'];?>
                                                </button>
                                                <div class="dropdown-menu m_dmenu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item m_ditem" href="acc_details.php">Profile</a>
                                                    <a class="dropdown-item m_ditem" href="LogOut.php">Log Out</a>
                                                </div>
                                            </div>
                                        </li>
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


