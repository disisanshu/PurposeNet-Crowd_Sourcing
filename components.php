<!DOCTYPE HTML>
<?php
include("login_check.php");
include("pl.php");
include("db_connection.php");
$submitComponent=$_POST["submitComponent"];
$addComponent=$_POST["addComponent"];
$change=$_POST["change"];
$roComponent1=$_POST["roComponent1"];
$roComponent2=$_POST["roComponent2"];
$roComponent3=$_POST["roComponent3"];
$roComponent4=$_POST["roComponent4"];
$roComponent5=$_POST["roComponent5"];
$main=$_POST["main"];
if($submitComponent == "Go to the Next Step")
{
	header("Location:./theme.php");
}
if ($addComponent == "Submit") {
	$flag = 0;
	if(roComponent5 || roComponent4 || roComponent3 || roComponent2 || roComponent1)
	{
		$roArrayComponent= array();
		$lenComponent= 0;
		if($roComponent1){
			array_push($roArrayComponent, $roComponent1);
			$lenComponent++;
		}
		if ($roComponent2) {
			array_push($roArrayComponent, $roComponent2);
			$lenComponent++;
		}
		if ($roComponent3) {
			array_push($roArrayComponent, $roComponent3);
			$lenComponent++;
		}
		if ($roComponent4) {
			array_push($roArrayComponent, $roComponent4);
			$lenComponent++;
		}
		if ($roComponent5) {
			array_push($roArrayComponent, $roComponent5);
			$lenComponent++;
		}
		for ($i=0; $i < 5; $i++) { 
			if($roArrayComponent[$i]){
				$artifact= strtolower($roArrayComponent[$i]);
				$artifact= trim($artifact);
				$artifact= str_replace(" ", "_", $artifact);
				$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$artifact'");
				$cc= mysql_fetch_array($result);
				$p1= Inflector::pluralize($artifact);
				$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$p1'");
				$cc1= mysql_fetch_array($result);
				$sin= Inflector::singularize($artifact);
				$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$sin'");
				$cc2= mysql_fetch_array($result);
				$nos= str_replace("_", "", $artifact);
				$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$nos'");
				$cc3= mysql_fetch_array($result);
				// Some more code to be added here.....

			}
		}
	}
}
else if ($change == "Change the Artifact")
{
	while(1){
		$domain = $_SESSION["domain"];
		$l = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
	//	$l = mysql_query("SELECT * FROM temp ORDER BY RAND() LIMIT 1");
		$tmp = mysql_fetch_array($l)["main"];
		if($main != $tmp)
		{
			$main = $tmp;
			break;
		}
	}
	
}
else
{

	//$l = mysql_query("SELECT * FROM temp ORDER BY RAND() LIMIT 1");
	if($_SESSION["main"])
	{
		$main =$_SESSION["main"];
	}
	else
	{
		$domain = $_SESSION["domain"];
		$l = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
		$tmp = mysql_fetch_array($l)["main"];
		$main = $tmp;
	}
}

?>
?>

<html>
<head lang="en">
	<title>Components</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<!--	<link rel="stylesheet" type="text/css" href="css/style.css" />	-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="./draganddrop.js"></script>
	<!--
	<script type="text/javascript" src="jquery-ui-1.10.4.custom\js\jquery-1.10.2"></script>
	<script type="text/javascript" src="jquery-ui-1.10.4.custom\js\jquery-ui-1.10.4.custom"></script>
	<script type="text/javascript" src="jquery-ui-1.10.4.custom\js\jquery-ui-1.10.4.custom.min"></script>
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
	 
<?php
	include("headandnav.php");
