<?php
require('sqlconnection.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
	

    $slquery = "SELECT email FROM register WHERE email = '$email'";
    $selectresult = mysqli_query($con,$slquery);
    if(mysqli_num_rows($selectresult)>0)
    {
         header("location:registertest.php?msg = email already exists");
    }
    elseif($password != $cpassword){
         header("location:registertest.php?msg = password Mismatch");
    }
else {
    $query = "INSERT INTO `project`.`researcher` (`user name`, `Password`, `confirm password`, `email`) VALUES (' $username', ' $password', '$cpassword ',   '$email')";
    $result = mysqli_query($con,$query);
    
        header("location:registertest.php?msg = user registered");
  }
 }
?>