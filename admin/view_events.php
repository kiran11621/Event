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
    <title>Admin - View Team</title>

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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
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
                            <a href="add_team.php">Add Employee</a>
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
                <h2>View Events</h2>
                <hr>
                <br>

                <!-- add code here -->

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Event Id</th>
                                <th>Name</th>
                                <th>Registration Start DateTime</th>
                                <th>Registration End DateTime</th>
                                <th>Submission Start DateTime</th>
                                <th>Submission End DateTime</th>
                                <th>Poster</th>
                                <th>Price</th>
                                <th>Payment Link</th>
                                <th>Update</th>
                                <th>Delete</th>
                                <th>View Submissions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = "SELECT * FROM events";
                            $run = mysqli_query($conn, $select);

                            // delete a event
                            if(isset($_GET['delete'])){
                                $del_id = $_GET['delete'];
                            
                                $delete = "DELETE FROM events WHERE e_id='$del_id'";

                                $run_delete = mysqli_query($conn, $delete);
                                if($run_delete === true) {
                                    echo "record delete";
                                } else {
                                    echo "not";
                                }
                            }

                            while ($row_user = mysqli_fetch_array($run)) {

                                $e_id = $row_user['e_id'];
                                $e_name = $row_user['e_name'];
                                $e_startreg = $row_user['e_startreg'];
                                $e_endreg = $row_user['e_endreg'];
                                $e_startsub = $row_user['e_startsub'];
                                $e_endsub = $row_user['e_endsub'];
                                $e_poster = $row_user['e_poster'];
                                $e_price = $row_user['e_price'];
                                $e_paymentlink = $row_user['e_paymentlink'];
                            ?>
                                <tr>
                                    <td style="text-align:center"><?php echo $e_id; ?></td>
                                    <td style="text-align:center"><?php echo $e_name; ?></td>
                                    <td style="text-align:center"><?php echo $e_startreg; ?></td>
                                    <td style="text-align:center"><?php echo $e_endreg; ?></td>
                                    <td style="text-align:center"><?php echo $e_startsub; ?></td>
                                    <td style="text-align:center"><?php echo $e_endsub; ?></td>
                                    <td style="text-align:center"><a href="event_poster/<?php echo $e_poster; ?>"><img src="event_poster/<?php echo $e_poster; ?>" height="50px" ;></a></td>
                                    <td style="text-align:center"><?php echo $e_price; ?></td>
                                    <td style="text-align:center"><?php echo $e_paymentlink; ?></td>
                                    <td><a class="btn btn-success" href="update.php?update=<?php echo $e_id; ?>">Update</a></td>
                                    <td style="text-align:center"><a class="btn btn-danger" href="delete.php?del=<?php echo $e_id; ?>" onclick="return confirm('Are you sure you want to delete this event?')">Delete</a></td>
                                    <td><a class="btn btn-success" href="view_submission.php?view=<?php echo $e_id; ?>">View Submissions</a></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
</body>

</html>