<?php
session_start();
if(isset($_REQUEST['contactname']) || isset($_REQUEST['contactphone']) || isset($_REQUEST['contactemail'])){
 $cname = $_REQUEST['contactname'];
 $cphone = $_REQUEST['contactphone'];
 $cemail = $_REQUEST['contactemail'];
 $_SESSION['cname']= $cname;
 $_SESSION['cphone']= $cphone;
 $_SESSION['cemail']= $cemail;
 echo "<script> location.href='contactinfosend.php' </script>";
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Royel Hotel | Contact Us</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/buttonstyle.css">
    <style>
		iframe {
			width: 100%;
			height: 500px;
		}
	</style>
  </head>

  <style>
.myDiv {

  border: 2px outset black;
  background: linear-gradient(to right, #bdc3c7, #2c3e50);
  text-align: center;
}

.contactDiv{

  border: 2px outset black;
  text-align: center;
  height: 600px;
  width: 1895px;
}
.about {
  align-content: center;
  height: 100px;
  width: 1500px;
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
            <li class="current"><a href="contact.php">Contact Us</a></li>
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
    <div class="myDiv";align=center >
      <h1 style="color:black">Contact With Us</h1>
      <p style="color:black"><strong>Phone :</strong> +88 01666-201234</p>
      <p style="color:black"><strong>Email :</strong> INFO@ROYELHOTEL.COM</p>
      <p style="color:black"><strong>Address :</strong> Dhaka, Bangladesh</p>
      <h2 style="color:white">You can also visit out social media</h2>
      <a href="https://www.facebook.com/"> <img src="./img/facebook.png" alt="image" height="60" width="60" > </a>
      <a href="https://www.instagram.com/"><img src="./img/insta.png" alt="image" height="60" width="60"></a>
      <a href="https://www.google.com/"><img src="./img/google.png" alt="image" height="60" width="60"></a> <br>

    </div>


 <div class="contactDiv">
   <h3 style="color:black">SEND US YOUR CONTACT INFORMATION</h3>
    <form action="" method="POST">
      <strong>  Name: </strong> <input type="text" name="contactname" id="contactname" required> <br>
      <strong>  Phone: </strong> <input type="text" name="contactphone" id="contactphone" required> <br>
      <strong>  Email: </strong><input type="text" name="contactemail" id="contactemail" required> <br>
        <input type="submit" value="Send Now" name="sendnow">
      </form>



<br>
<h2>Do you want to read more about us?</h2>
    <button class="specialbutton"; style="color:black" type="button" name="button_1" id="btn_1">Read More</button>
    <br><br>
    <div class=""; align="center">
        <div class="about"; align="center"; id="content_1">

        </div>
    </div>


    <script type="text/javascript">

      document.getElementById('btn_1').addEventListener('click',loadResponse);

      function loadResponse(){
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'about.txt', true);
        xhr.send();

        xhr.onload = function(){
          if(this.status == 200){
            document.getElementById('content_1').innerHTML = this.responseText;
          }else if(this.status == 404){
            document.getElementById('content_1').innerHTML = "404 - NOT FOUND";
          }
        };
      }

    </script>
    </div>

    <footer>
      <p>Royal Hotel, Copyright &copy; 2020</p>
    </footer>
  </body>

</html>
