<!-- Template for SeekHash website-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SeekHash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/index_template.css" type="text/css"/> 
    </head>
    <body>
        <header>
            <h1>Seek#</h1>
            <nav>
                <ul class ="nav__links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Report</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Program</a></li>
                    <li><a href="#">Subscriptions</a></li>
                </ul>
            </nav>
            <button>Log In</button>
        </header>
        
        <div class="fixed__footer">
            <?php 
            echo "Date:". date(" d-m-y")."<br>"
            ?>
        </div>
    </body>
</html>


