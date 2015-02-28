<?php 
session_start();
include("login_check.php"); 

$domain= "";
if($_SESSION["domain"]) {
$domain = $_SESSION["domain"];
} else {
$domain = "";
}
if(ISSET($_POST["domain"])) {
	$domain = $_POST["domain"];
	$_SESSION["domain"] = $domain;
	header("Location:./actionFeature.php");
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>
Home Page
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#home").css('background-color','rgb(120,120,120)');
$("#home").css('border-radius','30px');
$("#hometext").css('color','White');
</script>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
<table rules='cols' width=100%>
<tr>
<td>
	<p style="font-family: Droid Sans;margin:20px;">
		<p style="font-size:20px;line-height:30px">
		Artifacts are man made objects - made to serve some purpose of mankind.
		</p>

		<p style="font-size:18px;line-height:30px">Examples:</p>

		<p style="text-align:left;font-size:16px;line-height:30px;padding-left:20px" >
			Mobile phone: To call other phones<br>
			Sim card inside mobile phone: To assign a number to a phone<br>
			Keypad of mobile phone: to enter the mobile number to call<br>
		</p>
		<p style="text-align:left;font-size:20px;line-height:40px" >
			Get ready to create wiki page of electronic gadgets that we use in day to day life.
		</p>
		<p style="text-align:left;font-size:20px;line-height:40px" >
			Co-operate and collaborate to put down at one place 'what you know' about these gadgets.
		</p>
		<p>
			For better understanding it is advised to fill the data orderly.
		</p>
	</p>
</td>
<td>
	<p align="center">
		<?php
			if($_SESSION["domain"]) {
				echo 'Presently Selected DOMAIN:&nbsp;&nbsp;'.'<b>'.strtoupper($_SESSION["domain"]).'</b>';
			}
		?>
		<br><br>Select a domain:
		<form action="home.php" method="POST" align="middle">
			<select name="domain">
				<option value="electronic">Electronic</option>
				<option value="furniture">Furniture</option>
				<option value="kitchen">Kitchen</option>
				<option value="stationery">Stationery</option>
				<option value="vehicles">Vehicles</option>
			</select>
			<button type="submit" class="btn btn-primary btn-small">Submit</button>
		</form>
	</p>
	<p style="margin:20px" align="center">
		<a href="./actionFeature.php"><button class="btn btn-primary btn-large">Proceed to enter new data</button></a>
		<br>
		OR
		<br>
		<a href="./checkstep.php"><button class="btn btn-primary btn-large">Check the data present</button></a>
	</p>
</td>
</tr>
</table>
<br>
<br>
</div>
		
</body>
</html>
