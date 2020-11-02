<?php

include_once('../db/db_setup.php');
//print_r($_GET);

if(isset($_GET['id'])){
	if ($_GET['opr'] == 'lock') {
		$queryLock = "UPDATE `users` SET status= 0 WHERE id ='".$_GET['id']."'";
	}elseif ($_GET['opr'] ==  'unlock') {
		$queryunLock= "UPDATE `users` SET status= 1 WHERE id ='".$_GET['id']."'";
	}elseif ($_GET['opr'] ==  'del') {
		$querydel = "DELETE FROM `users` WHERE id='".$_GET['id']."' limit 1";
	}else{
		$_SESSION['fail'][] = "Unknown Operation Selected";
		header('location: user_data.php');
	}

	if ($queryLock) {
		if(mysqli_query($conn,$queryLock)){
			$_SESSION['fail'][]= "index (".$_GET['index'].") InActive Successfully..!!";
			header('location: user_data.php');
		}
	}
	elseif ($queryunLock) {
		if(mysqli_query($conn,$queryunLock)){
			$_SESSION['success'][]= "index (".$_GET['index'].") Active Successfully";
			header('location: user_data.php');
		}
	}
	elseif ($querydel) {
		if(mysqli_query($conn,$querydel)){
			$_SESSION['fail'][]= "index (".$_GET['index'].") Deleted ";
			header('location: user_data.php');
		}
	}
	else
	{
		$_SESSION['fail'][]= "unable to process..!!";
		header('location: user_data.php');;

	}

}else
{
	header('location: user_data.php');
}



?>