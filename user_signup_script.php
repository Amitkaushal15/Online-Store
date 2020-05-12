<?php 
$con = mysqli_connect("localhost","root","","store")
or die(mysqli_error($con));
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$pswd = mysqli_real_escape_string($con, $_POST['pswd']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$add = mysqli_real_escape_string($con, $_POST['add']);
$pswd = md5($pswd);
$query ="SELECT * FROM users WHERE email='$email'";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
if($total > 0)
{
    header("location:signup.php?Error= Email is Already exsist ");
}
else
{
$user_signup_query ="insert into users(name, email, pswd, contact, city, address)
values ('$name','$email','$pswd','$phone','$city','$add')";
$user_signup_submit = mysqli_query($con, $user_signup_query)
or die(mysqli_error($con));
$idvar = mysqli_insert_id($con);
//echo "User Successfully inserted";
$_SESSION['user_id'] = $idvar;
header('location:login.php');
//$_SESSION[''] = $email;
//$_SESSION['id'] = mysqli_insert_id($con);
}
?>