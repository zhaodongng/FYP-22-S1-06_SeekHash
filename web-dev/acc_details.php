<?php

use function PHPSTORM_META\type;

session_start();
include 'db_inc.php';
include'header_footer2.php';
//current login user name
$name=$_SESSION['name'];
//select all data from database regarding current user name
$sql = "SELECT * FROM user_info WHERE name= '$name'";
$result = $conn -> query($sql);
/*
    if(mysqli_num_rows($result) > 0){
        if($row = $result -> fetch_assoc()){
            print_r($row) ;
        }
    }else{
        echo "wrong";
    }
    */
?>
<!DOCTYPE html>
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
        <link rel= "stylesheet" href="styles/profile.css" type="text/css"/> 
    </head>

    <body>
        <section class="details_page">
            <div class="data-table p-2">
                <!--row1-->
                <div class="row pb-2">
                    <div class="col-1"></div>
                    <div class="col-5 text-end c1">User ID -</div>
                    <div class="col-5 text-start p-0 c1">
                        <?php  while($row=mysqli_fetch_assoc($result)){
                            echo $row['user_id'];
                            $_SESSION['ID'] = $row['user_id'];
                        
                        ?>
                    </div>
                    <div class="col-1"></div>
                </div>

                <!--row2-->
                <div class="row pb-2">
                    <div class="col-1"></div>
                    <div class="col-5 text-end c1">Name -</div>
                    <div class="col-5 text-start p-0 c1">
                        <?php  
                            echo $row['name'];
                        
                        ?>
                    </div>
                    <div class="col-1"></div>
                </div>

                <!--row3-->
                <div class="row pb-2">
                    <div class="col-1"></div>
                    <div class="col-5 text-end c1">Password -</div>
                    <div class="col-5 text-start p-0 c1">
                        <?php  
                            echo $row['password'];
                        
                        ?>
                        </br><button onclick="change_pw()" id="change_pw" class="change_pw">Change Password</button>
                    </div>
                    <div class="col-1"></div>
                </div>

                <!--row4-->
                <div class="row pb-2">
                    <div class="col-1"></div>
                    <div class="col-5 text-end c1">Email -</div>
                    <div class="col-5 text-start p-0 c1">
                        <?php  
                            echo $row['email'];
                        }
                        ?>
                    </div>
                    <div class="col-1 "></div>
                </div>

                <!--row4-->
                <div class="row pb-2">
                    <div class="col-1"></div>
                    <div class="col-5 text-end c1">No of files uploaded -</div>
                    <div class="col-5 text-start p-0 c1">
                        <?php  
                            $id = $_SESSION['ID'];
                            $sql1 = "SELECT * FROM file_info WHERE user_id= '$id'";
                            $result1 = $conn -> query($sql1);
                            echo mysqli_num_rows($result1);
                            
                        
                        ?>
                    </div>
                    <div class="col-1 "></div>
                </div>

                <!--row5-->
                <div class="row pb-2 change_pw_form" id="change_pw_form">
                    <div class="col-12 text-center c1">
                    <form method='POST' action='change_pw.php'>
                        <input type="text" class="new_pw" autocomplete="off" name="new_pw" placeholder="New password">
                        <input type="submit" class="change_pw" value="Change Password">
                    </form> 
                    </div>
                </div>

                
            </div>
            
        </section>

        <script>
        function change_pw(){
            var form = document.getElementById("change_pw_form");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
        </script>
    </body>
</html>