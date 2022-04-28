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
            <div class="bg_1 d-flex justify-content-center">
                <h2 class="text-center mt-5 fw-bold">About Us</h2>
            </div>
            <div class="row our_program">
                    <div class="col-5 program_bg">
                        <img class="img-thumbnail mt-2" src="./img/program.png" />
                    </div>
                    <div class="col-7 mt-2 program_info" style="border-radius: 6em; padding-left:1em;">
                        <h3 class="text-center mt-3 fw-bold">Our Program</h3>
                        
                    </div>
            </div>
            <div class="row our_program p-2">
                    <div class="col-7 story_info" style="border-radius: 6em; padding-left:1em;">
                        <h3 class="text-center mt-3 fw-bold">Our Story</h3>
                    </div>
                    <div class="col-5 p-0 story_bg">
                        <img class="img-thumbnail p-2" src="./img/story.png"/>
                    </div>
                    
            </div>
            <div class="row our_program">
                    <div class="col-5 vision_bg">
                        <img class="img-thumbnail" src="./img/vision.png" />
                    </div>
                    <div class="col-7 vision_info mb-2" style="border-radius: 6em; padding-left:1em;">
                        <h3 class="text-center mt-3 fw-bold">Our Vision</h3>
                        
                    </div>
            </div>
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
                    <div class="col-4 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/ZD.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Ng Zhao Dong</h5>
                        <h6 class="text-center">Cyber Security</h6>
                    </div>
                    <div class="col-4 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/JNT.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Chee Jonathan</h5>
                        <h6 class="text-center">Cyber Security</h6>
                    </div>
                    <div class="col-4 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/QX.jpeg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Seng Qiao Xin</h5>
                        <h6 class="text-center">Big Data</h6>
                    </div>
                </div>
                <div class="row">
                <div class="col-6 p-2">
                        <img class="rounded-circle img-thumbnail z-depth-2 mx-auto d-block" alt="100x100" src="./img/KC.jpg" style="width: 10em; height:10em"
                        data-holder-rendered="true">
                        <h5 class="mt-1 text-center">Khin Chaw Thazin</h5>
                        <h6 class="text-center">Business Information System</h6>
                    </div>
                    <div class="col-6 p-2">
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


