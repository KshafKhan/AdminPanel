<?php
include_once('../db/db_setup.php');
print_r($_POST);




/*

if (isset($_POST['id']) && $_POST['id']!= '') {
	$location = 'edit_post.php?id='.$_POST['id'];

		$Image_file = $_FILES['image'];
		$format = array('png','jpeg','jpg','gif');
		$temp = explode('/', $Image_file['type']);

		foreach($format as $ext){
			if($ext == $temp[1]){
				$new_image = $Image_file['name'];
			}
		}

			if ($new_image) {
				$target = '../img/'.$new_image;
				if (move_uploaded_file($Image_file['tmp_name'], $target)) {
					echo "file uploaded successfully";
					$image = 'img/'.$new_image;
				}else{
					$_SESSION['fail'][] = "Unable To Upload Image File";
					
				}
			}else{
				$_SESSION['fail'][] = "Please Upload An Image File..!!";
					
			}


		if(check_validation($_POST['title']) == 0)
		{
			$_SESSION['fail'][] = "Sorry ! Only limited characters used in title.";
					
		}else
		{
			$title = mysqli_real_escape_string($conn,$_POST['title']);
		}

		$s_desc = mysqli_real_escape_string($conn,$_POST['s_desc']);
		$post_data = mysqli_real_escape_string($conn,$_POST['post_data']);
		if(check_validation($_POST['tags']) == 0)
		{
			$_SESSION['fail'][] = "Sorry ! Only limited characters used in tags.";
					
		}else
		{
			$tags = mysqli_real_escape_string($conn,$_POST['tags']);
		}
		if(check_validation($_POST['catagory']) == 0)
		{
			$_SESSION['fail'][] = "Sorry ! Only limited characters used in catagory.";
					
		}else
		{
		$catagory = mysqli_real_escape_string($conn,$_POST['catagory']);
		}
		$author = $_SESSION['user'];
		$date = new DateTime('now', new DateTimeZone('Asia/Karachi'));
		$date = $date->format('d-m-Y h:i:s:a');


		if(!isset($_SESSION['fail'])) {
			$query = "UPDATE `blog` SET title='".$title."',updatedDate='".$date."',updatedBy='".$author."',s_desc='".$s_desc."',description='".$post_data."',image='".$image."',tag='".$tag."',catagory='".$catagory."' WHERE id ='".$_POST['id']."'";
			
				if(mysqli_query($conn,$query)){
					$_SESSION['success'][] = "Post Updated Successfully";
					header("location: $location");
				}
				else
				{
					$_SESSION['fail'][] =  "Post Update Failed";
					header("location: $location");
				}
		}else
		{
			header("location: $location");
		}
		
*/


		/*echo "<pre>Debug: $query</pre>\m";
	$result = mysqli_query($conn, $query);
	if ( false===$result ) {
	  printf("error: %s\n", mysqli_error($conn));
	}
	else {
	  echo 'done.';
	}
}else
{
	header('location: dashboard.php');
}


	*/



?>

