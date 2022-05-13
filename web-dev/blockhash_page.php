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
        <h3 class="upload_h3">Upload Block Hash</h3>
        <div class="blockhashForm">
            <form action="processblockhash.php" method="post">
                <h5>Select blockhash option:</h5>
                <div class="row">
                    <div class="col-2 col-md-5"></div>
                    <div class="col-8 col-md-4 text-start">
                        <input type="radio" id="block" name="blockhash_option" value="Block" />
                        <label for="block">Block</label></br>
                        <input type="radio" id="address" name="blockhash_option" value="Address" />
                        <label for="address">Address</label></br>
                        <input type="radio" id="transaction" name="blockhash_option" value="Transaction" />
                        <label for="transaction">Transaction</label><br />
                    </div>
                    <div class="col-2 col-md-3"></div>
                </div>
                <input type="text" name="blockhash" onfocus="this.value = ''" value="Type your blockhash"/>&nbsp;&nbsp;
                <input type="submit" />
            </form>
        </div>
        <!-- BlockHash Page Contents -->
        <!-- <section class="blockhashprogram">
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
            </div>
        </section> -->
        
    </body>
</html>


