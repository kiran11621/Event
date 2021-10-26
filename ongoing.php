<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPV Events - Ongoing Events</title>
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
    <br><BR><Br><BR><Br>
    <?php
    $select = "SELECT * FROM events";
    $run = mysqli_query($conn, $select);

    while ($row_event = mysqli_fetch_array($run)) {
        date_default_timezone_set('Asia/Kolkata');
        $start = date_create($row_event['e_startreg']);
        $start = (date_format($start, 'U'));
        $start = (int)($start);

        $end_reg = date_create($row_event['e_endreg']);
        $end_reg = (date_format($end_reg, 'U'));
        $end_reg = (int)($end_reg);

        $start_sub = date_create($row_event['e_startsub']);
        $start_sub = (date_format($start_sub, 'U'));
        $start_sub = (int)($start_sub);

        $end = date_create($row_event['e_endsub']);
        $end = date_format($end, 'U');
        $end = (int)($end);

        $current = date('U');
        $current = (int)($current);

        if (($start <= $current) && ($current <= $end)) {
            $e_id = $row_event['e_id'];
            $e_name = $row_event['e_name'];
            $e_startreg = $row_event['e_startreg'];
            $e_endreg = $row_event['e_endreg'];
            $e_startsub = $row_event['e_startsub'];
            $e_endsub = $row_event['e_endsub'];
            $e_poster = $row_event['e_poster'];
            $e_price = $row_event['e_price'];
            $e_paymentlink = $row_event['e_paymentlink'];
            $endregdate = date('d - m - Y', strtotime($e_endreg));
            $endregtime = date('H : i : s', strtotime($e_endreg));
            $endsubdate = date('d - m - Y', strtotime($e_endsub));
            $endsubtime = date('H : i : s', strtotime($e_endsub));

    ?>
            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">

                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="admin/event_poster/<?php echo $e_poster; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">

                            <h2 class="fst-italic">
                                <?php echo $e_name; ?>
                                <hr>
                            </h2>

                            <div class="skills-content">
                                <div class="row">
                                    <?php if (($start <= $current) && ($current <= $end_reg)) { ?>
                                        <div class="col-sm-6">
                                            <div class="card border-warning mb-3 text-center bg-warning" style="max-width: 18rem;">
                                                <div class="card-header bg-transparent">
                                                    <h5><b>Last Date for Registration</b></h5>
                                                </div>
                                                <div class="card-body text-dark">
                                                    <h5 class="card-title"><?php echo $endregdate; ?></h5>
                                                    <h5 class="card-title"><?php echo $endregtime; ?></h5>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <a href="registration.php?reg=<?php echo $e_id; ?>"><button type="button" class="btn btn-sm text-light" style="background-color: #6c757d;">Register Now!</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (($start_sub <= $current) && ($current <= $end)) { ?>
                                        <div class="col-sm-6">
                                            <div class="card border-info mb-3 text-center bg-info" style="max-width: 18rem;">
                                                <div class="card-header bg-transparent">
                                                    <h5><b>Last Date for Submission</b></h5>
                                                </div>
                                                <div class="card-body text-dark">
                                                    <h5 class="card-title"><?php echo $endsubdate; ?></h5>
                                                    <h5 class="card-title"><?php echo $endsubtime; ?></h5>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <a href="submission.php?sub=<?php echo $e_id; ?>"><button type="button" class="btn btn-sm text-light" style="background-color: #6c757d;">Submit Work</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <p class="fst-italic">
                                <hr>
                            </p>

                        </div>
                    </div>

                </div>
            </section>
    <?php }
    } ?>
    <!-- End Skills Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Contact</h3>
                    <p> Please fill out the form below to inquire about our work in LPV Events.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="contact.php">Contact Us</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->

    <!-- End #main -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- End Services Section -->
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