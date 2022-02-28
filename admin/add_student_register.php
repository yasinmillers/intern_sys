<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_admin'])){
		$username = $_POST['userName'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
		$password = $_POST['password'];
        $email = $_POST['userEmail'];
		$gender = $_POST['gender'];
		$q_admin = $conn->query("SELECT * FROM `registered_users` WHERE `user_name` = '$username' ") or die($conn->error);
		$v_admin = $q_admin->num_rows;
		if($v_admin > 0){
			echo '<script>alert("Username already taken");</script>';
			echo '<script>window.location = "student_details.php"</script>';
		}else{
			$conn->query("INSERT INTO `registered_users` SET `user_name` = '$username', `first_name` = '$firstname', last_name=' $lastname ', `password` = '$password', email=' $email' ,gender='$gender'") or die($conn->error);
			header('location:students_details.php');
		}
	}
?>