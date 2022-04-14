<html>
    <header>
    <link rel= "stylesheet" href="styles/logIn_template.css" type="text/css"/> 
    </header>
    <body>
        <div class="cancelbtn">
            <a href="example.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#854DFF" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </a>
        </div>
        <div class="container">
            <div class="title">LogIn Form</div>
            <div class="content">
                <form method='POST' action='checkLogIn.php'>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Name</span>
                            <input type="text"  name='name' autocomplete="off" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name='pwd' autocomplete="off" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="LogIn" name='checkbutton'>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
<?php
    
?>