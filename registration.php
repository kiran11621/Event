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

    // getting id of event
    if (isset($_GET['reg'])) {
        $e_id = $_GET['reg'];

        $sql = "select e_paymentlink, e_price from events where e_id=$e_id";
        $result = mysqli_query($conn, $sql);

        $row = $result->fetch_assoc();
        $e_paymentlink = $row['e_paymentlink'];
        $e_price = $row['e_price'];
    }

    if (isset($_POST["insert_btn"])) {
        $u_name = strtolower($_POST["u_name"]);
        $u_email = strtolower($_POST["u_email"]);
        $u_mobile = $_POST["u_mobile"];
        $u_std = $_POST["u_std"];
        $u_school = $_POST["u_school"];
        $u_city = $_POST["u_city"];
        $image = $_FILES["u_receiptno"]['name'];
        $tmp_name = $_FILES["u_receiptno"]['tmp_name'];

        $insert = "INSERT INTO registration_and_submission(e_id, u_name, u_email, u_mobile, u_std, u_school, u_city, u_receiptno) 
        VALUES('$e_id', '$u_name', '$u_email', '$u_mobile', '$u_std', '$u_school', '$u_city', '$image')";

        $run_insert = mysqli_query($conn, $insert);

        if ($run_insert === True) {
            echo "Data has inserted";
            move_uploaded_file($tmp_name, "admin/receipt/$image");
        } else {
            echo "try agian" . $conn->error;
        }

        unset($_POST["insert_btn"]);
    }

    ?>

    <div class="container">
        <br><Br><br><BR>

        <div class="section-title">
            <h2>Registration</h2>
        </div>
        <div>
            <div class="info">
                <form action="registration.php?reg=<?php echo $e_id; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="event_name">Student Name:</label>
                        <input type="text" class="form-control" placeholder="Event Name" name="u_name" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="event_starttime">Email ID:</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="u_email" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="event_endtime">Mobile Number:</label>
                        <input type="integer" class="form-control" placeholder="Enter password" name="u_mobile" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="event_date">Class:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="u_std" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="event_weekday">School Name:</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="u_school" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="event_month">City:</label>
                        <input type="text" class="form-control" placeholder="Enter email" name="u_city" required>
                    </div>
                    <br>
                    <?php if ($e_price == 'Free' || $e_price == 'FREE' || $e_price == 'free') {
                        echo '<br>Free Registration</b>';
                    } else { ?>
                        <div class="razorpay-embed-btn" data-url="<?php echo $e_paymentlink; ?>" data-text="No Registration Fee" data-color="#528FF0" data-size="large">
                            <script>
                                (function() {
                                    var d = document;
                                    var x = !d.getElementById('razorpay-embed-btn-js')
                                    if (x) {
                                        var s = d.createElement('script');
                                        s.defer = !0;
                                        s.id = 'razorpay-embed-btn-js';
                                        s.src = 'https://cdn.razorpay.com/static/embed_btn/bundle.js';
                                        d.body.appendChild(s);
                                    } else {
                                        var rzp = window['_rzp_'];
                                        rzp && rzp.init && rzp.init()
                                    }
                                })();
                            </script>

                            <div class="form-group">
                                <label for="email">Payment Screenshot:</label>
                                <input type="file" class="form-control" name="u_receiptno" required>
                            </div>
                        <?php } ?>
                        <br><br>
                        <input type="submit" name="insert_btn" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
    <br><Br><br>
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