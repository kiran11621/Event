<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login Page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <?php
        include 'conn.php';
    ?>
</head>

<body>
    <div class="container">
        <br>

        <div>
            <p>Login form style 1</p>
            <div class="card">
                <article class="card-body">
                    <a href="" class="float-right btn btn-outline-primary">Sign up</a>
                    <h4 class="card-title mb-4 mt-1">Sign in</h4>
                    <form action="admin_login.php" method="POST">
                        <div class="form-group">
                            <label>Your email</label>
                            <input name="email" class="form-control" placeholder="Email" type="">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Your password</label>
                            <input name="password" class="form-control" placeholder="******" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <input name="login-btn" type="submit" class="btn btn-primary btn-block" value="Login" />
                        </div> <!-- form-group// -->
                    </form>
                </article>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['login-btn'])) {
        $email1 = $_POST['email'];
        $password1 = $_POST['password'];

        $select = "SELECT * FROM admin_login WHERE email='$email1'";
        $run = mysqli_query($conn, $select);
        $row_user = mysqli_fetch_array($run);

        if(empty($row_user['email'])){
            $db_email = NULL;
            $db_password = NULL;
        } else {
        $db_email = $row_user['email'];
        $db_password = $row_user['password'];
        }

        echo $db_email;
        echo $db_password;

        if ($email1 == $db_email && $password1 == $db_password) {
            echo "<script>window.open('admin_events.php','_self')</script>";
        } else {
            echo "WRONG";
        }
    }
    ?>
</body>

</html>