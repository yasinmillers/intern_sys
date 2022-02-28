<?php
	require_once '../connect.php';
	if(ISSET($_POST['update_admin'])){
		$username = $_POST['userName'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
		$password = $_POST['password'];
        $email = $_POST['userEmail'];
		$gender = $_POST['gender'];
		$q_admin = $conn->query("SELECT * FROM `registered_users` WHERE `user_name` = '$username' and id != '$_REQUEST[id]' ") or die($conn->error);
		$v_admin = $q_admin->num_rows;
		if($v_admin > 0){
			echo '<script>alert("Username already taken");</script>';
			echo '<script>window.location = "edit_students.php?id=" +'.$_REQUEST['id'].'</script>';
		}else{
			$conn->query("UPDATE `registered_users` SET `user_name` = '$username', `first_name` = '$firstname', last_name=' $lastname ', `password` = '$password', email=' $email' ,gender='$gender' WHERE `id` = '$_REQUEST[id]'") or die($conn->error);
			header('location:students_details.php');
		}
	}
?>