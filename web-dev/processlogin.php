<?php

    $login_user = $_POST["login_username"];
    $login_pass = $_POST["login_password"];

    function verify_username($login_user){
        $verify = false;
        if (!empty($login_user)){ $verify = true; }
        else { $verify = false; }
        if ($verify == true){
            $conn = mysqli_connect("localhost", "root", "root", "seekhash_db");
            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
            $sql = "SELECT * FROM seekhash_db.user_info WHERE name = '$login_user'";
            $result = $conn->query($sql);
            if ($result->num_rows == 0){
                echo "Invalid username";
                $verify = false; }
        }
        mysqli_close($conn);
        return $verify;
    }

    function verify_access($login_user, $login_pass){
        $verify = false;
        if (!empty($login_pass)){ $verify = true; }
        else { $verify = false; }
        if ($verify == true){
            $conn = mysqli_connect("localhost", "root", "root", "seekhash_db");
            if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
            $sql = "SELECT name, password FROM seekhash_db.user_info WHERE name = '$login_user'";
            $result = $conn->query($sql);
            if ($result->num_rows == 0){
                echo "Invalid username or password";
                $verify = false; }
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($login_user = $row["name"] and $login_pass = $row["password"]){
                        echo $login_user;
                        echo $login_pass;
                        $verify = true;
                    } else { $verify = false; }
                }
            }
        }
        mysqli_close($conn);
        return $verify;
    }

    $verify = verify_username($login_user);
    if ($verify == 1){
        $verify = verify_access($login_user, $login_pass);
        echo "im in";
        include "after_logIn_home.php";
    } else {
        echo "Invalid username or password";
    }
