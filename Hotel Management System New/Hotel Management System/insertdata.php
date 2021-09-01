<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'hotel_management_system');
$checkin = $_POST['checkin'];
$checkin = $_POST['checkout'];
$query = "INSERT INTO ajaxtable ('checkin','checkout') VALUES ('$checkin','$checkout')";
$query_run = mysqli_query($connection,$query);
if($query_run){
  echo "Data Inserted Succesfully";
}
else{echo " Data Not Inserted"};







 ?>
