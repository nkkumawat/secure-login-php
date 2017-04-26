<?php 
session_start();
$http_referer=$_SERVER['HTTP_REFERER'];
echo $http_referer;

// header("Location:$http_referer");
header( "Location: name.php" );
session_destroy();

?>