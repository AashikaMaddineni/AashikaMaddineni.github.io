<?php
 
 session_start();
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="loginregister";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{

$myusername = $_POST['email'];
$mypassword = $_POST['password'];
$captcha = $_POST['captcha1'];
$mycaptcha = $_POST['captcha'];

if($captcha == $mycaptcha){
$sql="SELECT * FROM `user` where  `email`='$myusername' and `password`='$mypassword'";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num==1){
     header('location:welcome_user.php');
}
}

else{
echo "Invalid captcha";
}
}


?>

