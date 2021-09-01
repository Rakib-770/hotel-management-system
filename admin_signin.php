<?php

  require "includes/db_connect.inc.php";

  session_start();

  $userName = $uPass = $uPassInDB = "";
  $uNameErr = $uPassErr = "";

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(empty($_POST['username'])){
      $uNameErr = "Username cannot be empty!";
    }else{
      $userName = $_POST['username'];
    }

    if(empty($_POST['password'])){
      $uPassErr = "Password cannot be empty!";
    }else{
      $uPass = $_POST['password'];
    }

    if(!empty($userName) && !empty($uPass)){
      $sqlUserCheck = "select password from customer_registration where username = '$userName';";

      $resultUserCheck = mysqli_query($conn, $sqlUserCheck);
      $userCount = mysqli_num_rows($resultUserCheck);

      if($userCount < 1){
        $uNameErr = "User does not exist";
      }else{
        while($row = mysqli_fetch_assoc($resultUserCheck)){
          $uPassInDB = $row['password'];
        }

        if(password_verify($uPass, $uPassInDB)){
          $_SESSION["username"] = $userName;
          header("Location: HMS_Admin/ahome.php");
        }else{
          $uPassErr = "Wrong password!";
        }
      }
    }
  }

?>


<html>
  <head>
    <meta charset="utf-8">
    <title>Royel Hotel | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <style>
.myDiv {
  border: 5px outset black;
  background: linear-gradient(to right, #bdc3c7, #2c3e50);
  text-align: center;
}
</style>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Royel</span> Hotel</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="service.php">OUR SERVICES</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="registration.php">Register</a></li>
            <li class="current"><a href="signin.php">Sign in</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      </section>

      <div class="myDiv";align="center">

        <h1 style="color:white">Welcome To The Admin Sign In</h1>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()" method="POST">
        <table align="center">
          <tbody>
            <tr>
              <td style="color:White"><label>Username: </label></td>
              <td><input type="text" name="username" value="<?php echo $userName; ?>" id="uname"></input></td>
            </tr>
            <tr>
              <td style="color:White"><label>Password: </label></td>
              <td><input type="password" name="password" id="upass"></input>
                  <span style="color:red;"><?php echo $uPassErr; ?></span>
              </td>
            </tr>
            <tr>
              <td align="left" colspan="2">
                <input type="submit" value="Log In"></input>

              </td>
            </tr>
          </tbody>
        </table>
        </form>

        <script>
          function validateForm() {
           var uname = document.getElementById("uname").value;
           var upass = document.getElementById("upass").value;
           if (uname == "" || upass == ""){
             alert("Please fill the Username and Password");
             return false;
           }
        }

        </script>

      </div>

<h1 style="text-align:center">Experience a good stay, enjoy fantastic offers</h1>
    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/singleroom.jpg">
          <h3>Single Bed Luxurious Rooms</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.</p>
        </div>
        <div class="box">
          <img src="./img/doubleroom.jpg">
          <h3>Double Bed Luxurious Rooms</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.</p>
        </div>
        <div class="box">
          <img src="./img/honeymoon.jpg">
          <h3>Honey Moon suits</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.</p>
        </div>
      </div>
    </section>

    <footer>
      <p>Royal Hotel, Copyright &copy; 2020</p>
    </footer>
  </body>
</html>
