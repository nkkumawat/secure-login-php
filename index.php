
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="login.php" style="position: absolute; top: 20%; left: 40%; width: 30%; height: 40%; ">
<?php 
error_reporting(0);
 session_start();
 echo $_SESSION['INC'];
 session_destroy();
 ?><br>
<strong>Login</strong><br>
	<input type="text" name="user"><br><br><br>
	<input type="password" name="pass"><br><br><br>
	<input type="submit" name="login" value="login">
	<a href="mail.php">Forgot Password</a>
	<br><button ><a href="signup.php">Signup</a></button>
</form>


</body>
</html>