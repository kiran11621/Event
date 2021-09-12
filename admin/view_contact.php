<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Document</title>

    <?php 
        include 'conn.php';
    ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>LPV Weltweit Events</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Admin Site</p>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Events</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="view_events.php">View</a>
                        </li>
                        <li>
                            <a href="create_events.php">Create Events</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="view_submission.php">Registration & Submission</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teams</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="view_team.php">View</a>
                        </li>
                        <li>
                            <a href="add_emp.php">Add Employee</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="view_contact.php">Contact</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="container">
                <br>
                <h2>View Contact Details</h2>
                <hr>
                <br>

                <!-- add code here -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $select = "SELECT * FROM contact";
                        $run = mysqli_query($conn, $select);

                        if (isset($_GET['del'])) {
                            $del_id = $_GET['del'];
                            $delete = "DELETE FROM contact WHERE c_id='$del_id'";

                            $run_delete = mysqli_query($conn, $delete);

                            if ($run_delete === true) {
                                echo "Record Deleted Successfully!";
                            } else {
                                echo "Record not Deleted!";
                            }
                        }

                        while ($row_user = mysqli_fetch_array($run)) {

                            $srno = $row_user['c_id'];
                            $name = $row_user['c_name'];
                            $email = $row_user['c_email'];
                            $mobile = $row_user['c_mobile'];
                            $subject = $row_user['c_subject'];
                            $message = $row_user['c_message'];

                        ?>
                            <tr>
                                <td><?php echo $srno; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><?php echo $subject; ?></td>
                                <td><?php echo $message; ?></td>
                                <td><a class="btn btn-danger" href="view_contact.php?del=<?php echo $srno; ?>">delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>