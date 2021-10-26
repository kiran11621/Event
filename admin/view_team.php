<?php
session_start();

if((isset($_SESSION['role']) && $_SESSION['role'] == "admin")){
    
}else{

    http_response_code(404);
    exit();
}
?>
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
    <link href="lpv_logo.png" rel="icon">
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
                <li>
                    <a href="add_to_gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="container">
                <br>
                <h2>View Team</h2>
                <hr>
                <br>

                <!-- add code here -->

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Intro</th>
                                <th>Biography</th>
                                <th>Education</th>
                                <th>Profile pic</th>
                                <th>Facebook id</th>
                                <th>Twitter id</th>
                                <th>Instagram id</th>
                                <th>LinkedIn id</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = "SELECT * FROM team";
                            $run = mysqli_query($conn, $select);

                            if (isset($_GET['del'])) {
                                $del_id = $_GET['del'];
                                $delete = "DELETE FROM team WHERE t_id='$del_id'";
    
                                $run_delete = mysqli_query($conn, $delete);
    
                                if ($run_delete === true) {
                                } else {
                                }
                            }

                            while ($row_user = mysqli_fetch_array($run)) {

                                $t_id = $row_user['t_id'];
                                $t_name = $row_user['t_name'];
                                $t_designation = $row_user['t_designation'];
                                $t_email = $row_user['t_email'];
                                $t_mobile= $row_user['t_mobile'];
                                $t_intro = $row_user['t_intro'];
                                $t_biography = $row_user['t_biography'];
                                $t_education = $row_user['t_education'];
                                $t_profile_image = $row_user['t_profile_image'];
                                $t_facebook = $row_user['t_facebook'];
                                $t_twitter = $row_user['t_twitter'];
                                $t_instagram = $row_user['t_instagram'];
                                $t_linkedin = $row_user['t_linkedin'];
                            ?>
                                <tr>
                                <td style="text-align:center"><?php echo $t_id; ?></td>
                                    <td style="text-align:center"><?php echo $t_name; ?></td>
                                    <td style="text-align:center"><?php echo $t_designation; ?></td>
                                    <td style="text-align:center"><?php echo $t_email; ?></td>
                                    <td style="text-align:center"><?php echo $t_mobile; ?></td>
                                    <td style="text-align:center"><?php echo $t_intro; ?></td>
                                    <td style="text-align:center"><?php echo $t_biography; ?></td>
                                    <td style="text-align:center"><?php echo $t_education; ?></td>
                                    <td style="text-align:center"><a href="team_profile_picture/<?php echo $t_profile_image; ?>"><img src="team_profile_picture/<?php echo $t_profile_image; ?>" height="50px" ;></a></td>
                                    <td style="text-align:center"><?php echo $t_facebook; ?></td>
                                    <td style="text-align:center"><?php echo $t_twitter; ?></td>
                                    <td style="text-align:center"><?php echo $t_instagram; ?></td>
                                    <td style="text-align:center"><?php echo $t_linkedin; ?></td>
                                    <td><a class="btn btn-danger" href="view_team.php?del=<?php echo $t_id; ?>">Delete</a></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
</body>

</html>