<?php
session_start();
	$username=$_SESSION['username'];
	$password=$_POST['pass'];
	require('connect.php');
	$query="UPDATE login SET 'password'='$password' WHERE 'username'='$username' ";
	$result = mysqli_query($dbc,$query);
	echo $username."\n".$password;

?>