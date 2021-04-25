<?php
 
session_start();
header('location:index.html');
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

$myusername = $_POST['username'];
$mypassword = $_POST['pswd'];
$myemail = $_POST['email'];
$mydob = $_POST['dob'];
$fn=$_FILES['file']['name'];
$tm=$_FILES['file']['tmp_name'];
move_uploaded_file($tm, "profile_img/" .$fn);


$sql="SELECT * FROM `user` where  `email`='$myusername'";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num==1){
    echo "User already found";
}
else{
$sql1="INSERT INTO `user`(`username`, `password`, `email`, `dob`, `img`) VALUES ('$myusername', '$mypassword','$myemail', '$mydob', '$fn')";
mysqli_query($conn, $sql1);
echo "Registration Succesful";
}

?>

