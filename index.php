<?php
require 'includes/comman.php';
session_start();
if(isset($_SESSION['email_id'])){
    header('location:product.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Lifestyle Store</title>

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

    <div class="content">
        <div id="banner-image">
            <div class="inner-bannerimage container">
                <center>
                    <div id="banner_content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands </p>
                        <a href="product.php" class="btn btn-danger btn-primary btn-lg active">Shop Now</a>
                </center>
            </div>
        </div>
    </div>
    </div>
         <div class="container">
         <div class="jumbotron">
            <h1>Welcome to Our Lifestyle Store!</h1>
            <p>WE have the best Cameras, watches and shirts for you. No need to hunt around. We have all in one place.</p>
            </div>
         </div>
    <div class=" container">
        <div class="items">
            <a href="#">
                <img src="image/camera.jpg" alt="" class="thumbnail">
                <div class="caption">
                    <h2>Cameras</h2>
                    <p>Choose among the best available in the world.</p>
                </div>
            </a>
        </div>
        <div class="items">
            <a href="#"> <img src="image/watch.jpg" alt="" class="thumbnail">
                <div class="caption">
                    <h2>Watch</h2>
                    <p>Original watches from the best brands.</p>
                </div>
            </a>
        </div>

        <div class="items">
            <a href="#"> <img src="image/shirt.jpg" alt="" class="thumbnail">
                <div class="caption">
                    <h2>Shirt</h2>
                    <p>Our exquisite collection of shirts.</p>
                </div>
            </a>
        </div>
    </div>

    <?php include 'includes/footer.php';?>

</body>

</html>