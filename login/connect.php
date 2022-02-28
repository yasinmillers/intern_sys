<?php
$connect=mysqli_connect('localhost','root','','db_issm');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>