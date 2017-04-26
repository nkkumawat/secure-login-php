<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="index.php" style="position: absolute; top: 20%; left: 40%; width: 30%; height: 40%; ">
<strong> <?php session_start();  echo "hello <b>" .$_SESSION['username'] ?></strong><br>
<!-- 	<input type="text" name="user" value=""><br><br><br>
	<input type="password" name="pass"><br><br><br> -->
	<input type="submit" name="login" value="logout">
</form>

</body>
</html>