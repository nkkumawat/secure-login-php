<?php
	require('connect.php');
	error_reporting(0);
	$year=$_POST['year'];
	$query="SELECT *FROM login WHERE year='$year'";
	$result = mysqli_query($dbc,$query);
	$ans=mysqli_fetch_assoc($result);


	while($ans=mysqli_fetch_assoc($result))
	{
		
		echo $ans['username']."<br>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

select year
<form method="post">
	<select name="year">
		<option>2007</option>
		<option>2008</option>
		<input type="submit" name="sub" value="search">
	</select>
</form>
</body>
</html>