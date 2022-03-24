<!-- Template for SeekHash website-->
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
        <link rel= "stylesheet" href="styles/home_template.css" type="text/css"/> 
    </head>
    <body>
        <?php include("after_logIn_index.php"); ?>
    <nav class="navbar navBar2">
        <ul>
            <li>
                <a href="#home" class="dot active" data-scroll="home">
                <span>sign up</span>
                </a>
            </li>

            <li>
                <a href="#about" class="dot" data-scroll="about">
                <span>about</span>
                </a>
            </li>

            <li>
                <a href="#how_it_work" class="dot" data-scroll="how_it_work">
                <span>how_it_work</span>
                </a>
            </li>

            <li>
                <a href="#subscription" class="dot" data-scroll="subscription">
                <span>subscription</span>
                </a>
            </li>
        </ul>
    </nav>
    <section class="sec" id="home">
        <div class="row">
            <div class="col text-center">
                <h1 class="fw-bold"><strong>The smartest way to <br/>analyze your blockchain</strong></h1>  
            <a href="signup_page.php" class="btn">Sign up</a>
            </div>
        </div>
    </section>
    <section class="sec" id="about">
        <div class="row">
            <div class="col-6 p-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#AD8BF7" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                <h5>Our Story</h5>
                <p class="text-justify">Our team will develop and implement a site for users to upload blockchain program codes as well as hashes with the objective of detecting the hash function within blockchain source codes. The program will analyze your codes and detect any hash functions. A summary report of the hash function will be displayed for the user which includes the type of hash detected and its strength. </p>
            </div>
            <div class="col-6 p-4 text-center">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 215 215">
                    <defs><style>.cls-1{fill:#AD8BF7;stroke:#AD8BF7;stroke-miterlimit:10;}</style></defs>
                    <path class="cls-1" d="M107.5.5a107,107,0,1,0,107,107A107,107,0,0,0,107.5.5Zm0,193.75a86.75,86.75,0,1,1,86.75-86.75A86.75,86.75,0,0,1,107.5,194.25Z"/>
                </svg>
                <h5>Our Vision</h5>
                <ul class="text-justify">
                    <li>Create and design a user-friendly web site for users to utilise the program, functionalities as well as navigation of the site. </li>
                    <li>Develop a program to read in and analyse the source code that was uploaded by the user and detect for any hash function within the code.</li>
                    <li>Develop the program to be able to read the 5-programming languages, namely, “Solidity”, “Python”, “C++”, “Java” and “Go”.</li>
                    <li>Create a function to generate a report for the users regarding the hash function that was detected in the source codes that was uploaded.</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="sec" id="how_it_work">
        <div class="row">
            <div class="col-12"><h4 class="text-center">How it works</h4></div>
            <div class="col-6"></div>
            <div class="col-6 p-5">
                <h5 class="text-center">Steps to use the website</h5>
                <p>
                    Step 1: Click the program webpage to upload the source code or hash output you want to verify.
                    <br/>Step 2: Your summary report is out now!
                </p>
            </div>
            <div class="col-6 p-5">
            <h5 class="text-center">Sign up to enjoy more features</h5>
                <p class="p-1">
                1. You can view the history of the source code as well as the report you have uploaded to our website.
                <br/>2. You can search the report by using the report id.
                <br/>3. You can delete and download the source code and report to view it on your own devices.
                </p>
            </div>
            <div class="col-6"></div>
        </div>
    </section>
    <section class="sec" id="subscription">
        <div class="row">
            <div class="col-12"><h4 class="text-start">Subscription</h4></div>
            <div class="col-6 p-1"><input type="text" class="form-control" placeholder="First Name"></div>
            <div class="col-6 p-1"><input type="text" class="form-control" placeholder="Last Name"></div>
            <div class="col-12 p-1"><input type="text" class="form-control" placeholder="Email"></div>
            <div class="col-12 text-center p-1"><a href="signup_page.php" class="btn">Subscribe</a></div>
        </div>
    </section>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>


    <script type="text/javascript" src="js/home.js"></script>
    </body>
</html>
