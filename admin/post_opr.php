<?php

include_once('../db/db_setup.php');
//print_r($_GET);

if(isset($_GET['id'])){
	if ($_GET['opr'] == 'lock') {
		$queryLock = "UPDATE `blog` SET status= 0 WHERE id ='".$_GET['id']."'";
	}elseif ($_GET['opr'] ==  'unlock') {
		$queryunLock= "UPDATE `blog` SET status= 1 WHERE id ='".$_GET['id']."'";
	}elseif ($_GET['opr'] ==  'del') {
		$querydel = "DELETE FROM `blog` WHERE id='".$_GET['id']."' limit 1";
	}else{
		$_SESSION['fail'][] = "Unknown Operation Selected";
		header('location: dashboard.php');
	}

	if ($queryLock) {
		if(mysqli_query($conn,$queryLock)){
			$_SESSION['fail'][]= "index (".$_GET['index'].") InActive Successfully..!!";
			header('location: dashboard.php');
		}
	}
	elseif ($queryunLock) {
		if(mysqli_query($conn,$queryunLock)){
			$_SESSION['success'][]= "index (".$_GET['index'].") Active Successfully";
			header('location: dashboard.php');
		}
	}
	elseif ($querydel) {
		if(mysqli_query($conn,$querydel)){
			$_SESSION['fail'][]= "index (".$_GET['index'].") Deleted ";
			header('location: dashboard.php');
		}
	}
	else
	{
		$_SESSION['fail'][]= "unable to process..!!";
		header('location: dashboard.php');

	}

}else
{
	header('location: dashboard.php');
}


?>