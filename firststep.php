<!DOCTYPE HTML>
<html lang="en">
<?php
session_start();
include("login_check.php");
include("db_connection.php");

$main= $_POST["main"];
$uname = $_SESSION["email"];
if(ISSET($_POST["submit"]) && ISSET($_POST["primarypurpose"]))
{
//	echo "HELLO WORLD<br>";
	$flag = 0;
	if($_POST["primarypurpose"])
	{
		$_SESSION["main"] = $main;
		$purpose = $_POST["primarypurpose"];
		mysql_query("INSERT INTO `usage` ( `main` , `purpose` ) VALUES ('$main', '$purpose')");
		$id = mysql_insert_id();
		mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'usage', '$id') ");
		$flag = 2;
		header('Location:./secondstep.php');
	}
	else
	{
		$flag = 1;
	}
}
else if(ISSET($_POST["next"]))
{
	header("Location:./secondstep.php");
}
else if(ISSET($_POST["change"]))
{
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
	$main = mysql_fetch_array($result)["main"];
}
else
{
	if($_SESSION["main"])
	{
		$main = $_SESSION["main"];
	}
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc  WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
	$main = mysql_fetch_array($result)["main"];

}
?>


<head>
<title>
First Step
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>

<script>
$("#first").css('background-color','rgb(120,120,120)');
$("#first").css('border-radius','30px');
$("#firsttext").css('color','rgb(255,255,255)');
</script>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
<?php
if($flag == 1)
{
?>
		<div class="alert alert-danger">press submit only after entering into the input box
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>

<?php
$flag = 0;
}
elseif($flag == 2)
{
?>
		<div class="alert alert-success">Your input was successfully submitted. press 'Go to next step'.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
<?php
$flag = 0;
}
?>
<br>
		<p style="color:black;font: 15px Droid Sans;text-align:center;">
		<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
		</p>
		<p style="color:black;font: 20px Droid Sans;text-align:center;">
		Example: Main Usage of 'PEN'<br>
	        <input class="input-xlarge" id="disabledInput" type="text" placeholder="To write something on paper" disabled>
		</p>
		<form action="firststep.php" method="post" >
		<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Write the main usage of '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
		</p>
		</form>
		<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
			(Follow the above format)
		</p>

		<p style="color:black;font: italic 20px Droid Sans;">
		<form action="firststep.php" method="post" style="text-align:center;">
<!--			<textarea name="primarypurpose" cols=43 autocomplete=off /></textarea><br> -->
			<textarea name="primarypurpose" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea><br>
			<input type="hidden" name="main" value=<?php echo $main; ?>  />
			<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
			<input type="submit" name="next" value="Go to the next step" class="btn btn-success" />
		</form>
		</p>
	</div>
</body>
</html>
