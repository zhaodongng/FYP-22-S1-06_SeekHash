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
            <link rel= "stylesheet" href="styles/about_us_template.css" type="text/css"/> 
        </head>

        <body>
            <!--Our program-->
            <h5 class="mt-2 about_usH4">Our Program</h5>
            <div class="row">
                <div class="col-6 program">
                <p class="m-2">Our program analyse the hash and give a report.<span style="color: red;">Need to add more.</span></p>
                </div>
            </div>

            <!--Our story-->
            <h5 class="mt-2 about_usH42">Our Story</h5>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 p-1 story">
                <p class="m-2">Our team will develop and implement a site for users to upload blockchain program codes as well as hashes with the objective of detecting the hash function within blockchain source codes. The program will analyze your codes and detect any hash functions. A summary report of the hash function will be displayed for the user which includes the type of hash detected and its strength. </p>
                </div>
            </div>

            <!--Our vision-->
            <h5 class="mt-2 about_usH4">Our Vision</h5>
            <div class="row">
                <div class="col-6 vision">
                <p class="m-2">
                    Create and design a user-friendly web site for users to utilise the program, functionalities as well as navigation of the site.<br/>
                    Develop a program to read in and analyse the source code that was uploaded by the user and detect for any hash function within the code.<br/>
                    Develop the program to be able to read the 5-programming languages, namely, “Solidity”, “Python”, “C++”, “Java” and “Go”.<br/>
                    Create a function to generate a report for the users regarding the hash function that was detected in the source codes that was uploaded.</p>
                </div>
            </div>

            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        </body>
    </html>


