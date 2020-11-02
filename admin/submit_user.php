
<?php
include_once('../db/db_setup.php');
//print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
 $phone = $_POST['phone'];
 $pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$role = $_POST['role'];
 $gender = $_POST['gender'];

if ($pass != $pass2) {
	$_SESSION['fail'][] = "Two password does not matched with each other, Please Try again.!";
	header('location: new_user.php');
}
else
{
	$new_pass = md5($pass);
}

$date = new DateTime('now', new DateTimeZone('Asia/Karachi'));
$date = $date->format('d-m-Y h:i:s:a');
$author = $_SESSION['user'];
$status = 1;
$uuid = $date+$phone;
$platform = "web";

if (!isset($_SESSION['fail'])) {
	$query = "INSERT INTO `users`(uuid,name, email, password, gender, role, platform,
	addedon,addedby,status)
	 VALUES ('".$uuid."','".$name."','".$email."','".$new_pass."','".$gender."','".$role."','".$platform."'
	 ,'".$date."','".$author."','".$status."')";
	
		if(mysqli_query($conn,$query)){
			$_SESSION['success'][] = "susccessfully Added";
			header('location: new_user.php');
		}
		else
		{
			$_SESSION['fail'][] =  "failed to Added..!!";
			header('location: new_user.php');
		}
}else
{
	header('location: new_user.php');
}
	



	/*echo "<pre>Debug: $query</pre>\m";
	$result = mysqli_query($conn, $query);
	if ( false===$result ) {
	  printf("error: %s\n", mysqli_error($conn));
	}
	else {
	  echo 'done.';
	}*/
	
	

?>
