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
            <link rel= "stylesheet" href="styles/template.css" type="text/css"/> 
        </head>

        <body>
            <!-- medium and large devices -->
            <div class="d-none d-md-block">
                <!--sign up-->
                <section class="sec" id="home">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="fw-bold"><strong>The smartest way to <br/>analyze your blockchain</strong></h1>  
                        <a href="signup_page.php" class="btn">Sign up</a>
                        </div>
                    </div>
                </section>
                <!--sign up ends-->

                <!--how it work-->
                <section class="sec" id="how_it_work">
                    <div class="row">
                        <div class="col-12"><h4 class="text-center">How it works</h4></div>
                        <div class="col-6"></div>
                        <div class="col-6 p-5">
                            <h5 class="text-center">Steps to use the website</h5>
                            <p>
                                Step 1: Click the program webpage to upload the source code or hash output you want to verify.
                                <br/>Step 2: Your summary report is out now!
                            </p>
                        </div>
                        <div class="col-6 p-5">
                            <h5 class="text-center">Sign up to enjoy more features</h5>
                            <p>
                            1. You can view the history of the source code as well as the report you have uploaded to our website.
                            <br/>2. You can search the report by using the report id.
                            <br/>3. You can delete and download the source code and report to view it on your own devices.
                            </p>
                        </div>
                        <div class="col-6"></div>
                    </div>
                </section>
                <!--how it work ends-->

                <!-- paid_and_free -->
                <section class="sec" id="paid_and_free">
                    <div class="row">
                        <div class="col-2"></div>
                        <!-- paid version -->
                        <div class="col-4 text-center paid">
                            <div class="circle_heading">
                                <h5>Paid Version</h5>
                            </div>
                            
                            <div class="list_contents">
                                <ul class="dashed">
                                    <div class="li_contents">
                                        <li>- unlimited attempts to use the tool </li>
                                        <li>- history page</li>
                                        <li>- hash verification standalone tool</li>
                                        <li>- hash and signature standalone tool</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <!-- free version -->
                        <div class="col-4 text-center free">
                            <div class="circle_heading">
                                <h5>Free Version</h5>
                            </div>
                            
                            <div class="list_contents">
                                <ul class="dashed">
                                    <div class="li_contents">
                                        <li>- 3 limited attempts to use the tool </li>
                                        <li>- ❌ history page</li>
                                        <li>- ❌ hash verification standalone tool</li>
                                        <li>- ❌ hash and signature standalone tool</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </section>

                <!--subscription-->
                <section class="sec" id="subscription">
                    <div class="row">
                        <div class="col-12"><h4 class="text-start">Subscription</h4></div>
                        <div class="col-6 p-1"><input type="text" class="form-control" autocomplete="off" placeholder="First Name"></div>
                        <div class="col-6 p-1"><input type="text" class="form-control" autocomplete="off" placeholder="Last Name"></div>
                        <div class="col-12 p-1"><input type="text" class="form-control" autocomplete="off" placeholder="Email"></div>
                        <div class="col-12 text-center p-1"><a href="signup_page.php" class="btn">Subscribe</a></div>
                    </div>
                </section>
                <!--subscription ends-->
            </div>

            <!-- small devices -->
            <div class="d-md-none d-lg-none d-xl-none">
                <!--sign up-->
                <section class="sec" id="home_m">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="fw-bold"><strong>The smartest way to <br/>analyze your blockchain</strong></h1>  
                        <a href="signup_page.php" class="btn">Sign up</a>
                        </div>
                    </div>
                </section>
                <!--sign up ends-->

                <!--how it work-->
                <section class="sec" id="how_it_work_m">
                    <div class="row">
                        <div class="col-12"><h4 class="text-center pb-2">How it works</h4></div>
                        <div class="col-12 p-4">
                            <h5 class="text-center">Steps to use the website</h5>
                            <p>
                                Step 1: Click the program webpage to upload the source code or hash output you want to verify.
                                <br/>Step 2: Your summary report is out now!
                            </p>
                        </div>
                        <div class="col-12 p-4">
                            <h5 class="text-center">Sign up to enjoy more features</h5>
                            <p>
                            1. You can view the history of the source code as well as the report you have uploaded to our website.
                            <br/>2. You can search the report by using the report id.
                            <br/>3. You can delete and download the source code and report to view it on your own devices.
                            </p>
                        </div>
                        <div class="col-6"></div>
                    </div>
                </section>
                <!--how it work ends-->

                <!-- paid and free starts -->
                <section class="sec" id="paid_and_free_m">
                    <div class="row">
                        <div class="col-6 paid_m">
                            <div class="circle_heading">
                                <h5>Paid Version</h5>
                            </div>
                            <div class="list_contents">
                                <ul class="dashed">
                                    <div class="li_contents">
                                        <li>- unlimited attempts to use the tool </li>
                                        <li>- history page</li>
                                        <li>- hash verification standalone tool</li>
                                        <li>- hash and signature standalone tool</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 free_m">
                            <div class="circle_heading">
                                <h5>Free Version</h5>
                            </div>
                            
                            <div class="list_contents">
                                <ul class="dashed">
                                    <div class="li_contents">
                                        <li>- 3 limited attempts to use the tool </li>
                                        <li>- ❌ history page</li>
                                        <li>- ❌ hash verification standalone tool</li>
                                        <li>- ❌ hash and signature standalone tool</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- paid and free ends -->

                <div class="subscription_m">
                    <h4>Subscription</h4>
                    <form method='POST' class="subscription_form" action='#'>
                        <input type="text"  name='f_name' class="f_name" autocomplete="off" placeholder="First Name" required>
                        <input type="text" name='l_name' class="l_name" autocomplete="off" placeholder="Last Name" required>
                        <input type="text" name='email' class="email" autocomplete="off" placeholder="Email" required>
                        <input type="submit" value="Subscribe" class="subscribe_btn" name='checkbutton'>
                    </form>
                </div>

            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        </body>
    </html>

