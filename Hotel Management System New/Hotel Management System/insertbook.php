<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Royel Hotel | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Royel</span> Hotel</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="">Book Stay</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Register</a></li>
            <li><a href="">Sign in</a></li>

          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
<div class="container">
  <img src="simg/p.jpg" alt="Notebook" style="width:100%;" >
    <div class="content">
      <form>


<tbody>




<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management_system";

$con = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['btnsub'])){
  if(!empty($_POST['u_rm']) && !empty($_POST['u_bd']) && !empty($_POST['u_cout']) && !empty($_POST['u_numb']) && !empty($_POST['u_email']) && !empty($_POST['u_payment'])){
    $room = $_POST['u_rm'];
    $book = $_POST['u_bd'];
    $checkout = $_POST['u_cout'];
    $phone = $_POST['u_numb'];
    $email= $_POST['u_email'];
    $pay = $_POST['u_payment'];

    $query = "insert into booktable(room,bookdate,checkout,phone,email,pay) values('$room' , '$book' , '$checkout' , '$phone' , '$email' , '$pay')";
$run = mysqli_query($con,$query);

if($run){
  echo "Submitted succesfully";
}else{echo "Not Submitted";}

  }
  else{echo "ALL FIELDS REQUIRED";}
}

?>


<tr><td align="right">
  <a href="index.php" target="_top"><span style="color: white;font-size: larger;font-weight: bold;">Back</a></td>  </td></tr>
</tbody>
</form>
</div>
</div>
</section>


<footer>
  <p>Royal Hotel, Copyright &copy; 2020</p>
</footer>

</body>
</html>
