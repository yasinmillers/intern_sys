<?php
	require_once '../connect.php';
	$conn->query("DELETE FROM `expense` WHERE `expense_id` = '$_REQUEST[expenses_id]'") or die($conn->error);
	$conn->query("DELETE FROM `transaction` WHERE `transact_detail` = '$_REQUEST[expenses_id]'") or die($conn->error);
	header('location:expenses.php');
?>