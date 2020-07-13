<?php

require("sqlconnection.php");
         $id=$_GET['taskId'];
		 
		 $sel_query="SELECT Tasks FROM `experiment1` where `Tasks` like concat('%',(select taskName from `tasks` where `taskId`='$id'), '%')";
		 $res= mysqli_query($con, $sel_query);
		
		 if (mysqli_fetch_array($res)){
          echo "This task is associated with some experiment, hence it can not be deleted";
		 
		  header('location:dashboard.php');
		 }

		 else
		 {
			 $sql="DELETE FROM `tasks` WHERE `taskId`='$id'";
			 $res= mysqli_query($con, $sql);
             echo "task deleted";
			 header('location:dashboard.php');
		 }
		 
	  
 ?>