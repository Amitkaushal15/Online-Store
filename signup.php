<?php
session_start();
include 'includes/comman.php';
if(isset($_SESSION['email'])){
  header('location:product.php');
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Lifestyle Store | Sign up</title>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" \>
  <link rel="stylesheet" href="signup.css" \>
  <script src="https://kit.fontawesome.com/c939d0e917.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <?php include 'includes/header.php';?>
  </header>

  <section>
    <div class="title-box">
      <div class="title"> <span>SIGN UP</span></div>
    </div>
    
    <?php
        if(@$_GET['Error']==true)
        {
        ?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Error'] ?> </div>
        <?php
        }
        ?>
    <form class="sign-up" method="post" action="user_signup_script.php">
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="col">
          <input type="password" class="form-control" name="pswd" placeholder="Password">
        </div>
        <div class="col">
          <input type="tel" class="form-control" name="phone" placeholder="Contact">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="city" placeholder="City">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="add" placeholder="Adress">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </form>

  </section>

  <?php include 'includes/footer.php';?>
</body>

</html>