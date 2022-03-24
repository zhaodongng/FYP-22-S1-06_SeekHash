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
        <?php include("after_logIn_index.php") ?>
        <!-- Program Page Contents -->
        <section class="program">
            <div class="programbox">
            <form action="processhash.php" method="post">
                <div class="uploadhashbox">
                    <h2 style="color:aliceblue;"><b>Upload Hash Code</b></h2>
                    <input type="text" name="hashcode" onfocus="this.value = ''" value="Type your hash output"/>&nbsp;&nbsp;
                    <input type="submit" />
                    <span id="verifyhashresult" class="errorMessage"></span>
                </div>
            </form>

            <hr />

            <form action="processsourcecode.php" method="post" enctype="multipart/form-data">
                <div class="uploadsourcecodebox">
                    <h2 class ="pb-1" style="color:aliceblue;"><b>Upload Your Source Code</b></h2>
                    <input type="file" name="sourcecode" class="fileUpload" id="sourcecode"/><br />
                    <input type="submit" class="analyseBtn" onClick="location.href='report_page.php'" value="Click to analyse the source code"/>
                </div>
            </form>
        </div>
        </section>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


