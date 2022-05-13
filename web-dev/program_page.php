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
        <title>SeekHash - Program Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet" href="styles/program_page.css" type="text/css"/> 
    </head>
    <body>
        <h2 class="program_h">Upload Hash Code</h2>
        <form action="processhash.php" method="post">
            <div class="input_submit">
                <input type="text" name="hashcode" class="input_hash"onfocus="this.value = ''" value="Type your hash output"/>&nbsp;&nbsp;
                <input type="submit" class="submit"/>
                <span id="verifyhashresult" class="errorMessage"></span>
            </div>
        </form>
        <hr/>
        <h2 class="program_h1">Upload Your Source Code</h2>
        <form action="processsourcecode.php" method="post" enctype="multipart/form-data">
            <input type="file" name="sourcecode"class="fileUpload" id="sourcecode"/><br />
            <input type="submit" class="analyse" onClick="location.href='report_page.php'" value="Click to analyse the source code"/>
        </form>
        
    </body>
</html>


