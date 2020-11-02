<?php
include_once('../db/db_setup.php');

?>


<!doctype html>
<html lang="en">

<head>
  <?php include_once('panel_head.php'); ?>
</head>

<body class=" bg-dark mb-5">

  <div class="container bg-light mt-5 p-5">
    <div class=" pl-5 pr-5">

      <div class="my-5 p">
        <h1>Super Admin Login</h1>
      </div>
      <hr>
      <?php
      if (isset($_SESSION['success'])) {
        foreach ($_SESSION['success'] as $success) {
          echo "<div class='alert alert-success' role='alert'><font color='green'><b>" . $success . "<br></b></font></div>";
        }
        session_destroy();
      } elseif (isset($_SESSION['fail'])) {
        foreach ($_SESSION['fail'] as $fail) {
          echo "<div class='alert alert-danger' role='alert'><font color='red'><b>" . $fail . "<br></b></font></div>";
        }
        session_destroy();
      }


      ?>
      <div class=" pb-5">
        <form method="post" action="login.php">
          <label>Email</label><br>
          <input type="email" name="myuser" class="form-control input-lg" required>
          <label>Password</label><br>
          <input type="Password" name="pass" class="form-control input-lg"><br>
          <input type="submit" value="Login" class="btn btn-success" required>
        </form>
      </div>
    </div>
  </div>
  <?php include_once('panel_script.php');  ?>

</body>

</html>