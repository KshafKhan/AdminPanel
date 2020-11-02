<?php

ob_start();
session_start();


//print_r($_POST);
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "mpis";
if ($conn = mysqli_connect($host,$user,$pass)) {
	if ($sql_db_sel = mysqli_select_db($conn,$db_name)) {
		
	}else{
		$_SESSION['fail'][] = "Database select Connection Failed..!!";
	}
}
else{
	$_SESSION['fail'][] = "Connection Failed";
}

$query = "SELECT * FROM `users` WHERE email='".$_POST['myuser']."'";

if ($sql = mysqli_query($conn,$query)) {
	$value = mysqli_fetch_assoc($sql);
	$user = $value['name'];
	$pass = $value['password'];
	$new_pass = md5($_POST['pass']);
		if($new_pass==$pass){
			$_SESSION['success'][] = "Welcome to Dashboard ".$_POST['myuser'];
			$_SESSION['user'] = $user;
			header('location: dashboard.php');
		}
		else{
			$_SESSION['fail'][] = "Password incorrect";
			header('location: index.php');
		}
}else{
	$_SESSION['fail'][] = "No Such User Exists..!!";
	header('location: index.php');;
}

?>
