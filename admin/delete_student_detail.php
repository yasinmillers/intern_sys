<?php
	require_once '../connect.php';
	$conn->query("DELETE FROM `registered_users` WHERE id = '$_REQUEST[id]'") or die($conn->error);
	header('location:students_details.php');
?>
