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
  <img src="simg/honeymoon.jpg" alt="Notebook" style="width:100%;" >
    <div class="content">
<h1>Welcome To PAYMENT PAGE</h1>

        <form action="insertpayment.php" method="post" onsubmit="return validation()">

      <table align="center">
        <tbody>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Payment Method </td>
              <td>
                <select name="u_py" required>
                  <option value="" disabled selected>Select your option</option>
                  <option value="cash">CASH</option>
                  <option value="card">CARD</option>
                  <option value="bkash">bkash</option>

                </select>
              </td>
            </tr>
            <tr>
              <td><span style="color: white;font-size: larger;font-weight: bold;">Available Room  </td>
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
            <td><span style="color: white;font-size: larger;font-weight: bold;">Card Holder Name</td>
            <td> <input type="text" name="u_cardn" id="name" value="" required></td>
            <td><span id="nameerr" class="text-danger font-weight-bold"> </span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Card Number</td>
            <td> <input type="number" name="u_cardnumb" id="card" value="" required></td>
            <td><span id="carderr" class="text-danger font-weight-bold"> </span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">bkash Code</td>
            <td> <input type="number" name="u_bkash" id="code" value="" required></td>
            <td><span id="codeerr" class="text-danger font-weight-bold"> </span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Date Of Payment</td>
            <td> <input type="date" name="u_dop" value="" required></td>
          </tr>

          <tr  align="right">
              <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:25px;" name="btnpay" value="PAY">
          or <a href="index.php" target="_top"><span style="color: white;font-size: larger;font-weight: bold;">Back</a></td></tr>
            </tbody>
          </table>

          </form>
        </div>
          </div>

          <script type="text/javascript">

          function validation(){
          var name =document.getElementById('name'). value;
          var card =document.getElementById('card'). value;
          var code =document.getElementById('code'). value;

          var namecheck = /^[A-Za-z. ]{3,30}$/;
          var cardcheck = /^[0][0-9]{4}$/;
          var codecheck =/^[0][0-9]{4}$/;

          if(namecheck.test(name)){document.getElementById('nameerr').innerHTML = " ";}
          else{
          document.getElementById('nameerr').innerHTML = " **Name is invalid";
          return false;
          }
          if(cardcheck.test(card)){document.getElementById('carderr').innerHTML = " ";}
          else{
          document.getElementById('carderr').innerHTML = "**Card number is invalid";
          return false;
          }
          if(codecheck.test(code)){document.getElementById('codeerr').innerHTML = " ";}
          else{
          document.getElementById('codeerr').innerHTML = "**bkash code is invalid";
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
