<?php
include_once('../db/db_setup.php');

if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
echo "<script>";

echo "</script>";

$data = get_all_data_from_table1('users');


?>
<!doctype html>
<html lang="en">

<head>
    <?php include_once('panel_head.php'); ?>
    <link rel="stylesheet" href="dashboardstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
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
                    <h1 class=" my-3 text-info">Users Records</h1>
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


                            <hr>
                            <div class="row">

                                <div class="col-md-2">
                                    <a href="new_user.php">
                                        <div class="btn btn-outline-info">Add New User</div>
                                    </a>
                                </div>
                                <div class="col-md-10">
                                </div>

                            </div>
                            <br>

                            <table class="table table-striped table-hover" id="tableData">
                                <tr class="text-info">
                                    <th>Index</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Added By</th>
                                    <th>Added On</th>
                                    <th>Platform</th>
                                    <th>Action</th>
                                </tr>


                                <?php
                                for ($i = 0; $i < count($data); $i++) {
                                    $num = $i + 1;
                                    echo "<tr>";
                                    echo "<td>" . $num . "</td>";
                                    echo "<td>" . $data[$i]['name'] . "</td>";

                                    echo "<td>" . $data[$i]['email'] . "</td>";
                                    echo "<td>" . $data[$i]['gender'] . "</td>";
                                    echo "<td>" . $data[$i]['addedby'] . "</td>";
                                    echo "<td>" . $data[$i]['addedon'] . "</td>";

                                    echo "<td>" . $data[$i]['platform'] . "</td>";
                                    echo "<td>";

                                    if ($data[$i]['status'] == 1) {
                                        echo "<a href='user_opr.php?id=" . $data[$i]['id'] . "&opr=lock&index=" . $num . "'><div class='btn btn-outline-success mx-2'>InActive</div></a>";
                                    } else {
                                        echo "<a href='user_opr.php?id=" . $data[$i]['id'] . "&opr=unlock&index=" . $num . "'><div class='btn btn-outline-danger mx-2'>Active</div></a>";
                                    }


                                    echo "<a href='user_opr.php?id=" . $data[$i]['id'] . "&opr=del&index=" . $num ."'><div class='btn btn-outline-danger confirmation' >Delete</div></a>";
                                    echo "</td>";


                                    echo "</tr>";
                                }

                                ?>
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


    <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure, you want to delete this ?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

</body>

</html>



