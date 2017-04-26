<?php
	

	require('connect.php');
	$username=$_POST['user'];
	$pass=$_POST['pass'];
	$query="SELECT *FROM login WHERE username='$username'";
	$result = mysqli_query($dbc,$query);
	$ans=mysqli_fetch_assoc($result);


	if($username==$ans['username']&&$pass==$ans['password'])
	{
		echo "Welcome";
		session_start();
		$_SESSION['username']=$username;
		header( "Location: loggedin.php" );
	}
	else{

	echo "Password incorrect ";
	header( "Location: index.php" );
	session_start();
	$_SESSION['INC']="Password incorrect ";
}

?>

