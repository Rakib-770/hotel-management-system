

<?php
	require_once("db_con.php");
	
	if(isset($_REQUEST["first_name"])&&isset($_REQUEST["last_name"])&&isset($_REQUEST["email"])&&isset($_REQUEST["In_date"])&&isset($_REQUEST["Out_date"])&&isset($_REQUEST["call "])&&isset($_REQUEST["room_price"])&&isset($_REQUEST["room_no"])&&isset($_REQUEST["total_amount"])){

    $first=$_REQUEST["first_name"]; 
	$last =$_REQUEST["last_name"]; 
	$mail     =$_REQUEST["email"]; 
	$I_date   =$_REQUEST["check_in"]; 
	$O_date  =$_REQUEST["check_out"];
	$a_call      =$_REQUEST["u_phone "];
	$r_price=$_REQUEST["room_price"];
	$r_no   =$_REQUEST["room_no"];	
  $t_amount=$_REQUEST["total_amount"];
  
  echo $first;
  echo $last;

$insertQuery="INSERT INTO register(first_name,	last_name,	email,	check_in,	check_out,	phone,	per_day_cost,	room_no	,total_amount) VALUES('$first','$last','$mail','$I_date','$O_date','$a_call','$r_price','$r_no','$t_amount')";

$runQuery= mysqli_query($connect,$insertQuery);

if($runQuery==true){
	echo "data inserted";
    }
	else{
		echo "data not inserted";
	}

 
}
 

?>