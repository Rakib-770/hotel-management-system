<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Royel Hotel | Contact Us</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>

      <style>
    .myDivCon{
      border: 2px outset black;
      background-color: black;
      text-align: center;
    }
	</style>
  </head>
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
            <li><a href="signin.php">Sign in</a></li>

          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
      </div>
    </section>

<div style="background: linear-gradient(to right, #bdc3c7, #2c3e50); border: 2px outset black; font-size: larger; font-family:Helvetica"; align=center>
 <?php
 session_start();
  echo "Thank you so much dear " . $_SESSION['cname']  ;
  echo "<br>Phone number: " . $_SESSION['cphone'] ;
  echo "<br>Email: " . $_SESSION['cemail'] ;
  echo "<br>We will contact with you soon";
  ?>
</div>
    <footer>
      <p>Royal Hotel, Copyright &copy; 2020</p>
    </footer>
  </body>

</html>
