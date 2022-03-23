<?php

    $signup_user= $_POST["signup_username"];
    $signup_pass= $_POST["signup_password"];
    $signupcfm_pass= $_POST["signup_confirmpassword"];
    $signup_email = $_POST["signup_email"];

    function checkUserExists($signup_user){
        $verify = false;
        if (!empty($signup_user)){ $verify = true; }
        else { $verify = false; }
        if ($verify == true){
            $conn = mysqli_connect("localhost", "root", "", "seekhash_db");
            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
            $sql = "SELECT * FROM seekhash_db.user_info WHERE name = '$signup_user'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "Username taken";
                $verify = false; }
            mysqli_close($conn);
        }
        return $verify;
    }

    function checkPass($signup_pass, $signupcfm_pass){
        $verify = false;
        if (!empty($signup_pass) and (!empty($signupcfm_pass))){ $verify = true; }
        else { $verify = false; }
        if ($verify == true){
            if ($signup_pass != $signupcfm_pass){
                $verify = false;
                echo "Passwords does not match";
            }
        }    
        return $verify;
    }

    function checkEmail($signup_email){
        $verify = false;
        if (filter_var($signup_email, FILTER_VALIDATE_EMAIL)) { $verify = true; }
        else { echo "invalid email"; }
        if ($verify = true) {
            $conn = mysqli_connect("localhost", "root", "", "seekhash_db");
            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
            $sql = "SELECT * FROM seekhash_db.user_info WHERE email = '$signup_email'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "Email taken";
                $verify = false; }
            mysqli_close($conn);
        }
        return $verify;
    }

    function addUser($signup_user, $signup_pass, $signup_email){
        $conn = mysqli_connect("localhost", "root", "", "seekhash_db");
        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
        $sql = "INSERT INTO seekhash_db.user_info(name, password, email) VALUES ('$signup_user', '$signup_pass', '$signup_email')";
        if($conn->query($sql)){
            echo "results inserted!";
        }
        mysqli_close($conn);
    }

    $username_check = checkUserExists($signup_user);
    if ($username_check == 1){
        $password_check = checkPass($signup_pass, $signupcfm_pass);
        if ($password_check == 1){
            $email_check = checkEmail($signup_email);
            if ($email_check == 1) {
                addUser($signup_user, $signup_pass, $signup_email);
            }
        }
    }
    include 'home.php';
    #header(location:"home.php"); 
