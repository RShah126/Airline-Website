<!--By Mervin edited by Ryan-->
<?php 
$server = "localhost";
$username = "root";
$pass = "rootsql38";
$mydb = "accounts";


$myconn = new mysqli($server,$username,$pass,$mydb);

?>

<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel = "stylesheet" href = "welcomedesign.css">
</head>
</head>

<body class = "logoutdesign">

<img src="ticket/logo_transparent.png" width="376.25" height="76.75">

<nav>
<ul>
	<li><a href="Logout.php">Logout</a></li>
	<li><a href="Tickets.php">Flights</a></li> 
</ul>
<h1> <?php echo "Hello! " , $_SESSION['Username']. " ". "please book a flight!" ?>  </h1>

</nav>
</body>

</html>
