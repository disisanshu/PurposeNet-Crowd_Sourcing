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
$uname = $_SESSION["email"];
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
				
					$q = mysql_query("SELECT * FROM small_purpose WHERE count=$new_count AND main='$main' AND purpose='$purpose' AND artifacts='$art'");
					$id = mysql_fetch_array($q)["id"];
				}
				else
				{
					mysql_query("INSERT INTO small_purpose  ( main, artifacts, purpose, count) VALUES ('$main','$art','$purpose',1)");
					$id = mysql_insert_id();
				}
				mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'small_purpose', '$id') ");
						
			}
		}
		$_SESSION["present"]=$main;
		header("Location:./data.php");
		$_SESSION["main"] = $main;
		$flag = 2;
	}
	else
	{
		$flag = 1;
	}
}
else if(ISSET($_POST["next"]))
{
	header("Location:./firststep.php");
}
else if(ISSET($_POST["change"]))
{
	$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
	$main = mysql_fetch_array($result)["main"];
}
else
{
	if($_SESSION["main"])
	{
		$main = $_SESSION["main"];
	}
	else
	{
		$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
		$main = mysql_fetch_array($result)["main"];
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Fourth Step  </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
	 
<?php
	include("headandnav.php");
?>
<script>
$("#fourth").css('background-color','rgb(120,120,120)');
$("#fourth").css('border-radius','30px');
$("#fourthtext").css('color','rgb(255,255,255)');
</script>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
<?php
if($flag == 1)
{
?>
	<div class="alert alert-danger">press submit only after entering into atleast one of the input box
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>

<?php
	$flag = 0;
}
elseif($flag == 2)
{
?>
	<div class="alert alert-success">Your input was successfully submitted.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
	$flag = 0;
}
?>

<!--	Following artifacts are listed as related to '<?php echo strtoupper($main); ?>' <br>	-->
<form action="fourthstep.php" method="post" style="text-align:center;">
<p style="color:black;font: 20px Droid Sans;text-align:center">
	Write the Purpose of these artifacts with reference to <?php $_SESSION["present"]=$main;echo strtoupper($main); ?>
	<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
	<table align="center" cellpadding =5px >
	<tr>
<?php
	$result = mysql_query("SELECT * FROM temp WHERE main='$main' ORDER BY RAND() LIMIT 0,5");
	$l = mysql_num_rows($result);
	if($l == 0)
	{
//		header("Location:./firststep.php");
	}
	for($i = 1; $i <= $l;$i++)
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
	<input type="submit" name="next" value="Go to the Next Step" class="btn btn-success" />
	</form>
</p>

</div>

</body>
</html>
