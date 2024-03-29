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
        <title>SeekHash - BlockHash Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/blockhash_page.css" type="text/css"/> 
    </head>
    <body>
        <!-- BlockHash Page Contents -->
        <section class="blockhashprogram">
            <div class="blockhashbox">
                <form action="processblockhash.php" method="post">
                    <h2 style="color:aliceblue;"><b>Upload Block Hash</b></h2>
                    <p>Select blockhash option:</p>
                    <input type="radio" id="block" name="blockhash_option" value="Block" />
                    <label for="block">Block</label><br />
                    <input type="radio" id="address" name="blockhash_option" value="Address" />
                    <label for="address">Address</label><br />
                    <input type="radio" id="transaction" name="blockhash_option" value="Transaction" />
                    <label for="transaction">Transaction</label><br />
                    <input type="text" name="blockhash" onfocus="this.value = ''" value="Type your blockhash"/>&nbsp;&nbsp;
                    <input type="submit" />
		</form>
                <br />
		<font style="color:white;">
<?php
	if(isset($_SESSION['blockAPI'])){
		$output = $_SESSION['blockAPI'];
		echo "<pre> $output </pre>";
	}
?>
	</font>
	</div>    
        </section>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


