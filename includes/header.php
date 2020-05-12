
        <div class=" navbar navbar-inverse navbar-fixed-top">
            <div class="header">
                <div class="innerheader">
                    <div class="logo">
                        <a href="index.php">Lifestyle Store</a>
                    </div>
                    <?php
 if(isset($_SESSION['user_id']))
{
    ?>
      <div class=" header-link ">
        <a href="logout.php">Logout</a>
    </div>
    <div class=" header-link ">
        <i class="fas fa-user-cog"></i>
        <a href="setting.php">Settings</a>
    </div>
    <div class=" header-link ">
    <i class="fas fa-shopping-cart"></i>
        <a href="product.php">Cart</a>
    </div>

          
          <?php
}
else{
    ?>
    <div class=" header-link ">
        <i class="fas fa-user"></i>
        <a href="Login.php">Log In</a>
    </div>
    <div class=" header-link ">
    <i class="fas fa-user-plus"></i>
        <a href="signup.php">Sign Up</a>
    </div>
    <?php
}
?>
              </div>
            </div>
        </div>

