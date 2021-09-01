
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
    <img src="simg/w.jpg" alt="Notebook" style="width:100%;" >
<div class="content">
      <form>





<?php
$myname = "Faria";
$mypass = "abc";


if(isset($_POST['go'])){
  $uname = $_POST['u_visit'];
  $pass = $_POST['u_pwd'];
 //$me = $_POST['u_me'];
if($uname == $myname && $pass == $mypass){

  if(isset( $_POST['u_me'])){
  setcookie('u_visit', $uname, time()+60*60*7);
setcookie('u_pwd', $pass, time()+60*60*7);
}session_start();
$_SESSION['u_visit'] = $uname;
header("location: logout.php");}

else{
  echo "Username or Password Invalid . <br> click here to <a href= 'index.php'>try again</a>";
}
}else{
  header("location: index.php");
}


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
