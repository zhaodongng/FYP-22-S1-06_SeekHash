<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>SeekHash - Sign Up Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/signup_page.css" type="text/css"/> 
    </head>
    <body>
        <!-- Sign Up Page Contents -->
        <!-- x button -->
        <div class="row">
            <div class="col-5 col-md-9">
                <div class="cancelbtn">
                    <a href="home.php">
                        <img src="img/xmark-solid.svg" />
                    </a>
                </div>
            </div>
            <div class="col-7 col-md-3"></div>
        </div>

        <div class="signupbox">
            <h1>Sign Up</h1>
            <form action="processsignup.php" method="post">
                <input type="text" name="signup_username" onfocus="this.value = ''"  autocomplete="off" placeholder="User Name"/><br />
                <input type="text" name="signup_email" onfocus="this.value = ''" autocomplete="off" placeholder="Email"/><br />
                <input type="password" name="signup_password" onfocus="this.value = ''" autocomplete="off" placeholder="Password"/><br />
                <input type="password" name="signup_confirmpassword" onfocus="this.value = ''" autocomplete="off" placeholder="Confirm Password"/><br />
                <input type="submit" name="signup_submit" value="Sign Up" class="signupbtn"/>
            </form>
            <h5>Already a member?<a href="logIn.php">Log In</a></h5>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


