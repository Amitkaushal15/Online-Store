<?php
require_once 'includes/comman.php';
session_start();
?>
<?php
if(empty($_SESSION))
{
        header('location:login.php');
}
else{
    $email = @$_SESSION['email'];
    $old_password = md5(@$_POST['old_password']);
    $query="SELECT pswd FROM users WHERE email='$email'";
    $quesry_get = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($quesry_get);
    $oldpswd = $row['pswd'];

    if($old_password == $oldpswd)
    {
      echo "Password is right";
    }
}
?>