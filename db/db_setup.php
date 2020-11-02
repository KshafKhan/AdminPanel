<?php

session_start();

$host = "localhost";
$user = "root";
$password  ="";
$database= "mpis";

if($conn = mysqli_connect($host, $user, $password)){
	if(mysqli_select_db($conn, $database)){
		//echo "Database connected successfully";
	}
}
else{
	echo "Database connection failed";
}

include_once('db_functions.php');




?>