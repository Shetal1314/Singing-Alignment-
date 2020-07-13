<?php
require("sqlconnection.php");
session_start();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$pass=$_POST['password'];

$query = "SELECT u.* FROM users as u WHERE u.email='$email' AND u.password='$pass'";


$res = mysqli_query($con, $query);
if(mysqli_num_rows($res)>0)

         {
		     $_SESSION['email']=$email;

    header('location:dashboard.php');
   }
   else
   {
    $message = "In correct password or user name";
      echo "<script type='text/javascript'>alert('$message');</script>";
	  header('location:dashboard.php');
   }
 }

?>
