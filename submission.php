<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPV Events - Contact Us</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <?php
    include 'conn.php';
    ?>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top " style="background-color: #37517e;">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">LPV Events</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link " href="index.php">Home</a></li>
                    <li><a class="nav-link" href="about.php">About</a></li>
                    <li><a class="getstarted" href="ongoing.php">Ongoing Events</a></li>
                    <li><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li><a class="nav-link" href="team.php">Team</a></li>
                    <li><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <?php

    if (isset($_GET['sub'])) {
        $e_id = $_GET['sub'];
        $sql = "select e_name from events where e_id=$e_id";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();
        $e_name = $row['e_name'];
    }


    if (isset($_POST["insert_btn"])) {
        $e_name = $_POST["event_name"];
        $name = strtolower($_POST["name"]);
        $user_email = strtolower($_POST["email"]);
        $mobile_no = $_POST["mobile_no"];
        $image = $_FILES["work"]['name'];
        $tmp_name = $_FILES["work"]['tmp_name'];

        $select = "SELECT * FROM `registration_and_submission`";
        $run = mysqli_query($conn, $select);

        $c = 0;

        while ($row_user = mysqli_fetch_array($run)) {

            $e_idd = $row_user['e_id'];
            $u_name = $row_user['u_name'];
            $u_email = $row_user['u_email'];
            $u_mobile = $row_user['u_mobile'];

            if (($e_idd == $e_id && $u_name == $name && $u_email == $user_email)) {
                $update = "UPDATE registration_and_submission SET u_submission='$image' where e_id='$e_id' and u_name='$u_name' and u_email='$u_email'";
                $run_update = mysqli_query($conn, $update);
                if ($run_update === True) {
                    move_uploaded_file($tmp_name, "admin/submission/$image");
                } else {
                    echo "try agian";
                }
                $c = 1;
                break;
            } else if (($e_id == $e_idd && $u_email == $user_email && $u_mobile == $mobile_no)) {
                $update = "UPDATE registration_and_submission SET u_submission='$image' where e_id='$e_id' and u_mobile='$u_mobile' and u_email='$u_email'";
                $run_update = mysqli_query($conn, $update);
                if ($run_update === True) {
                    move_uploaded_file($tmp_name, "admin/submission/$image");
                } else {
                    echo "try agian";
                }
                $c = 1;
                break;
            }
        }

        if ($c == 0) {
            echo '<br><br><br>';

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Incorrect Details!</strong> Use same details as mentioned in Registration.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        } else {
            echo '<br><br><br>';

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Your Response has been Submitted!</strong> Thanks for submittion.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        }



        unset($_POST["insert_btn"]);
    }
    ?>

    <div class="container">
        <br><Br><br><BR>

        <div class="section-title">
            <h2>Submission</h2>
        </div>
        <div>
            <div class="info">
                <form action="submission.php?sub=<?php echo $e_id; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="event_name">Event Name:</label>
                        <input type="text" class="form-control" value="<?php echo $e_name; ?>" placeholder="Enter your name in format Firstname Lastname" name="event_name" required readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter your name in format Firstname Lastname" name="name" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email ID:</label>
                        <input type="email" class="form-control" placeholder="Enter email (same as entered during registration)" name="email" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="mobile_no">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile No (same as entered during registration)" name="mobile_no" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="work">Upload your Work:</label>
                        <input type="file" class="form-control" placeholder="Submit your work" name="work" required>
                    </div>
                    <br><br>
                    <input type="submit" name="insert_btn" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
    <br><Br><br><Br><br><br>

    <footer>
        <div style="background-color: #37517e; bottom:0;">
            <div class="container footer-bottom clearfix text-bright">
                <div class="copyrigh text-bright" style="color: white; text-align:center; padding: 5px;">
                    &copy; Copyright <strong><span> LPV Weltweit Solutions Private Limited</span></strong>. All Rights Reserved
                    <p>CIN# U74999DL2020PTC364712</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>