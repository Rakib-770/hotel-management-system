<?php
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,'hotel_management_system');
$query = "SELECT*FROM ajaxtable";
$query_run = mysqli_query($connect,$query);
echo"
<table width= 80%; bordar=2; cellpadding=5; cellspacing=5;>
<tr>
<th>ID</th>
<th>Checkin Date</th>
<th>CheckOut Date</th>
</tr>
";

if($query_run){
while($row = mysqli_fetch_array($query_run)){

  echo "
  <tr>
  <td>$row['id'];</td>
  <td>$row['checkin'];</td>
  <td>$row['checkout'];</td>  </tr>
  ";


}

}
else{
  echo "NO DATA Found "
}

echo "</table>";
?>
