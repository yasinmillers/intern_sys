<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_issm";
$conn= mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysqli_select_db($conn,$dbname) or die('database selection problem');
?>