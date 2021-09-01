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
  <img src="simg/singleroom.jpg" alt="Notebook" style="width:100%;" >
    <div class="content">
<h1>Welcome To BOOKING PAGE</h1>

        <form action="insertbook.php" method="post" onsubmit="return validation()">

      <table align="center">
        <tbody>
          <tr>
            <td><span style="color:white;font-size: larger;font-weight: bold;">Available Room  </td>
              <td>
                <select name="u_rm" required>
                  <option value="" disabled selected>Select your option</option>
                  <option value="single">SingleRoom</option>
                  <option value="double">DoubleRoom</option>
                  <option value="hny">HoneymoonSuit</option>

                </select>
              </td>
            </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Booking Date</td>
            <td> <input type="date" name="u_bd" value="" required></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Check Out Date</td>
            <td> <input type="date" name="u_cout" value="" required></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Phone Number</td>
            <td> <input type="number" name="u_numb" id="phone" value="" required></td>
            <td><span id="phonerr" class="text-danger font-weight-bold"> </span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Email</td>
            <td> <input type="email" name="u_email" id="email" value="" required></td>
              <td><span id="emailerr" class="text-danger font-weight-bold"></span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Payment </td>
              <td>
                <select name="u_payment" required>
                  <option value="" disabled selected>Select your option</option>
                  <option value="cash">CASH</option>
                  <option value="card">CARD</option>
                    <option value="bkash">bkash</option>


                </select>
              </td>
            </tr>


          <tr  align="right">
              <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:25px;" name="btnsub" value="CONFIRM">
          or <a href="index.php" target="_top"><span style="color: white;font-size: larger;font-weight: bold;">Back</a></td>  </td></tr>
            </tbody>
          </table>

        </form>
      </div>
        </div>


          <script type="text/javascript">

          function validation(){
var phone =document.getElementById('phone'). value;
var email =document.getElementById('email'). value;

var phonecheck = /^[0][0-9]{10}$/;
var emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;

if(phonecheck.test(phone)){document.getElementById('phonerr').innerHTML = " ";}
else{
  document.getElementById('phonerr').innerHTML = " **Phone number is invalid";
  return false;
}
if(emailcheck.test(email)){document.getElementById('emailerr').innerHTML = " ";}
else{
  document.getElementById('emailerr').innerHTML = "**Email is invalid";
  return false;
}


//alert(email);
}
          </script>

          </section>






  <footer>
    <p>Royal Hotel, Copyright &copy; 2020</p>
  </footer>

</body>
</html>
