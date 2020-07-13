<?php
require('sqlconnection.php');

if (isset($_POST['add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpassword = $_POST['cpassword'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	
$q1= "select * from users where email='$email'";
$res = mysqli_query($con, $q1); 
if(mysqli_num_rows($res)>0)
{
	  $message = "This email address already exists, Please try again";
	 
      echo "<script type='text/javascript'>alert('$message');</script>";
	  header('location:RegisterDesign.php');
}
elseif($pass != $cpassword){
         $message = "Password Mismatch, Please try Again";
	 
      echo "<script type='text/javascript'>alert('$message');</script>";
	  header('location:RegisterDesign.php');
    }
else
{
$query = "INSERT INTO `users`( `name`, `email`, `password`, `gender`, `dob`) VALUES ('$name','$email','$pass','$gender','$dob')";


$res = mysqli_query($con,$query); 

echo $res ;

      $message = "user is is regsitered to the user list";
      echo "<script type='text/javascript'>alert('$message');</script>";
	  header('location:sign-in.php');
}
}
?>