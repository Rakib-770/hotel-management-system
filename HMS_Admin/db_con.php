<?php
$host="localhost";
$dbUser="rafat";
$dbPwd="1110210850";
$dbName="booking";

$connect=mysqli_connect($host,$dbUser,$dbPwd,$dbName);

if($connect==false)
{
	echo"<h1>ERROR establishing database connection!!!</h1>";
}
?>