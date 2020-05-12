<?php
require_once 'includes/comman.php';
session_start();
if(isset($_POST['login']))
{
   if(empty($_POST['Uname']) || empty($_POST['pswd']))
   {
        header("location:login.php?Empty=Please Fill Valid Email and password for login");
   }
   else
   {
       $myusername = mysqli_real_escape_string($con,$_POST['Uname']);
       $mypassword = mysqli_real_escape_string($con,$_POST['pswd']);
       $mypassword = md5 ($mypassword);
       //$query="SELECT id, name , pswd FROM users"; 
      $query ="SELECT * FROM users WHERE email='$myusername' && pswd = '$mypassword'";
      $data = mysqli_query($con,$query);
      $total = mysqli_num_rows($data);

      if($total == 0)
      {
        header("location:login.php?Invalid= there is no user with the email and password in the users table ");

         // header('location:product.php');
             
          //header("location:product.php"); */
      }
      else
      {
        $values = mysqli_fetch_array($data);
       // $_SESSION['email'] = $myusername;
    //    $_SESSION['user_id'] = $user_id;
       // echo $myusername;
        $_SESSION['user_id'] = $values[0];
        //echo $values[2];
        $_SESSION['email_id'] = $values[2];
        header('location:product.php');
      }
    }  
}
else
{
    echo 'Not Working Now';
}
?>