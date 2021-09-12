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
                    <li><a class="nav-link active" href="team.php">Team</a></li>
                    <li><a class="nav-link " href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <br>

            <div class="section-title">
                <h2>Team</h2>
                <p>Meet our Team.</p>
                <hr>
            </div>
            <div class="row">
                <?php
                $select = "SELECT * FROM team";
                $run = mysqli_query($conn, $select);

                while ($row_user = mysqli_fetch_array($run)) {

                    $emp_no = $row_user['t_id'];
                    $name = $row_user['t_name'];
                    $designation = $row_user['t_designation'];
                    $intro = $row_user['t_intro'];
                    $email = $row_user['t_email'];
                    $user_image = $row_user['t_profile_image'];
                    $f_id = $row_user['t_facebook'];
                    $t_id = $row_user['t_twitter'];
                    $i_id = $row_user['t_instagram'];
                    $l_id = $row_user['t_linkedin'];
                ?>

                    <div class="col-lg-6">
                    <a href="info.php?team=<?php echo $emp_no; ?>"; style="text-decoration:none;">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="admin/team_profile_picture/<?php echo $user_image; ?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?php echo $name; ?></h4>
                                <span><?php echo $designation; ?></span>
                                <p><?php echo $intro; ?></p>
                                <div class="social">
                                    <a href="<?php echo $t_id; ?>"><i class="ri-twitter-fill"></i></a>
                                    <a href="<?php echo $f_id; ?>"><i class="ri-facebook-fill"></i></a>
                                    <a href="<?php echo $i_id; ?>"><i class="ri-instagram-fill"></i></a>
                                    <a href="<?php echo $i_id; ?>"> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                <?php  } ?>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
<!-- End Services Section -->
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