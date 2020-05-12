<?php
require 'includes/comman.php';
session_start();
if(empty($_SESSION))
{
        header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Lifestyle Store | Cart</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" \>
    <link rel="stylesheet" href="signup.css"\>
    <!--Font Awesome api-->
    <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<header>
       <?php
       include 'includes/header.php'; 
       ?>
    </header>
    <section>
        <div class="title-box">
            <div class="title"> <span>Change Password</span></div>
            </div>
            <form class="sign-up" method="post" action="change.php" >
                <div class="form-row">
                  <div class="col">
                    <input type="text" name="old_password" class="form-control" placeholder="Old Password">
                  </div>
                  <div class="col">
                    <input type="text" name="new_password" class="form-control" placeholder="New Password">
                  </div>
                  <div class="col">
                    <input type="password" name="retype_new_password" class="form-control" placeholder="Re-type Password">
                  </div>

                  <div class="col">
                    <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </div>
    
              </form>
             

            </section>

            <?php include 'includes/footer.php';?>
</body>

</html>