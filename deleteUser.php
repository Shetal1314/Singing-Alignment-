<?php

require("sqlconnection.php");
         $id=$_GET['userID'];
		 
		 
		 $sel_query="SELECT `user` FROM `experiment1` where `user`=(select name from `users` where `userID`='$id')";
		 $res= mysqli_query($con, $sel_query);
		
		 if (mysqli_fetch_array($res)){
      
		 $message = "user associated with some experiment, cannot delete ";
      echo "<script type='text/javascript'>alert('$message');</script>";
	  header('location:dashboard.php');
		
		 }
		 else
		 {
			$sql="DELETE FROM `users` WHERE `userID`='$id'";
            $res= mysqli_query($con, $sql);
			header('location:dashboard.php');
		 }
		 
	  
 ?>