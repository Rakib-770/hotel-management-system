<?php
$host="localhost";
$dbUser="root";
$dbPwd="";
//$dbName="admin";

$con=mysqli_connect($host,$dbUser,$dbPwd);

if(!$con)
{
	echo"<h1>ERROR establishing database connection!!!</h1>";
}
if(!mysqli_select_db($con,'admin'))
{
	echo 'database not selected';
}

$A_name=$_POST['Name'];

$A_email=$_POST['Email'];
$A_password=$_POST['Password'];

$sql = "INSERT INTO add_admin(name,email,password) VALUES ('$A_name','$A_email','$A_password')";
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else
{
	echo 'inserted';
}
header("refresh:2;url=add_member.html");
?>