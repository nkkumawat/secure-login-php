<?php

	$otp=$_POST['otp'];
	session_start();
	$i=0;
	if($_SESSION['otp']==$otp)
	{
		$i=1;
		echo $i;

	}
	// session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="savenewpassword.php">
	<input type="pass" name="pass">
	<input type="submit" name="">
</form>


</body>
</html>