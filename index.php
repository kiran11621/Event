<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPV Events - Home</title>
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
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">LPV Events</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="index.php">Home</a></li>
                    <li><a class="nav-link" href="about.php">About</a></li>
                    <li><a class="getstarted" href="ongoing.php">Ongoing Events</a></li>
                    <li><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li><a class="nav-link" href="team.php">Team</a></li>
                    <li><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>LPV Events</h1>
                    <h2>LPV Weltweit Academy invites you to showcase your kid's artist inside them to World.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="ongoing.php" class="btn-get-started scrollto">Ongoing Events</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg">
                        <p>
                            LPV Weltweit Solutions Private Limited is the group company of LPV Weltweit Group and is
                            committed to offering value added services to your HR, Legal, Accounts, Finance, and Company
                            Secretarial needs, including need based processes, systems, and performance
                            enhancement’s so that business can achieve the pre-defined objectives and targets. </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Our expertise services in business strategy, Legal
                                and Compliance management, various options to start an new business, Manpower and
                                management consulting enable us to bring a unique approach
                                to business solutions.</li>
                            <li><i class="ri-check-double-line"></i> Our strategy is understanding company needs and
                                providing the best suitable action out of the available options.</li>
                            <li><i class="ri-check-double-line"></i> For the Human Capital we provide the real resource
                                rather than just resume.</li>
                            <li><i class="ri-check-double-line"></i> As a Corporate Consultants and Advisors, we ensure
                                that we provide appropriate resolution to the client within the time frame with the best
                                quality Services.</li>
                        </ul>
                        <a href="about.php" class="btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
        <div class="section-title">
            <h2>Ongoing Events</h2>
        </div>

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

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>LPV Weltweit Solutions Private Limited is the group company of LPV Weltweit Group and is committed to offering value
                        added services to your HR, Legal, Accounts, Finance, and Company Secretarial needs, including need based processes,
                        systems, and performance enhancement’s so that business can achieve the pre-defined objectives and targets.
                    </p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspici</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
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