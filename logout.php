<!----By Mervin, edited by Ryan-->
<?php 
$server = "localhost";
$username = "root";
$pass = "rootsql38";
$mydb = "accounts";


$myconn = new mysqli($server,$username,$pass,$mydb);

?>

<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" href="desingslogout.css">
</head>
<body class="logoutdesign">

<?php

echo "Logging out user: '" , $_SESSION['Username'] , " Logged out!";

if(session_unset() || session_destroy()){
	header('refresh: 2; url=main.html');
} else {
echo "Unable to redirect";
}

?>

</body>
</html>