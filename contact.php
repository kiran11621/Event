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

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <br><br>
            <div class="section-title">
                <h2>Contact</h2>
                <p>Thank You for Contacting us we will get to you as soon as possible.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>401/21, Babarpur Main Rd, Babarpur Village, Shahdara, New Delhi-110032</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@lpvweltweit.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 770-1860-205</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.041201317297!2d77.27945319999999!3d28.688414100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd53aa59bb71%3A0xb32fcd9372d6b634!2sLPV%20WELTWEIT%20SOLUTIONS%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1599052842504!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <div class="info">
                    <form action="contact.php" method="post" class="php">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="c_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Mobile</label>
                            <input type="text" class="form-control" name="c_mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="c_subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="c_message" rows="10" required></textarea>
                        </div>
                        <br><BR>
                        <input type="submit" name="insert_btn" class="btn btn-primary" />
                    </form>
                </div>

                    <?php

                    if (isset($_POST["insert_btn"])) {
                        $name = $_POST["c_name"];
                        $mobile = $_POST["c_mobile"];
                        $email = $_POST["c_email"];
                        $subject = $_POST["c_subject"];
                        $message = $_POST["c_message"];

                        $insert = "INSERT INTO contact(c_name, c_email, c_mobile, c_subject, c_message) VALUES('$name', '$email', '$mobile', '$subject', '$message')";

                        $run_insert = mysqli_query($conn, $insert);

                        if ($run_insert === True) {
                            $mess = "We will get to you soon!";
                        } else {
                            $mess = "Error has been generated.";
                        }

                        unset($_POST["insert_btn"]);
                    }
                    ?>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->
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