<html>
  <head>
    <meta charset="utf-8">

    <title>Royel Hotel | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/buttonstyle.css">
    <link rel="stylesheet" href="./css/popup.css">
  </head>
  <style>
.myDiv {
  border: 5px outset black;
  background: linear-gradient(to right, #bdc3c7, #2c3e50);
  text-align: center;
}
.about {
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
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="service.php">OUR SERVICES</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="signin.php">Sign in</a></li>
            <li><a href="FoodOrdering/restaurant.php">Our Restaurant</a></li>

          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1 style="color:#000000">ROYEL HOTEL</h1>
        <h3 style="color:#ffce14">WE KNOW WHAT YOU LOVE</h3>
              </div>
            </section>

        <div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
    <h1>Royel Hotel</h1>
    <h3>We know what you love</h3>
    <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
  </div>
</div>

<button onclick="togglePopup()">Learn More</button>

    <script>
    function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
}

    </script>

      <div class="myDiv">
        <h1 style="color:White";align="center">Sign in to get up to 50% discount</h1>
          <a href="signin.php" class="specialbutton">Sign in </a> <br> <br>
      </div>

<div class="container">
  <h1 style="text-align:center">About our Royel Hotel</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci. Integer hendrerit ante ut placerat cursus.</p>

</div>

<div class="about">
  <img src="./img/gallery2.jpg">
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
