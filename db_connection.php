<!---By Mervin Hernandez edited by Ryan Shah-->
<?php
function OpenCon() {

$host="localhost";
$user="root";
$password="rootsql38";
$database="accounts";

$connect=mysqli_connect($host,$user,$password,$database)or die("Connection Failed: %s\n" . $connect -> error);

return $connect;

}

function CloseCon($connect) {
	$connect -> close();
}



?>