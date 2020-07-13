<?php
require("sqlconnection.php");
session_start();

$email=$_SESSION['email'];

echo 'Welcome user:' . $email. 'to the dashboard:';


?>
