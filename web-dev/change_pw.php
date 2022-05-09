<?php 
session_start();
    include 'db_inc.php';
    $new_pw = $_POST['new_pw'];
    $user_id = $_SESSION['ID'];
    $sql = "UPDATE user_info SET password= '$new_pw' WHERE user_id = '$user_id'";
    $result = $conn -> query($sql);

	if ($result === FALSE) {
		echo "<p>Unable to change password<br/> Redirecting back to Profile page";
        header("Location: acc_details.php?change_password_failed");
	}
	else {
		header("Location: acc_details.php?change_password_success");
	}
?>