
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
<link href="lpv_logo.png" rel="icon">
    <title>Admin - Update Event Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br><br>
    <h2 style="margin-left: 150px;"> Update Events Details </h2>
    <div class="container">

        <?php 
        include("conn.php");


        if(isset($_GET['update'])){
            $edit_id = $_GET['update'];
        }


        $select ="select * from events where e_id='$edit_id'";
        $run=mysqli_query($conn,$select);


        

        $row_user = mysqli_fetch_array($run);

            $e_name = $row_user["e_name"];
            $e_startreg = $row_user["e_startreg"];
            $e_endreg = $row_user["e_endreg"];
            $e_startsub = $row_user["e_startsub"];
            $e_endsub = $row_user["e_endsub"];
            $e_poster = $row_user["e_poster"];
            $e_price = $row_user["e_price"];
            $e_paymentlink = $row_user["e_paymentlink"];

    
            ?>

        <br><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="event_name">Event Name:</label>
                        <input type="text" value="<?php echo $e_name; ?>" class="form-control" placeholder="Event Name" name="e_name" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdaytime">Registration Start DateTime:</label>
                        <input type="datetime-local" value="<?php echo $e_startreg; ?>" id="birthdaytime" name="e_startreg" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdaytime">Registration End DateTime:</label>
                        <input type="datetime-local" value="<?php echo $e_endreg; ?>" id="birthdaytime" name="e_endreg" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdaytime">Submission Start DateTime:</label>
                        <input type="datetime-local" value="<?php echo $e_startsub; ?>" id="birthdaytime" name="e_startsub" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdaytime">Submission End DateTime:</label>
                        <input type="datetime-local" value="<?php echo $e_endsub; ?>" id="birthdaytime" name="e_endsub" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Event Poster:</label>
                        <input type="file" value="<?php echo $e_poster; ?>" class="form-control" name="e_poster" required>
                    </div>
                    <div class="form-group">
                        <label for="user_details">Event Price:</label>
                        <input type="text" value="<?php echo $e_price; ?>" class="form-control" placeholder="Cost" name="e_price" required>
                    </div>
                    <div class="form-group">
                        <label for="user_details">Event Payment Link:</label>
                        <input type="text" value="<?php echo $e_paymentlink; ?>" class="form-control" placeholder="Cost" name="e_paymentlink" required>
                    </div>
                    <input type="submit" name="insert_btn" class="btn btn-primary" />
                    <br>
                    <br>
                    <button class="btn btn-primary"  onclick="document.location='view_events.php'">View Events</button>
                </form>
            <?php

        if (isset($_POST["insert_btn"])) {
             $e_name = $_POST["e_name"];
             $e_startreg = $_POST["e_startreg"];
             $e_endreg = $_POST["e_endreg"];
             $e_startsub = $_POST["e_startsub"];
             $e_endsub = $_POST["e_endsub"];
             $image1 = $_FILES["e_poster"]['name'];
             $tmp_name1 = $_FILES["e_poster"]['tmp_name'];
             $e_price = $_POST["e_price"];
             $e_paymentlink = $_POST["e_paymentlink"];

            if(empty($image1)){
                $image1=$image;
            }

            $update = "update events set e_name='$e_name',e_startreg='$e_startreg',e_endreg='$e_endreg',e_startsub='$e_startsub',e_endsub='$e_endsub',e_poster='$image1',e_price='$e_price',e_paymentlink='$e_paymentlink' where e_id='$edit_id'";
            
            $run_update = mysqli_query($conn, $update);
            
        
            if ($run_update === True) {
                move_uploaded_file($tmp_name1, "event_poster/$image1");
                header("Location: view_events.php");
            } else {
            }

            unset($_POST["insert_btn"]);
        }
        
        
        ?>

        

    </div>

</body>

</html>