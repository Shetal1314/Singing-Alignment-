<?php

require("sqlconnection.php");
         $id=$_GET['experimentID'];
		 
		 $sql="DELETE FROM `experiment1` WHERE `experimentID`='$id'";
         $res= mysqli_query($con, $sql);
		 if (mysqli_fetch_array($res)){
      $message = "This task is deleted from the task list";
      echo "<script type='text/javascript'>alert('$message');</script>";
		 }
		  header('location:dashboard.php');
	  
 ?>