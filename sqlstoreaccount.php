<!--Ryan Shah-->
<?php

$server = "localhost";
$username = "root";
$pass = "rootsql38";
$mydb = "accounts";


$myconn = new mysqli($server,$username,$pass,$mydb);


if($myconn){
    echo("Connection successful");
}
else{
    die("Your connection has failed " . mysqli_connect_error());
}


$Name = $_POST['GetName'];
$Age = $_POST['GetAge'];
$Password = $_POST['GetPassword'];

$code = "INSERT INTO CustomerTable(Username, Age, Password) VALUES('$Name','$Age','$Password')";

    if(mysqli_query($myconn,$code)){
        echo(" Records made");
        echo("<br>");
        header('refresh: 1; url=login.php');
    }
    else{
        echo("Error inserting records.");
        echo("<br>");
    }

?>