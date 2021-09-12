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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    include 'conn.php';

    if (isset($_GET['team'])) {
        $view_bio = $_GET['team'];
    }

    $select = "SELECT * FROM team WHERE t_id='$view_bio'";
    $run = mysqli_query($conn, $select);

    $row_user = mysqli_fetch_array($run);

    $t_id = $row_user['t_id'];
    $t_name = $row_user['t_name'];
    $t_designation = $row_user['t_designation'];
    $t_email = $row_user['t_email'];
    $t_mobile = $row_user['t_mobile'];
    $t_intro = $row_user['t_intro'];
    $t_biography = $row_user['t_biography'];
    $t_education = $row_user['t_education'];
    $t_profile_image = $row_user['t_profile_image'];
    $t_facebook = $row_user['t_facebook'];
    $t_twitter = $row_user['t_twitter'];
    $t_instagram = $row_user['t_instagram'];
    $t_linkedin = $row_user['t_linkedin'];

    ?>

    <section>
        <br><br><br>
        <div id="middle_area">

            <nav aria-label="breadcrumb" style="background-color: #37517e; padding: 5px; margin-left: 10%; margin-right: 10%;">
                <ol class="breadcrumb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>

            <br><br><br>

            <div class="container">
                <div class="team-container">


                    <div class="team-detail">
                        <div class="row">
                            <div class="col-xs-10 col-md-2 float-left"><img src="admin/team_profile_picture/<?php echo $t_profile_image; ?>" alt="" width="100%" height="160px" style="border: 1px solid #ccc;" />
                            </div>



                            <div class="col-xs-11 col-md-10 float-left">
                                <h1><?php echo $t_name; ?></h1>
                                <span class="team-memdes"><?php echo $t_designation; ?></span>
                                <div class="teammem-info"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><?php echo $t_email; ?></a>
                                </div>
                                <div class="teammem-info"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><?php echo $t_mobile; ?></a></div>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>

                            <div class="col-md-12 col">
                                <h3 class="border-heading"><span>Biography</span>
                                </h3>
                                <hr>
                                <div class="expandDiv" style="font-size: 20px;">
                                    <div><?php echo $t_biography; ?></div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <i class="fas fa-user-graduate"></i>
                                <h3 class="border-heading"><span>Education</span>
                                </h3>
                                <hr>
                                <div style="text-align: justify;font-size: 20px;"><?php echo $t_education; ?></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <br><br><br>

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
    </main>
    <!-- End #main -->
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