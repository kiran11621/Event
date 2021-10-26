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
    <link href="lpv_logo.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Admin - Create Event</title>

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
                <h2>Create Events</h2>
                <hr>
                <br>

                <?php 
                if (isset($_POST["insert_btn"])) {
                    $e_name = $_POST['e_name'];
                    $e_startreg = $_POST['e_startreg'];
                    $e_endreg = $_POST['e_endreg'];
                    $e_startsub = $_POST['e_startsub'];
                    $e_endsub = $_POST['e_endsub'];
                    $e_price = $_POST['e_price'];
                    $e_paymentlink = $_POST['e_paymentlink'];
                    $image = $_FILES["e_poster"]['name'];
                    $tmp_name = $_FILES["e_poster"]['tmp_name'];

                    // insert query for event table
                    $insert = "INSERT INTO events(e_name, e_startreg, e_endreg, e_startsub, e_endsub, e_poster, e_price, e_paymentlink) 
                    VALUES('$e_name', '$e_startreg', '$e_endreg', '$e_startsub', '$e_endsub', '$image', '$e_price', '$e_paymentlink')";

                    $run_insert = mysqli_query($conn, $insert);

                    if ($run_insert === True) {
                        move_uploaded_file($tmp_name, "event_poster/$image");
                    }
                    unset($_POST["insert_btn"]);
                    header("Location: view_events.php");
                    exit();
                }
                    
                ?> 

                <form action="create_events.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="e_name">Event Name:</label>
                        <input type="text" class="form-control" placeholder="Event Name" name="e_name" required>
                    </div>
                    <div class="form-group">
                        <label for="e_startreg">Registration Start DateTime:</label>
                        <input type="datetime-local" class="form-control" name="e_startreg" required>
                    </div>
                    <div class="form-group">
                        <label for="e_endreg">Registration End DateTime:</label>
                        <input type="datetime-local" class="form-control" name="e_endreg" required>
                    </div>
                    <div class="form-group">
                        <label for="e_startsub">Submission Start DateTime:</label>
                        <input type="datetime-local" class="form-control" name="e_startsub" required>
                    </div>
                    <div class="form-group">
                        <label for="e_endsub">Submission End DateTime:</label>
                        <input type="datetime-local" class="form-control" name="e_endsub" required>
                    </div>
                    <div class="form-group">
                        <label for="e_poster">Event Poster:</label>
                        <input type="file" class="form-control" name="e_poster" required>
                    </div>
                    <div class="form-group">
                        <label for="e_poster" style="color: Red;">If Event is Free of Cost Type "Free" (without quotes) in Event Price and Event Payment Link</label>
                        <label for="e_poster" style="color: Green;">Else Type the Cost in Numerical Form and Input the correct Payment link</label>
                    </div>
                    <div class="form-group">
                        <label for="e_price">Event Price:</label>
                        <input type="text" class="form-control" placeholder="Cost" name="e_price" required>
                    </div>
                    <div class="form-group">
                        <label for="e_paymentlink">Event Payment Link:</label>
                        <input type="text" class="form-control" placeholder="Payment Link" name="e_paymentlink" >
                    </div>
                    <input type="submit" name="insert_btn" class="btn btn-primary" />
                    <button class = "btn btn-success" onclick="document.location='view_events.php'">View Events</button>
                </form>

                

            </div>
        </div>
    </div>
</body>

</html>