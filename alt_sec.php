<?php
	session_start();
	include("db_connection.php");
	include("login_check.php");
	if(ISSET($_POST["change"]))
	{
		$domain = $_SESSION['domain'];
//		$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
		$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' ORDER BY RAND() LIMIT 1");
		$row = mysql_fetch_array($result);
		$_SESSION["ma"] = $row["main"];
	}
	$main = $_SESSION["ma"];
	$result = mysql_query("SELECT * FROM `temp` WHERE main='$main' AND count<=10 ORDER BY count DESC LIMIT 7");
//	echo $main;
	$art = array();
	$i=0;
	while($row=mysql_fetch_array($result))
	{
		$art[$i] = $row['artifacts'];
		$i = $i + 1;
	}
	$len = $i;
	if($_SESSION["i"]+1)
	{
		$i = $_SESSION["i"];
//		echo $i.$art[$i];
		if($i == $len)
		{
			$SESSION["i"]= 0;
			header("Location:./fourthstep.php");
		//	header("Location:./theme.php");
		}
	}
//	else
//	{
//		$_SESSION["i"] = 0;
//		$i = $_SESSION["i"];
//	}
	if(ISSET($_POST["skip"]))
	{
		if($_SESSION["i"]+1){
			$_SESSION["i"] = $_SESSION["i"] + 1;
		}
		header("Location:./alt_sec.php");
	}
	else if(ISSET($_POST["next"]))
	{
		header("Location:./fourthstep.php");
	}

?>

<!DOCTYPE>
<html lang="en">
<head>
<title>Third page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="./draganddrop.js"></script>
<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>
$(document).ready(function() {
	$("#help").hide();
	$("#trigger").click(function() {
		$("#help").slideToggle();
	});
});
</script>
</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#third").css('background-color','rgb(120,120,120)');
$("#third").css('border-radius','30px');
$("#thirdtext").css('color','rgb(255,255,255)');
</script>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">

<?php $_SESSION["present"] = $main;?>
<form action="./alt_sec.php" method="POST">
	<p style="margin:10px;font: 20px Droid Sans;padding:10px;">Drag and drop the artifact into the box that suits the features of the artifact best in relation to '<span id="main"><?php echo strtoupper($main); ?></span> '<input type="submit" name="change" class="btn btn-inverse btn-mini" value="Change artifact"></p></form>
	<div id="anchor">
	<div id="help" class="alert ">
	<?php include("help.php"); ?>
	</div>
	</div>
	<button class="btn btn-warning pull-right" id="trigger" >Help</button>

	<div draggable="true" id="move" style="font-size: 20px ;text-align:center;" align="center">
		<?php echo $art[$i];?>
	</div>
	<div class="container-fluid" style="width: 80%;padding-left:15%">
	<div id="opone">
	<p style=""><li id="awesome">Required in Manfacture of <?php echo $main; ?></li><li id="awesome">Essential for <?php echo $main; ?>'s primary purpose</li></p>
	</div>
	<div id="optwo">
	<p style=""><li id="awesome">Not required in manfacture but</li><li id="awesome">is a part of it  to fulfill its primary purpose</li></p>
	</div>
	<div id="opthree">
	<p style=""><li id="awesome">Present in <?php echo $main; ?> but </li><li id="awesome">Useful in other purposes not primary</li></p>
	</div>
	<div id="opfour">
	<p style=""><li id="awesome">Not a part of <?php echo $main; ?> but </li><li id="awesome">Required to fulfill its primary purpose.</li></p>
	</div>
	<div id="opfive" >
	<p style=""><li id="awesome">Subtype of <?php echo $main; ?></li></p>
	</div>
	</div>
	<div>
	<form action="./alt_sec.php" method="POST">
		<p style="margin:10px;text-align:right">
		<input type="submit" name="skip" value="Skip the Artifact" class="btn btn-primary" />
		<input type="submit" name="next" value="Go to the Next Step" class="btn btn-success" />
		</p>
	</form>
	</div>
</div>
</body>
</html>
