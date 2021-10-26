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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <title>Admin - View Submission</title>
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
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
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
                <h2>View Registrations & Submissions</h2>
                <hr>
                <br>

                <!-- add code here -->
                <table class="table table-bordered">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Event ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Class of Studying</th>
        <th>School</th>
        <th>City</th>
        <th>Receipt Screenshot</th>
        <th>Work Submission</th>
      </tr>
    </thead>
   <tbody>

    <?php
                                if(isset($_GET['view'])){
                                    $view_id = $_GET['view'];
                                }

                                $select = "SELECT * FROM `registration_and_submission` where e_id='$view_id'";
                                $run = mysqli_query($conn, $select);

                                while ($row_user = mysqli_fetch_array($run)) {

                                    $u_id = $row_user['u_id'];
                                    $e_id = $row_user['e_id'];
                                    $u_name = $row_user['u_name'];
                                    $u_email = $row_user['u_email'];
                                    $u_mobile = $row_user['u_mobile'];
                                    $u_std = $row_user['u_std'];
                                    $u_school = $row_user['u_school'];
                                    $u_city = $row_user['u_city'];
                                    $u_receiptno = $row_user['u_receiptno'];
                                    $u_submission = $row_user['u_submission'];
                                ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo $u_id; ?></td>
                                        <td style="text-align:center"><?php echo $e_id; ?></td>
                                        <td style="text-align:center"><?php echo $u_name; ?></td>
                                        <td style="text-align:center"><?php echo $u_email; ?></td>
                                        <td style="text-align:center"><?php echo $u_mobile; ?></td>
                                        <td style="text-align:center"><?php echo $u_std; ?></td>
                                        <td style="text-align:center"><?php echo $u_school; ?></td>
                                        <td style="text-align:center"><?php echo $u_city; ?></td>
                                        <td style="text-align:center"><a href="receipt/<?php echo $u_receiptno; ?>"><img src="receipt/<?php echo $u_receiptno; ?>" height="50px" ;></a></td>
                                        <?php                 
                                        $file ="submission/".$u_submission;       
                                        $mime = mime_content_type($file); ?>
                                        <?php if(strstr($mime, "video/")){ ?>
                                            <td style="text-align:center"><a href="submission/<?php echo $u_submission; ?>"> <video width="150px" height="150px" controls>
                            <source src="submission<?php echo $u_image; ?>" type="video/mp4">
                        </video></a></td>
                                       <?php }else if(strstr($mime, "image/")){ ?>
                                           <td style="text-align:center"><a href="submission/<?php echo $u_submission; ?>"><img src="submission/<?php echo $u_submission; ?>" height="50px" alt="Not Submitted" ;></a></td>
                                        <?php } ?>
                                       
                                    </tr>
                                <?php } ?>
      
    </tbody>
  </table>
            </div>

        </div>
    </div>
</body>

</html>