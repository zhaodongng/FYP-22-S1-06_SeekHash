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
        <?php include("index_template.php"); ?>
    <nav class="navbar navBar2">
        <ul>
            <li>
                <a href="#home" class="dot active" data-scroll="home">
                <span>home</span>
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
            <div class="col-4 p-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#AD8BF7" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                <h5>Our Story</h5>
                <p class="text-justify">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
            </div>
            <div class="col-4 p-4 text-center">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 215 215">
                    <defs><style>.cls-1{fill:#AD8BF7;stroke:#AD8BF7;stroke-miterlimit:10;}</style></defs>
                    <path class="cls-1" d="M107.5.5a107,107,0,1,0,107,107A107,107,0,0,0,107.5.5Zm0,193.75a86.75,86.75,0,1,1,86.75-86.75A86.75,86.75,0,0,1,107.5,194.25Z"/>
                </svg>
                <h5>Our Vision</h5>
                <p class="text-justify">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
            </div>
            <div class="col-4 p-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#AD8BF7" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>
                <h5>Technology</h5>
                <p class="text-justify">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</p>
            </div>
        </div>
    </section>
    
    <section class="sec" id="how_it_work">
        <div class="row">
            <div class="col-12"><h4 class="text-center">How it works</h4></div>
            <div class="col-6"></div>
            <div class="col-6 p-5">
                <h5>Smart</h5>
                <p>
                    I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.
                </p>
            </div>
            <div class="col-6 p-5">
                <h5>Fast</h5>
                <p class="p-1">
                    I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.
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
