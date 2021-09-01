<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>BOOKING FORM</title>
	 <link rel="stylesheet" type="text/css"href="HMS_Admin/css/Booking.css">
<style>
	
*{
			margin:0;
			padding:0;
		}
		html{
			background-image:url("img/bms.jpg") no-repeat center center fixed;
			-webkit-background-size:cover;
			-moz-background-size:cover;
			-o-background-size:cover;
			background-size:cover;
		}
		body{
			background-color:black;
			font-family:Arial,Helvetica,sans-serif;
			background-position:center;
			background-size:cover;
			font-family:sans-serif;
			margin-top:40px;
			
		}
		.book{
			width:800px;
			background-color:rgb(0,0,0,0.5);
			margin:auto;
			color:#FFFFFF;
			padding:10px 0px 10px 0px;
			text-align:center;
			border-radius:15px 15px 0px 0px;
		}
		.main{
			width:800px;
			background-color:rgb(0,0,0,0.5);
			margin:auto;
		}
		form{
			padding:10px;
		}
		#name{
			width:100%;
			height:100px;
		}
		.name{
			position:relative;
			margin-left:25px;
			margin-top:30px;
			width:125px;
			color:white;
			font-size:18px;
			font-weight:700px;
		}
		.firstname{
			position:relative;
			left:200px;
			top:-37px;
			line-height:40px;
			border-radius;6px;
			padding:0 22px;
			font-size:16px;
		}
		.lastname{
			position:relative;
			left:417px;
			top:-80px;
			line-height:40px;
			border-radius;6px;
			padding:0 22px;
			font-size:16px;
			color:#555;
		}
		.firstlabel{
			position:relative;
			color:#E5E5E5;
			text-transform:capitalize;
			font-size:14px;
			left:203px;
			top:-45px;
		}
		#ferr{
			position:relative;
			color:red;
			text-transform:capitalize;
			font-size:14px;
			left:30px;
			top:-35px;
		}
		.lastlabel{
			position:relative;
			color:#E5E5E5;
			text-transform:capitalize;
			font-size:14px;
			left:195px;
			top:-45px;
		}
		#lerr{
			position:relative;
			color:red;
			text-transform:capitalize;
			font-size:14px;
			left:234px;
			top:-75px;
		}
		.mail,.in,.out,.call,.type,.price,.no,.amount{
			position:relative;
			left:199px;
			top:-37px;
			line-height:40px;
			width:460px;
			border-radius:6px;
			padding:0 22px;
			font-size:16px;
			color:#555;
		}
		.button {
			  position: absolute;
              left: 1000px;
			  top: auto;
              
    background-color: #0088cc;
    border: 1px solid #0088cc;
    border-radius: 1px;
    color: #ffffff;
    display: inline-block;
    font-size: 0.9375em;
    font-weight: normal;
    line-height: 1.2;
    margin-right: 0.3125em;
    margin-bottom: 0.3125em;
    padding: 0.5em 0.6875em;
	
    width: auto;
}

.button:active,
.button:focus,
.button:hover {
    background-color: #005580;
    border-color: #005580;
    color: #ffffff;
    text-decoration: none;
}

.button:active {
    box-shadow: inset 0 0.15625em 0.25em rgba(0, 0, 0, 0.15), 0 1px 0.15625em rgba(0, 0, 0, 0.05);
}
.error{
	color:red;
}
div.absolute {
  position: absolute;
  top: 950px;
  right: 50px;
  width: 200px;
  height: 100px;
  
}
.absolute:hover{
	color:red;
}
		
</style>
		

	 
</head>


<body>
<?php
require_once("db_con.php");

// define variables and set to empty values
$fnameErr =$lnameErr =$emailErr = $phoneErr =$check_inErr=$check_outErr= $priceErr = $noErr= $amountErr ="";
$fname = $lname =$email = $phone =$check_in= $check_out= $price =  $no= $amount="";
//php form validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["first_name"]);
  }
  if (empty($_POST["last_name"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["last_name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["check_in"])) {
    $check_inErr = "required check_in date ";
  } else {
    $check_in = test_input($_POST["check_in"]);
  }
  if (empty($_POST["check_out"])) {
    $check_outErr = "required check_out date ";
  } else {
    $check_out = test_input($_POST["check_out"]);
  }
  if (empty($_POST["u_phone"])) {
    $phoneErr = "phone number is required";
  } else {
    $phone = test_input($_POST["u_phone"]);
  }

  if (empty($_POST["room_price"])) {
    $priceErr = "room price must be required";
  } else {
    $price = test_input($_POST["room_price"]);
  }

  if (empty($_POST["room_no"])) {
    $noErr = "room no is required";
  } else {
    $no = test_input($_POST["room_no"]);
  }
  if (empty($_POST["total_amount"])) {
    $amountErr = "Total Amount must be required";
  } else {
    $amount = test_input($_POST["total_amount"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$insertQuery="INSERT INTO register(first_name,	last_name,	email,	check_in,	check_out,	phone,	per_day_cost,	room_no	,total_amount) VALUES('$fname','$lname','$email','$check_in','$check_out','$phone','$price','$no','$amount')";

$runQuery= mysqli_query($connect,$insertQuery);

if($runQuery==true){
	echo "data inserted";
    }
	else{
		echo "data not inserted";
	}
?>

<div class="book" style="color:red;"><h1 >BOOKING FORM</h1></div>
<div  class="main">
    <form   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
	
        <div id="name" >
		<h2 class="name">NAME</h2>
		<input class="firstname" type="text"  name="first_name" value=""> 
		<span id="ferr"class="error"><?php echo $fnameErr;?></span><br>
          <label class="firstlabel">First Name</label>
		  
        <input class="lastname"type="text"  name="last_name" value=""> 
		 <span id="lerr" class="error"><?php echo $lnameErr;?></span>
         <label class="lastlabel">Last Name</label>
		</div>
        <h2 class="name">E-mail:</h2>
          <input class="mail" name="email" type="email"  value="" >
		   <span class="error"><?php echo $emailErr;?></span>
         <br>
          <h2 class="name">Check In: </h2>
          <input type="date" name="check_in" class="in"  value="" >
		   <span class="error"><?php echo $check_inErr;?></span>
         <br>
          <h2 class="name">Check Out: </h2>
          <input type="date" name="check_out"  class="out"  value="" >
		   <span class="error"><?php echo $check_outErr;?></span>
         <br>
		  <h2 class="name">Phone: </h2>
          <input type="number"  class="call" name="u_phone" value="" >
		   <span class="error"> <?php echo $phoneErr;?></span>
        <br>
          
         <br> 
      
          <h2 class="name">Room Price per Day:</h2>
          <input type="text" class="price" name="room_price" value="" >
		   <span class="error"> <?php echo $priceErr;?></span>
        <br>
          <h2 class="name">Rooms No:</h2>
          <input type="number" name="room_no"class="no"  value="" >
		   <span class="error"> <?php echo $noErr;?></span>
         <br>
          <h2 class="name">Total Amount:</h2>
          <input type="number" class="amount"name="total_amount" value="" >
          <span class="error"> <?php echo $amountErr;?></span>
           <br>
		    <input   type="submit" class="button" name="submitButton" value="Submit" >
			
			<a href="ahome.php" target="_top"><span style="color: white;font-size: larger;font-weight: bold; position-left:-40px;"><div class="absolute">BACK TO HOME</div></a>
			<br><br><br>
       </div>
	</form>
	

</body>
</html>