<?php
require('connect.php');
$username=$_POST['user'];
$query="SELECT*FROM login WHERE username ='$username' ";
$result = mysqli_query($dbc,$query);
	$ans=mysqli_fetch_assoc($result);


// send
$to=$ans['email'];
$subject="password forgot";
$body=rand(2000,9900);
$headers='FROM: admin@nitkkralumni.com';
mail($to,$subject,$body,$headers);
echo $body;
session_start();
$_SESSION['otp']=$body;
$_SESSION['user']=$username;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="matchotp.php">
		<input type="text" name="otp">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>