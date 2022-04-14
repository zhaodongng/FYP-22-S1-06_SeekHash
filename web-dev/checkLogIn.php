<?php 
session_start();
include 'db_inc.php';
$name = $_POST['name'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user_info WHERE name= '$name' AND password='$pwd'";
$result = $conn -> query($sql);
if(mysqli_num_rows($result) > 0){
    if($row = $result -> fetch_assoc()){
        $_SESSION['name'] = $row['name'];
        header("Location: home.php?loginsuccess");
    }
}else{
    echo "wrong";
}

 ?>