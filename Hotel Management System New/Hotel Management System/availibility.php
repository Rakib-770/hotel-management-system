
<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
$checkinn = $checkout = $adult = $child = $error ="";

if($_SERVER["REQUEST_METHOD"] == "POST" ){
  function clean_input($field){
    $filed = trim($field);
    $filed = stripslashes($field);
    $filed = htmlspecialchars($field);
    return $field;}

  $checkinn = clean_input($_POST['checkin']);
  $checkout = clean_input($_POST['checkout']);
  $adult = clean_input($_POST['adult']);
  $child = clean_input($_POST['child']);




if(isset($checkinn) && $checkinn !="" && isset($checkout) && $checkout !="" && isset($adult) && $adult !="" && isset($child) && $child !=""){


  }else{
    $error = "You must fill all the required fields";
  }

}
?>
<?php include('ajax.js');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Royel Hotel | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  <script type="text/javascript" src="jquery-3.5.1.js"> </script>
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
  <img src="simg/pic4.jpg" alt="Notebook" style="width:100%;" >
    <div class="content">
<h1>Welcome To AVAILABILITY PAGE</h1>
<div class="website"><h2 id="messagedisplay"></h2></div>
<div class="formpost">
        <form id="formid" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post">

      <table align="center">
        <tbody>
          <tr>
            <td><span style="color:white;font-size: larger;font-weight: bold;">Check In</td>
            <td> <input type="date"  name="checkin" id="in" value="" required> </td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Check Out</td>
            <td> <input type="date" name="checkout" id="out" value="" required></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">Adult </td>
              <td>
                <select name="adult" id="ad" required>
                  <option value="" disabled selected>Select your option</option>
                  <option value="yes">YES</option>
                  <option value="no">NO</option>

                </select>

              </td>
            </tr>
            <tr>
              <td><span style="color: white;font-size: larger;font-weight: bold;">Child </td>
                <td>
                  <select name="child" id="ch" required>
                    <option value="" disabled selected>Select your option</option>
                    <option value="yes">YES</option>
                    <option value="no">NO</option>

                  </select>

                </td>
              </tr>


          <tr  align="right">
              <td colspan="2"><input type="submit" style="background-color:black;color:white;width:100px;height:25px;" name="ok" id="okk" value="SUBMIT">
          or <a href="index.php" target="_top"><span style="color: white;font-size: larger;font-weight: bold;">Back</a></td>  </td></tr>
          <tr></td>  <div align="center"> <?php
            if($error){
              echo $error ;
            }
            ?>
          </td></tr>

             </div>

            </tbody>
          </table>

<div id= "displaydata"></div>

          </form>
        </div>
          </div>
        </div>


          </section>




          <footer>
            <p>Royal Hotel, Copyright &copy; 2020</p>
          </footer>


</body>
</html>
