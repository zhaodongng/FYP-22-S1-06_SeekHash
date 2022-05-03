<?php
    include "db_inc.php";
    $login_user = $_POST["name"];
    $login_pass = $_POST["pwd"];

    function verify_username($login_user){
        global $conn;
        $verify = false;
        if (!empty($login_user)){ $verify = true; }
        else { $verify = false; }
        if ($verify == true){
            $sql = "SELECT * FROM seekhash_db.user_info WHERE name = '$login_user'";
            $result = $conn->query($sql);
            if ($result->num_rows == 0){
                echo "Invalid username";
                $verify = false; }
        }
        return $verify;
    }

    function verify_access($login_user, $login_pass){
        $verify = false;
        if (!empty($login_pass)){ $verify = true; }
        else { $verify = false; }
        if ($verify == true){
            global $conn;
            $sql = "SELECT name, password FROM seekhash_db.user_info WHERE name = '$login_user'";
            $result = $conn->query($sql);
            if ($result->num_rows == 0){
                echo "Invalid username or password";
                $verify = false; }
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($login_user = $row["name"] and $login_pass = $row["password"]){
                        $verify = true;
                    } else { $verify = false; }
                }
            }
        }
        return $verify;
    }

    $verify = verify_username($login_user);
    if ($verify == 1){
        $verify = verify_access($login_user, $login_pass);
        include "home.php";
    } else {
        echo "Invalid username or password";
    }
?>
