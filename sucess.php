<?php
session_start();
require 'includes/comman.php';
if(!isset($_SESSION['email_id']))
{
    header('location:index.php');
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

       <section class="cart-section">
           <ul>
               <li>Display success message:Your order is confirmed. Thank you for shopping with us. <a href="#">Click Here</a> to Purchase any other item.</li>
               <li>
                   Click here in the success message will be a link to products.php page.
               </li>
           </ul>
       </section>

       <?php include 'includes/footer.php';?>
</body>

</html>