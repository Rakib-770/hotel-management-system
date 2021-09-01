

<?php
	require_once("db_con.php");
	
	if(isset($_REQUEST["roomNo"])&&isset($_REQUEST["roomType"])&&isset($_REQUEST["roomPrice"])){

    $roomNo   =$_REQUEST["roomNo"]; 
	$roomType =$_REQUEST["roomType"]; 
	$roomPrice=$_REQUEST["roomPrice"]; 
	
	
	

$insertQuery="INSERT INTO adding_room(roomNo,	roomType,	roomPrice) VALUES('$roomNo','$roomType','$roomPrice')";

$runQuery = mysqli_query($connect,$insertQuery);



if($runQuery){
	echo "data inserted";
    }
	else{
		echo "data not inserted";
	}

 
}
 

?>