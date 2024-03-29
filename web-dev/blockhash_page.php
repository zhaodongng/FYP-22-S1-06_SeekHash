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
        <h2 class="upload_h2">Upload Block Hash</h2>
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
                <div class="input_submit">
                   <input type="text" name="blockhash" class="input_hash" onfocus="this.value = ''" value="Type your blockhash"/>
                    <input type="submit" class="submit"/> 
                </div>
                
            </form>
        </div>
        
    </body>
</html>


