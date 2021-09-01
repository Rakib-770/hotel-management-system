



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
  <img src="simg/pic1.jpg" alt="Notebook" style="width:100%;" >
    <div class="content">
<h1>Welcome To USER PORTAL PAGE</h1>
<form action="availibility.php" method="post">
  <table align="center">
    <tbody>
      <form action="availibility.php" method="post">
        <tr  align="center">
          <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:60px;" name="ava" value="Availablity"></td></tr>
</form>

      <form action="stay book.php" method="post">
        <tr  align="center">
            <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:60px;" name="book" value="Stay Book"></td></tr>
</form>



      <form action="payment.php" method="post">
        <tr  align="center">
            <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:60px;" name="pay" value="Payment"></td></tr>
</form>

<form action="session.php" method="post">
  <tr>
    <td><span style="color: white;font-size: larger;font-weight: bold;">User Name For Gallary Visit</td>
    <td> <input type="text" name="u_visit" id="visit" value="" ></td>

  </tr>
  <tr>
    <td><span style="color: white;font-size: larger;font-weight: bold;">Password For Gallary Visit</td>
    <td> <input type="password" name="u_pwd" id="pwd" value=""></td>

  </tr>
  <tr>

    <td alagin="right">
      <input type="checkbox" name="u_me" id="me" value="me"> Remember Me</td>
</tr>

  <tr  align="right">
      <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:25px;" name="go" value="Go"></td></tr>
    </form>






</tbody>
</table>
</form>
</div>
</div>
</section>

<?php
if(isset($_COOKIE['u_visit']) && isset($_COOKIE['u_pwd'])){
$uname = $_COOKIE['u_visit'];
$pass = $_COOKIE['u_pwd'];
echo "<script>

document.getElementById('visit').value = '$uname';
document.getElementById('pwd').value = '$pass';
</script>";
}

 ?>



<footer>
  <p>Royal Hotel, Copyright &copy; 2020</p>
</footer>


</body>
</html>
