<?php

  require "includes/db_connect.inc.php";

  $genderErr = $cPassErr = $cityErr = $userNameErr = "";
  $userFullName = $userName = $uPass = $cPass = $uEmail = $uDob = $uPhone = $userGender = $userCity = "";
  $errExists = 0;
  $regSuccessful = "";


  if($_SERVER["REQUEST_METHOD"]=="POST"){

    $userFullName = mysqli_real_escape_string($conn, $_POST['full_name']);

    if(empty($_POST['user_name'])){
      $userNameErr = "Username cannot be empty!";
      $errExists = 1;
    }else{
      $userName = mysqli_real_escape_string($conn, $_POST['user_name']);
    }

    $uPass = mysqli_real_escape_string($conn, $_POST['pwd']);
    $cPass = mysqli_real_escape_string($conn, $_POST['c_pwd']);
    $uEmail = mysqli_real_escape_string($conn,$_POST['u_email']);
    $uDob = mysqli_real_escape_string($conn,$_POST['u_dob']);
    $uPhone = mysqli_real_escape_string($conn,$_POST['u_phone']);

    if($uPass != $cPass){
      $cPassErr = "Passwords doesn't match!";
      $errExists = 1;
    }

    $uPassToDb = password_hash($uPass, PASSWORD_DEFAULT);

    if(empty($_POST['u_gender'])){
      $genderErr = "Gender cannot be empty!";
      $errExists = 1;
    }else{
      $userGender = mysqli_real_escape_string($conn, $_POST['u_gender']);
    }

    if(empty($_POST['u_city'])){
      $bloodErr = "City cannot be empty!";
      $cityErr = 1;
    }else{
      $userCity = mysqli_real_escape_string($conn, $_POST['u_city']);
    }

    if($errExists != 1){

      $sqlUers = "select id from customer_registration where username = '$userName'";
      $results = mysqli_query($conn, $sqlUers);

      $rowCount = mysqli_num_rows($results);

      if($rowCount > 0){
        $userNameErr = "User already exists!";
      }
      else{
        $sqlUserInsert = "insert into customer_registration (fullname, username, password, email, dob, phone, gender, city)
        values ('$userFullName', '$userName', '$uPassToDb', '$uEmail', '$uDob', '$uPhone', '$userGender', '$userCity');";

        mysqli_query($conn, $sqlUserInsert);

        $regSuccessful = "Registration was successful";
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
            <li class="current"><a href="registration.php">Register</a></li>
            <li><a href="signin.php">Sign in</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      </section>

      <div class="myDiv";align="center">
        <h1 style="color:red">User Registration</h1>
        <form action="registration.php" method="post">
          <table align="center">
            <tr>
              <td style="color:White">Full Name:</td>
              <td> <input type="text" placeholder="Full Name" name="full_name" value="" required>
                </td>

            </tr>
            <tr>
              <td style="color:White">User Name:</td>
              <td> <input type="text" placeholder="User Name" name="user_name" value="" required>
              <span style="color:red;"> <?php echo $userNameErr; ?> </span> </td>
            </tr>
            <tr>
              <td style="color:White">Password: </td>
              <td><input type="password" name="pwd" value="" required></td>
            </tr>
            <tr>
              <td style="color:White">Confirm Password: </td>
              <td><input type="password" name="c_pwd" value="" required>
              <span style="color:red;"> <?php echo $cPassErr; ?> </span> </td>
            </tr>
            <tr>
              <td style="color:White">E-mail:</td>
              <td><input type="email" name="u_email" value="" required></td>
            </tr>
            <tr>
              <td style="color:White">Date of Birth: </td>
              <td><input type="date" name="u_dob" value="" required></td>
            </tr>
            <tr>
              <td style="color:White">Phone: </td>
              <td>+880 <input type="number" name="u_phone" value="" required></td>
            </tr>
            <tr>
              <td style="color:White">Gender: </td>
              <td style="color:White">
                <input type="radio" name="u_gender" value="male" checked > Male <br>
                <input type="radio" name="u_gender" value="female" <?php if($userGender == "female") echo "checked"; ?> > Female <br>
                <input type="radio" name="u_gender" value="others" <?php if($userGender == "others") echo "checked"; ?> > Others <br>
                <span style="color:red"><?php echo $genderErr; ?></span>

              </td>
            </tr>
              <td style="color:White">City </td>
              <td>
                <select name="u_city" required>
                  <option value="" disabled selected>Select your city</option>
                  <option value="dhaka" <?php if($userCity == "dhaka") echo "selected"; ?> >Dhaka</option>
                  <option value="cumilla" <?php if($userCity == "cumilla") echo "selected"; ?>>Cumilla</option>
                  <option value="chottogram" <?php if($userCity == "chottogram") echo "selected"; ?> >Chottogram</option>
                </select>
                <span style="color:red"><?php echo $cityErr; ?></span>
              </td>
            <tr align="right">
              <td colspan="2"><input type="submit" name="btn_registration" value="Register"></td>
            </tr>
          </table>
        </form>
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
