<?php
    session_start ();
    require 'includes/comman.php';
    $user = $_SESSION['email_id'];
    if ($user)
    {
    //user is logged in
    if (@$_POST['submit'])
    {
    //check fields
    $oldpassword =md5(@$_POST['old_password']);
    $newpassword = md5(@$_POST['new_password']);
    $repeatnewpassword =md5(@$_POST['retype_new_password']);
    //check password against db
    //connect to db
    $queryget = mysql_query ("SELECT pswd FROM users WHERE email='$user'")or die ("Query didnt work");
    $row = mysql_fetch_assoc($queryget);
    $oldpassworddb = $row ['pswd'];
    //check passwords
    if($oldpassword==$oldpassworddb)
    {
    //check the new password
    if ($newpassword==$repeatnewpassword)
    {
    //succes
    //change password in db
    $querychange = mysql_query ("
    UPTADE users SET pswd='$newpassword' WHERE email='$user'
    ");
    session_destroy();
    die ("Your password has been changed.<a href='setting.php'>Return </a>to the main page");
    }
    else 
     die ("New password dont match!");
    }
    else 
     die("Old password doesnt match!");
    }
    else
    {
         header('location:setting.php');
    }
    }
    else
       die ("You must be logged in to change your password");
    ?>