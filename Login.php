
<?php
session_start();
include 'includes/comman.php';
if(isset($_SESSION['email_id'])){
  header('location:product.php');
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Lifestyle Store | Login</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css" \>
    <link rel="stylesheet" href="style.css" \>

    <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class=" navbar navbar-inverse navbar-fixed-top">
            <div class="header">
                <div class="innerheader">
                    <div class="logo">
                        <a href="index.php">Lifestyle Store</a>
                    </div>
                    <div class=" header-link ">
                        <a href="signup.php">Sign up</a></div>

                </div>
            </div>
        </div>
    </header>

    <div class="login-box">
        <?php
        if(@$_GET['Empty']==true)
        {
        ?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?> </div>
        <?php
        }
        ?>

    <?php
        if(@$_GET['Invalid']==true)
        {
        ?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?> </div>
        <?php
        }
        ?>

        <form method="post" action="login_submit.php">
            <h1 class="title">Login To make A Purchase</h1>
            <div class="input from-group">
                <i class="fas fa-user"></i>
                <input type="email" name="Uname" class="form-control" id="inputEmil4S" placeholder="Username/Email">
            </div>

            <div class="input from-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="pswd" class="form-control" id="pass-input" placeholder="Password">
            </div>

            <button type="submit" name="login" class="btn btn-primary btn-sucess">Sign in</button>
        </form>
        <div class="panel-footer input">
            <h1>"Don't have an Account?"</h1>
            <button type="button" class="btn btn-primary btn-register"><a href="signup.php"> Register Here</a></button>
        </div>
    </div>
 
    <?php include 'includes/footer.php';?>


</body>

</html>