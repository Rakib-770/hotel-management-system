
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
    <img src="simg/w.jpg " alt="Notebook" style="width:100%;" >
<div class="content">
      <form>




<?php


session_start();
session_destroy();
if(isset($_COOKIE['u_visit']) && isset($_COOKIE['u_pwd'])){
$uname = $_COOKIE['u_visit'];
$pass = $_COOKIE['u_pwd'];
setcookie('u_visit', $uname, time()-1);
setcookie('u_pwd', $pass, time()-1);}
echo" Succesfully logout. click here to login again <a href = 'index.php'>login again</a>" ;
 ?>



</form>
</div>
</div>

</section>

<footer>
  <p>Royal Hotel, Copyright &copy; 2020</p>
</footer>


</body>
</html>
