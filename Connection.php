<?php
$host = "freesqldatabase.com";
$user = "sql45357777";
$password = "merapassword";
$db_name = "sql12595992";
$clean = mysqli_connect($host, $user, $password, $db_name,);
if (mysqli_connect_errno()) {
	die("Failed to Connect with Mysql" . mysqli_connect_error());
}
?>
