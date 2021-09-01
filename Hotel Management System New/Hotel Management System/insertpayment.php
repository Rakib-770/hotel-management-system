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
        if(isset($_POST['btnpay'])){
          if(!empty($_POST['u_py']) && !empty($_POST['u_rm']) && !empty($_POST['u_cardn']) && !empty($_POST['u_cardnumb']) && !empty($_POST['u_bkash']) && !empty($_POST['u_dop'])){
            $method = $_POST['u_py'];
            $room = $_POST['u_rm'];
            $name = $_POST['u_cardn'];
            $numb = $_POST['u_cardnumb'];
            $bkash= $_POST['u_bkash'];
            $date = $_POST['u_dop'];

            $query = "insert into payment(method,room,name,number,code,date) values('$method' , '$room' , '$name' , '$numb' , '$bkash' , '$date')";
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
