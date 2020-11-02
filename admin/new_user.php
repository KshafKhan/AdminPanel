<?php
include_once('../db/db_setup.php');
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <?php include_once('panel_head.php')  ;?>   
    <script src="../ckeditor/ckeditor.js"></script>
    <link rel="stylesheet"  href="dashboardstyle.css">
  </head>
  <body>
  <?php include_once('admin_header_section.php');?>
<div class="container">
	<!-- header section-->
    
    <!-- header section end-->
     


    
    <?php
    	if (isset($_SESSION['success'])) {
    		foreach ($_SESSION['success'] as $success) {
    			echo "<div class='alert alert-success' role='alert'><font color='green'><b>".$success."<br></b></font></div>";
    		
    		}
    		unset($_SESSION['success']);
    	}
    	elseif (isset($_SESSION['fail'])) {
    		foreach ($_SESSION['fail'] as $fail ) {
    			echo "<div class='alert alert-danger' role='alert'><font color='red'><b>".$fail."<br></b></font></div>";
    		
    		}
    		unset($_SESSION['fail']);
    	}


    ?>
  
     <div class="row">
        <div class="col-md-9">
            <h1 class=" my-3 text-info">Create New User</h1>
              <hr>
        </div>
        <div class="col-md-3 my-3">
            <a href="user_data.php "><div class="btn btn-info
                ">Back</div></a>
        </div>
    </div>
    <br>
    <div class=" pr-5 p-4 mx-auto"> 


    <form method="Post" action="submit_user.php" enctype="multipart/form-data">
	    <label>Full Name</label><br>
	    <input type="text" name="name" class="form-control input-lg" required><br>
	    <label>Email Address</label><br>
	    <input type="email" name="email" class="form-control input-lg" required><br>
	    <label>Phone Number</label><br>
	    <input type="text" name="phone" class="form-control input-lg" required><br>
	    <label>Password</label><br>
	    <input type="Password" name="pass" class="form-control input-lg" required><br>
	    <label>Confirm Password</label><br>
        <input type="Password" name="pass2" class="form-control input-lg" required><br>
        <label>Gender</label><br>
	    <select name="gender" id="gender" class="form-control input-lg">
            <option value="" disabled selected>Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <label>Role</label><br>
	    <select name="" id="role" class="form-control input-lg">
            <option value="" disabled selected>Select Role</option>
            <option value="editor">Editor</option>
            <option value="employee">Employee</option>
        </select>
        <br>
	    <input type="submit" name="submit_user" class="btn btn-outline-success btn-lg" value="Add User">
    </form>
    </div>
    
    <br><br>
    <?php include_once('panel_script.php');  ?>
	 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

      </body>
</html>