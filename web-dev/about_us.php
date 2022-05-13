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
            <div class="d-flex justify-content-center title">
                <h2 class="text-center mt-2 fw-bold">About Us</h2>
            </div>
            <section class="program">
                <div class="program_content">
                    <img src="./img/program.png">
                    <div class="program_text">
                    <h3>Our Program</h3>
                    <ul>
                        <li>The user can upload and analyse file,hash,address,block and transaction.</li>
                        <li>The user can download the analysis report file.</li></br>
                        <p class="fw-bold p-0 m-0">Once the user creates account , </p> 
                        <li>The user can look back the history list and previous analysis report.</li>
                    </ul>
                    </div>
                </div>
            </section>
            <section class="story">
                <div class="story_content">
                    <img src="./img/story.png" class="d-md-none d-lg-none d-xl-none">
                    <div class="story_text">
                    <h3>Our Story</h3>
                    <p class="text-justify">
                        This hash analysing program is developed by 5 final year students of UOW, coming from different backgrounds.
                        3 of team members who are from big data and cyber security do the backend parts and the rest of team members take responsibility for the frontend part. 
                    </p>
                    </div>
                    <img src="./img/story.png" class="d-none d-md-block">
                </div>
            </section>
            <section class="vision">
                <div class="vision_content">
                    <img src="./img/vision.png">
                    <div class="vision_text">
                    <h3>Our Vision</h3>
                    <ul class="text-justify">
                            <li>Create and design a user-friendly web site for users to utilise the program, functionalities as well as navigation of the site. </li>
                            <li>Develop a program to read in and analyse the source code that was uploaded by the user and detect for any hash function within the code.</li>
                            <li>Develop the program to be able to read the 5-programming languages, namely, “Solidity”, “Python”, “C++”, “Java” and “Go”.</li>
                            <li>Create a function to generate a report for the users regarding the hash function that was detected in the source codes that was uploaded.</li>
                    </ul>
                    </div>
                </div>
            </section>

            <div class="price m-0 p-0">
                <h3 class="mb-0 text-center">Pricing</h3>
                <div class="row p-5">
                    <div class="col-4 d-flex text-center justify-content-center">
                        <div class="card" style="border-radius: 50%;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 fw-bold text-center">$13</h4>
                            <h6 class="card-subtitle mb-2 text-center">/week</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-4 d-flex text-center justify-content-center">
                        <div class="card" style="border-radius: 50%;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 fw-bold text-center">$32</h4>
                            <h6 class="card-subtitle mb-2 text-center">/month</h6>
                        </div>
                        </div>
                    </div>

                    <div class="col-4 d-flex text-center justify-content-center">
                        <div class="card" style="border-radius: 50%;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 fw-bold text-center">$312</h4>
                            <h6 class="card-subtitle mb-2 text-center">/year</h6>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team_member">
                <h3 class="text-center">Team members</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-12 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/ZD.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Ng Zhao Dong</h5>
                        <h6 class="text-center">Cyber Security</h6>
                    </div>
                    <div class="col-md-4 col-sm-6 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/JNT.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Chee Jonathan</h5>
                        <h6 class="text-center">Cyber Security</h6>
                    </div>
                    <div class="col-md-4 col-sm-6 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/QX.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Seng Qiao Xin</h5>
                        <h6 class="text-center">Big Data</h6>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 col-sm-12 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/KC.jpg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Khin Chaw Thazin</h5>
                        <h6 class="text-center">Business Information System</h6>
                    </div>
                    <div class="col-md-6 col-sm-12 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/EQ.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Tan Eiin Qian </h5>
                        <h6 class="text-center">Cyber Security</h6>
                    </div>
                </div>
                
            </div>
            

            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        </body>
    </html>


