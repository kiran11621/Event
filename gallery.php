<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPV Events - Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/lpv_logo.png" rel="icon">
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
                    <li><a class="nav-link active" href="gallery.php">Gallery</a></li>
                    <li><a class="nav-link" href="team.php">Team</a></li>
                    <li><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>Events Organized & Winners</h2>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <div class="container">
        <div class="row">
            <?php
            $select = "SELECT * FROM gallery";
            $run = mysqli_query($conn, $select);

            while ($row_user = mysqli_fetch_array($run)) {
                $image = $row_user['g_image'];
                $id = $row_user['g_id'];
            ?>

                <?php if ($id == 1) { ?>
                    <div class="col-4">
                        <img class="img-thumbnail rounded" src="admin/gallery/<?php echo $image; ?>" alt="image" style="height: 400px; width: 500px;">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>Submissions</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <?php
            $select = "SELECT * FROM gallery";
            $run = mysqli_query($conn, $select);

            while ($row_user = mysqli_fetch_array($run)) {
                $image = $row_user['g_image'];
                $id = $row_user['g_id'];
            ?>

                <?php if ($id == 2) { ?>
                    <div class="col-4">
                        <img class="img-thumbnail rounded" src="admin/gallery/<?php echo $image; ?>" alt="image" style="height: 400px; width: 500px;">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>Video Submissions</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <?php
            $select = "SELECT * FROM gallery";
            $run = mysqli_query($conn, $select);

            while ($row_user = mysqli_fetch_array($run)) {
                $image = $row_user['g_image'];
                $id = $row_user['g_id'];
            ?>

                <?php if ($id == 3) { ?>
                    <div class="col-4">
                        <video width="500px" height="400px" controls>
                            <source src="admin/gallery/<?php echo $image; ?>" type="video/mp4">
                        </video>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>Certificate</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <?php
            $select = "SELECT * FROM gallery";
            $run = mysqli_query($conn, $select);

            while ($row_user = mysqli_fetch_array($run)) {
                $image = $row_user['g_image'];
                $id = $row_user['g_id'];
            ?>

                <?php if ($id == 4) { ?>
                    <div class="col-4">
                        <img class="img-thumbnail rounded" src="admin/gallery/<?php echo $image; ?>" alt="image" style="height: 400px; width: 500px;">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

    <br><br><br><br>

    <footer>
            <div style="background-color: #37517e; bottom:0;">
                <div class="container footer-bottom clearfix text-bright">
                    <div class="copyrigh text-bright" style="color: white; text-align:center; padding: 5px;">
                    &copy; Copyright <strong><span> Harshkumar-14, Surajit-21, Kiran-50</span></strong>. All Rights Reserved
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