?>
<script>
$("#fourth").css('background-color','rgb(120,120,120)');
$("#fourth").css('border-radius','30px');
$("#fourthtext").css('color','rgb(255,255,255)');
$("#third").css('background-color','rgb(120,120,120)');
$("#third").css('border-radius','30px');
$("#thirdtext").css('color','rgb(255,255,255)');
$("#second").css('background-color','rgb(120,120,120)');
$("#second").css('border-radius','30px');
$("#secondtext").css('color','rgb(255,255,255)');
</script>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="active" style="width:33.33%; text-align:center;"><a href="#component" data-toggle="tab">Components of Artifact</a></li>
			<li style="width:33.33%; text-align:center;"><a href="#relation" data-toggle="tab">Relation of Components</a></li>
			<li style="width:33.33%; text-align:center;"><a href="#purpose" data-toggle="tab">Purpose of Componennts</a></li>
		</ul>
	</div>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade in active" id="component">
			<form action="./secondstep.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the Artifacts that are related to '<?php $_SESSION["present"] = $main; echo strtoupper($main); ?>'
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		 		</p>
			</form>
			<form action="./secondstep.php" method="post">
				<table border=0 align="center">
				<tr>
					<th rowspan="6"></th>
					<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<td><p style="text-align:justify;"><i>Enter the Artifacts:</i></p><input type="text" name="roComponent1" autocomplete="off" class="search"></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent2" autocomplete="off" class="search"/></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent3" autocomplete="off" class="search"/></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent4" autocomplete="off" class="search"></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent5" autocomplete="off" class="search"/></td>
				</tr>
				<tr>
					<td style="text-align:right">
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
							  <button type="submit" id="submit" name="addComponent" value="Submit" class="btn btn-primary">Submit</button>
							  <button type="submit" id="next" name="submitComponent" value="Go to the Next Step" class="btn btn-success">Next step</button>
							</div>
						</div>
					</td>
				</tr>
				</table>
			</form>
		</div>
		<div class="tab-pane fade" id="relation">
			<form action="./alt_sec.php" method="POST">
				<p style="margin:10px;font: 20px Droid Sans;padding:10px;">
					Drag and drop the artifact into the box that suits the features of the artifact best in relation to '
					<span id="main"><?php echo strtoupper($main); ?></span> '
					<input type="submit" name="change" class="btn btn-inverse btn-mini" value="Change artifact">
				</p>
			</form>
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
				<p style="">
					<li id="awesome">Required in Manfacture of <?php echo $main; ?></li>
					<li id="awesome">Essential for <?php echo $main; ?>'s primary purpose</li>
				</p>
			</div>
			<div id="optwo">
				<p style="">
					<li id="awesome">Not required in manfacture but</li>
					<li id="awesome">is a part of it  to fulfill its primary purpose</li>
				</p>
			</div>
			<div id="opthree">
				<p style="">
					<li id="awesome">Present in <?php echo $main; ?> but </li>
					<li id="awesome">Useful in other purposes not primary</li>
				</p>
			</div>
			<div id="opfour">
				<p style="">
					<li id="awesome">Not a part of <?php echo $main; ?> but </li>
					<li id="awesome">Required to fulfill its primary purpose.</li>
				</p>
			</div>
			<div id="opfive" >
				<p style="">
					<li id="awesome">Subtype of <?php echo $main; ?></li>
				</p>
			</div>
			</div>
			<div>
			<form action="./alt_sec.php" method="POST">
				<p style="margin:10px; text-align:right">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonRelation" align="center">
						<button type="submit" id="submit" name="skip" value="Skip the Artifact" class="btn btn-primary">Skip the Artifact</button>
						<button type="submit" id="next" name="nextRelation" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
				</p>
			</form>
			</div>
		</div>
		<div class="tab-pane fade" id="purpose">
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
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" id="submitButtonPurpose" align="center">
							<button type="submit" id="submit" name="addPurpose" value="Submit" class="btn btn-primary">Submit</button>
						  	<button type="submit" id="next" name="submitPurpose" value="Go to the Next Step" class="btn btn-success">Next step</button>
						</div>
					</div>
				</p>
			</form>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$("#help").hide();
	$("#trigger").click(function() {
		$("#help").slideToggle();
	});
});
</script>
</body>
</html>
