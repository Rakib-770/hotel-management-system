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
<h1>Gallary</h1>

<?php
session_start();
echo "Welcom".$_SESSION['u_visit'];
echo "<a href= 'logout2.php'>logout</a>";
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
