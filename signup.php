<?php
error_reporting(0);
	require('connect.php');
	$username=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$query="INSERT INTO login (username,password,email) values('".mysqli_real_escape_string($dbc,$username)."','".mysqli_real_escape_string($dbc,$pass)."','".mysqli_real_escape_string($dbc,$email)."')";
	$result = mysqli_query($dbc,$query);
	// header( "Location: index.php" );
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<strong>Signup</strong>
<form method="post" action="signup.php">
	<input type="text" name="user"><br><br>
	<input type="text" name="pass"><br><br>
	<input type="text" name="email"><br><br>
	<input type="submit" name="submit" value="signup">
</form>

</body>
</html>