<?php
// session_start();

// if ((isset($_SESSION['role']) && $_SESSION['role'] == "admin")) {
// } else {
//     http_response_code(404);
//     exit();
// }
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
    <link href="lpv_logo.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Admin - Add Team</title>

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
                <h2>Add Employee</h2>
                <hr>
                <br>
                <?php

                if (isset($_POST["insert_btn"])) {
                    $t_name = $_POST["name"];
                    $t_designation = $_POST["designation"];
                    $t_email = $_POST["email"];
                    $t_mobile = $_POST["mobile"];
                    $t_intro = $_POST["shortntr"];
                    $t_biography = $_POST["biography"];
                    $t_education = $_POST["education"];
                    $image1 = $_FILES["image"]['name'];
                    $tmp_name = $_FILES["image"]['tmp_name'];
                    $f_id = $_POST["fb"];
                    $t_id = $_POST["twit"];
                    $i_id = $_POST["insta"];
                    $l_id = $_POST["linkedin"];

                    $insert = "INSERT INTO `team` (`t_name`, `t_designation`, `t_email`, `t_mobile`, `t_intro`, `t_biography`, `t_education`, `t_profile_image`, `t_facebook`, `t_twitter`, `t_instagram`, `t_linkedin`) VALUES ('$t_name', '$t_designation', '$t_email', '$t_mobile', '$t_intro', '$t_biography', '$t_education', '$image1', '$f_id', '$t_id', '$i_id', '$l_id')";
                    $run_insert = mysqli_query($conn, $insert);

                    if ($run_insert === True) {

                        move_uploaded_file($tmp_name, "team_profile_picture/$image1");
                        header("Location: view_team.php");
                        exit();
                    } else {
                    }

                    unset($_POST["insert_btn"]);
                }
                ?>

                <!-- add code here -->
                <div class="container">
                    <form action="add_team.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation:</label>
                            <input type="text" class="form-control" placeholder="Enter designation" name="designation" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="contact" placeholder="Enter Mobile number" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="shortntr">Short Introduction</label>
                            <input type="text" class="form-control" id="shortntr" placeholder="Enter Introduction" name="shortntr" required>
                        </div>
                        <div class="form-group">
                            <label for="biography">Biography:</label>
                            <input type="text" class="form-control" placeholder="Enter Biography" name="biography" required>
                        </div>
                        <div class="form-group">
                            <label for="education">Education:</label>
                            <input type="text" class="form-control" placeholder="Enter Education" name="education" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Profile Image:</label>
                            <input type="file" class="form-control" id="image" placeholder="" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="e_poster" style="color: Red;">If User is not Present on particular social media platform in the resceptive ID asked input '#' (without quotes)</label>
                        </div>
                        <div class="form-group">
                            <label for="fb">Facebook Id</label>
                            <input type="text" class="form-control" placeholder="Enter Facebook id" name="fb" required>
                        </div>

                        <div class="form-group">
                            <label for="twit">Twitter Id</label>
                            <input type="text" class="form-control" placeholder="Enter Twitter id" name="twit" required>
                        </div>

                        <div class="form-group">
                            <label for="insta">Instagram Id</label>
                            <input type="text" class="form-control" placeholder="Enter Instagram id" name="insta" required>
                        </div>

                        <div class="form-group">
                            <label for="linkedin">Linkedin Id</label>
                            <input type="text" class="form-control" placeholder="Enter Linkedin id" name="linkedin" required>
                        </div>

                        <input type="submit" name="insert_btn" class="btn btn-primary" />
                    </form>


                </div>
            </div>
        </div>
</body>

</html>