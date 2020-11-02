<?php
include_once('../db/db_setup.php');

if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
echo "<script>";

echo "</script>";


$data = get_all_data_from_table('persons');


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
                    <div class="col-md-10" >
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
                    <h1 class="text-info my-3">Dashboard</h1>
                    <hr>

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

                            <div class="row">
                                 <div class="col-md-2">
                                    <div class="ml-2">
                                        <p class="text-secondary"><strong> REPORTS</strong></p>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                </div>
                            </div>
                            <br>
                            <table class="table table-striped table-hover" id="tableData">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>

                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Platform</th>
                                        <th>Added By</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>

                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Platform</th>
                                        <th>Added By</th>

                                        <th>Action</th>
                                    </tr>
                                </tfoot>


                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($data); $i++) {
                                        $num = $i + 1;
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        echo "<td>" . $data[$i]['name'] . "</td>";
                                        echo "<td>" . $data[$i]['gender'] . "</td>";
                                        echo "<td>" . $data[$i]['age'] . "</td>";
                                        echo "<td>" . $data[$i]['dateCreated'] . "</td>";
                                        echo "<td>" . $data[$i]['type'] . "</td>";
                                        echo "<td>" . $data[$i]['platform'] . "</td>";
                                        echo "<td>" . $data[$i]['addedBy'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='view_report.php?id=" . $data[$i]['id'] . "'><div class='btn btn-outline-success'>View</div></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
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