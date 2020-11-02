<?php
include_once('../db/db_setup.php');

if (!isset($_SESSION['user'])) {
    header('location: index.php');
}


if (isset($_GET['id'])) {
    $refid = $_GET['id'];
    $data = get_data_by_id('persons', $refid);
    // print_r($data);
} else {
    header('location: dashboard.php');
}


?>
<!doctype html>
<html lang="en">

<head>
    <?php include_once('panel_head.php'); ?>

</head>

<body>
    <!-- header section-->
    <?php include_once('admin_header_section.php'); ?>
    <!-- header section end-->
    <div class="container-fluid">


        <!-- white spaces to bring gap between header and main contant -->
        <!-- <div class="row">

            <div class="col-md-2">
                <br><br><br>

            </div>
            <div class="col-md-10">
            </div>

        </div> -->
        <!-- end gap between header and main contant -->
        <div class="row">
            <!-- side_bar_section-->
            <?php include_once('side_bar_section.php');  ?>
            <!-- Sidebar section end-->


            <!-- Main Cont section-->
            <div id="maincontent">

                <div class="container-fluid col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <h1 class=" my-3 text-info">Report</h1>
                            <hr>
                        </div>
                        <div class="col-md-3 my-3">
                            <a href="dashboard.php ">
                                <div class="btn btn-info">Back</div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            if (isset($_SESSION['success'])) {
                                foreach ($_SESSION['success'] as $success) {
                                    echo "<div class='alert alert-success' role='alert'><font color='green'><b>" . $success . "<br></b></font></div>";
                                }
                                unset($_SESSION['success']);
                            } elseif (isset($_SESSION['fail'])) {
                                foreach ($_SESSION['fail'] as $fail) {
                                    echo "<div class='alert alert-danger' role='alert'><font color='red'><b>" . $fail . "<br></b></font></div>";
                                }
                                unset($_SESSION['fail']);
                            }


                            ?>




                            <!-- <div class="row"> -->
                            <!-- <div class="col-md-6">
                                    <?php
                                    // if ($data[0]['platform'] == "Android") {
                                    //     print_r($data[0]['photo']);
                                    //     $image = $data[0]['photo'];
                                    //     $imageData = base64_encode(file_get_contents($image));
                                    //     echo '<img src="data:image/jpeg;base64,' . $imageData . '" class="img img-circle img-thumbnail">';
                                    // } else {
                                    //     $image = $data[0]['photo'];
                                    //     echo '<img src="../' . $image . '" class="img img-circle img-thumbnail">'; 
                                    // }

                                    ?> -->
                            <!-- <img src="../<?php echo $data[0]['photo'] ?>" class="img img-circle img-thumbnail">   -->
                            <div class="row my-3 p-3">
                                <div class="col-md-6 align-self-center ">
                                    <?php $image = $data[0]['photo'];
                                    echo '<img src="../' . $image . '" class="img img-circle img-thumbnail">'; ?>
                                    <div class="col-md-12">
                                        <!-- <label> <?php echo $data[0]['photo'] ?> </label> -->
                                    </div>

                                </div>
                                <div class="col-md-6 my-2 border border-secondary rounded p-5 bg-info text-center ">
                                    <div class="col-md-12"><label> <strong>Name:</strong> <?php echo $data[0]['name'] ?> </label></div>
                                    <div class="col-md-12"><label> <strong>Phone No:</strong> <?php echo $data[0]['phone'] ?> </label></div>
                                    <div class="col-md-12"><label><strong>Gender:</strong> <?php echo $data[0]['gender'] ?> </label></div>
                                    <div class="col-md-12"><label><strong>Dress:</strong> <?php echo $data[0]['dress'] ?> </label></div>
                                    <div class="col-md-12"><label><strong>Place:</strong> <?php echo $data[0]['place'] ?> </label></div>

                                    <div class="col-md-12"><label><strong>Type: </strong> <?php echo $data[0]['type'] ?> </label></div>
                                    <div class="col-md-12"><label><strong>Date Created:</strong> <?php echo $data[0]['dateCreated'] ?> </label></div>
                                    <div class="col-md-12"><label><strong>Plate form:</strong> <?php echo $data[0]['platform'] ?> </label></div>
                                    <div class="col-md-12"><label><strong>Added By:</strong> <?php echo $data[0]['addedBy'] ?> </label></div>

                                </div>
                            </div>





                            <!-- </div> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    </div>
    <?php include_once('panel_script.php');  ?>


</body>

</html>