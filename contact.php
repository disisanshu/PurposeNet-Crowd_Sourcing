<?php
include("db_connection.php");
include("login_check.php");
?>

<!DOCTYPE>
<html lang="en">
<head>
<title>
Contact US
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#contact").css('background-color','rgb(120,120,120)');
$("#contact").css('border-radius','30px');
$("#contacttext").css('color','rgb(255,255,255)');
</script>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">

<?php
if(ISSET($_POST["submit"]))
{
	if(ISSET($_POST["text"]) && ($_POST["text"]!=''))
	{
		$text = $_POST['text'];
		$mail = $_SESSION['email'];
		mysql_query("INSERT INTO feedback VALUES ('$text','$mail') ");
?>
	<div class="alert alert-success ">We will send a email to your email address regarding your query.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
	}
	else
	{
?>
	<div class="alert alert-danger ">Enter something before pressing Submit.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
	}
}
?>
	<form action="contact.php" method="post">
		Enter your query/feedback:<textarea name="text" rows="8" cols="50"></textarea> <br>
<!--		Enter your email address:<input type="text" name="email"  /> <br>	-->
		<input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
	</form>
	<p style="color:black;font: bold italic 20px Times New Roman;padding:auto;">
	<br>
	<br>
		G.S.V.Harsha Vardhan <br>
		venkata.harshavardhan@students.iiit.ac.in <br>
		IIITH <br>
	</p> 
	<p style="color:black;font: bold italic 20px Times New Roman;">
		Rishabh Srivastava<br>
		rishabh.srivastava@research.iiit.ac.in<br>
		IIITH <br>
		<br>
		<br>
	</p> 
</div>
</body>
</html>
