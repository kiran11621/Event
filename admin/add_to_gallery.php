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
    <title>Create Event</title>

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
                <h2>Create Events</h2>
                <hr>
                <br>

                <form action="add_to_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="e_name">Upload Image of Events Poster:</label>
                        <input type="file" class="form-control" placeholder="Event Poster" name="g_image" required>
                    </div>

                    <input type="submit" name="insert_btn1" class="btn btn-primary" />

                    <?php
                    if (isset($_POST["insert_btn1"])) {
                        $image = $_FILES["g_image"]['name'];
                        $tmp_name = $_FILES["g_image"]['tmp_name'];

                        // insert query for event table
                        $insert = "INSERT INTO gallery(g_id, g_image) 
                        VALUES(1, '$image')";

                        $run_insert = mysqli_query($conn, $insert);

                        if ($run_insert === True) {
                            echo "Added to Gallery";
                            move_uploaded_file($tmp_name, "gallery/$image");
                        } else {
                            echo "try agian";
                        }

                        unset($_POST["insert_btn1"]);
                    }
                    ?>
                </form>

                <form action="add_to_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="e_name">Upload Image Submissions:</label>
                        <input type="file" class="form-control" placeholder="Event Submission" name="g_image" required>
                    </div>

                    <input type="submit" name="insert_btn2" class="btn btn-primary" />

                    <?php
                    if (isset($_POST["insert_btn2"])) {
                        $image = $_FILES["g_image"]['name'];
                        $tmp_name = $_FILES["g_image"]['tmp_name'];

                        // insert query for event table
                        $insert = "INSERT INTO gallery(g_id, g_image) 
                        VALUES(2, '$image')";

                        $run_insert = mysqli_query($conn, $insert);

                        if ($run_insert === True) {
                            echo "Added to Gallery";
                            move_uploaded_file($tmp_name, "gallery/$image");
                        } else {
                            echo "try agian";
                        }

                        unset($_POST["insert_btn2"]);
                    }
                    ?>
                </form>

                <form action="add_to_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="e_name">Upload Videa Submissions:</label>
                        <input type="file" class="form-control" placeholder="Event Submission" name="g_image" required>
                    </div>

                    <input type="submit" name="insert_btn3" class="btn btn-primary" />

                    <?php
                    if (isset($_POST["insert_btn3"])) {
                        $image = $_FILES["g_image"]['name'];
                        $tmp_name = $_FILES["g_image"]['tmp_name'];

                        // insert query for event table
                        $insert = "INSERT INTO gallery(g_id, g_image) 
                        VALUES(3, '$image')";

                        $run_insert = mysqli_query($conn, $insert);

                        if ($run_insert === True) {
                            echo "Added to Gallery";
                            move_uploaded_file($tmp_name, "gallery/$image");
                        } else {
                            echo "try agian";
                        }

                        unset($_POST["insert_btn3"]);
                    }
                    ?>
                </form>

                <form action="add_to_gallery.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="e_name">Upload Image of Submissions:</label>
                        <input type="file" class="form-control" placeholder="Event Submission" name="g_image" required>
                    </div>

                    <input type="submit" name="insert_btn4" class="btn btn-primary" />

                    <?php
                    if (isset($_POST["insert_btn4"])) {
                        $image = $_FILES["g_image"]['name'];
                        $tmp_name = $_FILES["g_image"]['tmp_name'];

                        // insert query for event table
                        $insert = "INSERT INTO gallery(g_id, g_image ) 
                        VALUES(4, '$image')";

                        $run_insert = mysqli_query($conn, $insert);

                        if ($run_insert === True) {
                            echo "Added to Gallery";
                            move_uploaded_file($tmp_name, "gallery/$image");
                        } else {
                            echo "try agian";
                        }

                        unset($_POST["insert_btn4"]);
                    }
                    ?>
                </form>

            </div>
        </div>
    </div>
</body>

</html>