<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Royel Hotel | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/serviceStyle.css">

  </head>
  <style>
  .main {
    width: 100%;
    height: 171vh;
    position: relative;
    overflow: hidden;
    background: linear-gradient(to right, #bdc3c7, #2c3e50);
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
            <li class="current"><a href="service.php">OUR SERVICES</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="signin.php">Sign in</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">

    </section>
    <div class="main" >

    </div>


<div class="information">
  <div class="overlay">

  </div>
  <img src="img/gallery1.jpg" class="gallery1">
  <div id="circle">
    <div class="feature one">
      <img src="img/serviceicon.png">
      <div>
        <h1>Luxurious Single Bed</h1>
        <p>Single bed, WiFi, Tv, Desk, Bathtub etc</p>
      </div>
     </div>
    <div class="feature two">
      <img src="img/serviceicon.png">
      <div>
        <h1>Luxurious Double Bed</h1>
        <p>Double bed, WiFi, Tv, Desk, Bathtub etc</p>
      </div>
    </div>
    <div class="feature three">
      <img src="img/serviceicon.png">
      <div>
        <h1>Honey moon suits</h1>
        <p>Couple bed, WiFi, Tv, Desk, Bathtub etc</p>
      </div>
    </div>
    <div class="feature four">
      <img src="img/serviceicon.png">
      <div>
        <h1>Luxurious Restaurent</h1>
        <p>24 hour restaurent srvice</p>
      </div>
    </div>
  </div>
</div>
<div class="controls">
  <img src="img/arrow.png" id="upbtn">
  <h2>Our Services</h2>
  <img src="img/arrow.png" id="downbtn">
</div>
<script>
    var circle = document.getElementById("circle");
    var upbtn = document.getElementById("upbtn");
    var downbtn = document.getElementById("downbtn");

    var rotateValue = circle.style.transform;
    var rotateSum;

    upbtn.onclick = function()
    {
      rotateSum = rotateValue + "rotate(-90deg)";
      circle.style.transform = rotateSum;
      rotateValue = rotateSum;
    }
    downbtn.onclick = function()
    {
      rotateSum = rotateValue + "rotate(90deg)";
      circle.style.transform = rotateSum;
      rotateValue = rotateSum;
    }
</script>

<footer>
  <p>Royal Hotel, Copyright &copy; 2020</p>
</footer>
  </body>
</html>
