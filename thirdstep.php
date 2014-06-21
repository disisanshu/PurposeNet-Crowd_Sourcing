<?php
session_start();
include("db_connection.php");
include("login_check.php");

$main= $_POST["main"];
$flag = 0;
$ro1=$_POST["ro1"];
$ro2=$_POST["ro2"];
$ro3=$_POST["ro3"];
$ro4=$_POST["ro4"];
$ro5=$_POST["ro5"];
if(ISSET($_POST["submit"]))
{
	if($ro1 || $ro2 || $ro3 || $ro4 || $ro5)
	{
		//add them to db;
		$roarray = array();$l = 0;
		array_push($roarray,$ro1);
		array_push($roarray,$ro2);
		array_push($roarray,$ro3);
		array_push($roarray,$ro4);
		array_push($roarray,$ro5);
		for($i=0;$i<5;$i++)
		{
			$tmp = $i + 1;
			$nm = 'art'.$tmp;
			if($roarray[$i])
			{
				$art = $_POST[$nm];
				$purpose = strtolower($roarray[$i]);
				$purpose = trim($purpose);
				$purpose = str_replace(" ","_",$purpose);
				$result = mysql_query("SELECT count FROM small_purpose WHERE main='$main' AND purpose='$purpose' AND artifacts='$art'");
				$cc = mysql_fetch_array($result);
				if($cc)
				{
					$new_count = $cc['count'] + 1;
					mysql_query("UPDATE small_purpose SET count=$new_count WHERE main='$main' AND purpose='$purpose' AND artifacts='$art'");
				}
				else
				{
					mysql_query("INSERT INTO small_purpose VALUES ('$main','$art','$purpose',1)");
				}
			}
		}
		$flag = 2;
	}
	else
	{
		$flag = 1;
	}
}
else if(ISSET($_POST["next"]))
{
	header("Location:./home.php");
}
else if(ISSET($_POST["change"]))
{
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
	$main = mysql_fetch_array($result)["main"];
}
else
{
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
	$main = mysql_fetch_array($result)["main"];
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Third Step  </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
</head>

<body style="background-color:white;font:16px Droid Sans;">
	 
<?php
	include("headandnav.php");
?>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:80%;margin:auto">
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

<p style="color:black;font: 20px Droid Sans;text-align:center">
	Following artifacts are listed as related to '<?php echo strtoupper($main); ?>' <br>
<?php
	$result = mysql_query("SELECT * FROM temp WHERE main='$main' LIMIT 5");
	for($i = 1; $i <= 5;$i++)
	{
		$row = mysql_fetch_array($result);
		echo $row["artifacts"].',';
	}
	echo '<br>';
?>
Write the Purpose of the artifacts<br>
	<form action="thirdstep.php" method="post" style="text-align:center;">
	<table align="center" cellpadding =5px >
	<tr>
<?php
	$result = mysql_query("SELECT * FROM temp WHERE main='$main' LIMIT 5");
	for($i = 1; $i <= 5;$i++)
	{
		$row = mysql_fetch_array($result);
		echo '<td style="text-align:right;">'.strtoupper($row["artifacts"]).'</td>';
?>
	<td>
		<input type="hidden" name=<?php echo "art".$i; ?> value=<?php echo $row["artifacts"]; ?> >
		<input type="text" name=<?php echo "ro".$i; ?> placeholder="Enter Purpose" autocomplete="OFF" >
	</td>
	</tr>
<?php
	}
?>
	</table>
	<input type="hidden" name="main" value=<?php echo $main; ?>  />
	<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
	<input type="submit" name="next" value="Change the step" class="btn btn-success" />
	<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse" />
	</form>
</p>

</div>

</body>
</html>
