<!--Connection-->
<!--By Mervin Hernandez, edited by Ryan Shah-->
<?php 
require "db_connection.php";

$connect = OpenCon();
?>

<?php 
session_start();

#Checks
if($_SERVER["REQUEST_METHOD"] == "POST") {


  if(empty($_POST['Username']) || empty($_POST['Password'])) {

    echo '<script>alert("Both fields are required.")</script>';

  } 
  else {

    $Name = $_POST['Username'];
    $Password = $_POST['Password'];
  
    $query = "SELECT * FROM CustomerTable WHERE Username = '$Name' AND Password = '$Password'";
    $log = mysqli_query($connect, $query);
    
  }

  if(mysqli_num_rows($log) > 0) {

    $_SESSION['Username'] = $Name;
    echo '<script>alert("Welcome to GoFar Airlines!, you are now signed in!") </script>';
    header('refresh: 0; url=welcome.php');

  } else {
      echo '<script>alert("User or Password Incorrect") </script>';
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="designslogin.css" id = "">
  <link rel="stylesheet" href="welcomedesign.css">
</head>
<body class="loginback">
        <img src="airlinelogo.png" width="376.25" height="76.75">

        <nav>
        <ul>
        <li><a class="link "href="main.html">Home</a></li>
        <li><a class="link "href="aboutus.html">About Us</a></li>
        <li><a class="link "href="register.php">Register</a></li>
        </ul>
        </nav>

        <h2>Login</h2>

        <form method="POST">

        
          <label for="Username" style="color:white">Name:</label></br>
          <input type="text" name="Username" value= ""></br></br>
          
          <label for="Password" style="color:white">Password:</label></br>
          <input type="text" id="Password" name="Password" value=""></br></br>

          <input type="submit" name="Login" value="Login"><br><br>
          <a href="login.php">Not Registered?</a><br>
        </form>
    </body>
</html>

