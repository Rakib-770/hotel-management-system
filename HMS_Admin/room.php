
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<style>
	 
		
	#id{
			font-family:Arial,Helvetica,sans-serif;
			
			background-position:center;
			background-size:cover;
			font-family:sans-serif;
			margin-top:40px;
			margin:0;
			padding:0;
			
	    }
header{
  background:black;
  color:#ffffff;
  padding-top:20px;
  min-height:100px;
  border-bottom:#ff0000 3px solid;
  margin:0;
			padding:0;
}
	header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
  margin:0;
			padding:0;
  
}
header nav{
  float:right;
  margin-top:10px;
  
}

header .highlight, header .current a{
  color:#ff0000;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}



header li{
  float:right;
  display:inline;
  padding: 0 20px 0 20px;
}

#showcase{
  min-height:100px;
  text-align: center;
  color:#ffffff;
}

#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
}

#showcase p{
  font-size:20px;
}
.cont.content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width:98%; /* Full width */
  padding: 15px; /* Some padding */
}
.click:hover{
  color:red;
  font-weight:bold;
}
	</style>
</head>
<body>
	
		<div id="bg" style="background-image: url('img/bed.jpg'); height: 1200px;">
	<header>
		<div class="container" >
			<div id="logo">
				<h1><font color="white">ROYEL HOTEL</font></h1>
			</div>
			<div id="nav">
				<ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a style="color:red;" >Room Update</a></li>
					<li><a href="Book_now.php">Booking</a></li>
					<li><a href="rd.php">Room Dateils</a></li>
					
				</ul>
			</div>
		</div>
	</header>
	
 <section id="showcase">
<div class="cont">
					
			<div class="content">
<h1>ADD NEW ROOM</h1>

		<form align="center"action="co.php" method="post">
		
			<table align="center" >
				
		  <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">ROOM NO</td>
            <td> <input type="text" name="roomNo" id="name" value="" required></td>
            <td><span  class="text-danger font-weight-bold"> </span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">ROOM TYPE</td>
            <td> <input type="text" name="roomType" id="card" value="" required></td>
            <td><span  class="text-danger font-weight-bold"> </span></td>
          </tr>
          <tr>
            <td><span style="color: white;font-size: larger;font-weight: bold;">ROOM PRICE</td>
            <td> <input type="text" name="roomPrice" id="code" value="" required></td>
            <td><span  class="text-danger font-weight-bold"> </span></td>
          </tr>
				
				
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit" class="click">
					<a href="ahome.php" target="_top"><span style="color: white;font-size: larger;font-weight: bold;"class="click">Back</a></td>
				</td>
				
			</table>
			
		</form>
		        
			</div>
		</div>
	</div>
</section> 
</body>

</html>