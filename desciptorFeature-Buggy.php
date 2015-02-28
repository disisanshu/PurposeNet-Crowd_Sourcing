<!DOCTYPE HTML>
<?php
include("login_check.php");
include("db_connection.php");
/*
	Database Information:
	$con connected through database pnet.
	$con1 connected through database purposenet.
*/
$change= $_POST["change"];
$add= $_POST["add"];
$submit= $_POST["submit"];

$feature= $_POST["feature"];
echo $feature;
$textValue= $_POST["textValue"];
echo $textValue;
switch ($feature) {
	case 'color':
		$color= $textValue;
		break;
	case 'constitution':
		$constitution= $textValue;
		break;
	case 'fluidity':
		$fluidity= $textValue;
		break;
	case 'heaviness':
		$heaviness= $textValue;
		break;
	case 'inertness':
		$inertness= $textValue;
		break;
	case 'mobility':
		$mobility= $textValue;
		break;
	case 'oilness':
		$oilness= $textValue;
		break;
	case 'position':
		$position= $textValue;
		break;
	case 'shape':
		$shape= $textValue;
		break;
	case 'state':
		$state= $textValue;
		break;
	case 'size':
		$size= $textValue;
		break;
	case 'sliminess':
		$sliminess= $textValue;
		break;
	case 'smell':
		$smell= $textValue;
		break;
	case 'smoothness':
		$smoothness= $textValue;
		break;
	case 'softness':
		$softness= $textValue;
		break;
	case 'sound':
		$sound= $textValue;
		break;
	case 'stability':
		$stability= $textValue;
		break;
	case 'subtleness':
		$subtleness= $textValue;
		break;
	case 'taste':
		$taste= $textValue;
		break;
	case 'temperature':
		$temperature= $textValue;
		break;
	case 'transparency':
		$transparency= $textValue;
		break;
	case 'capacity':
		$capacity= $textValue;
		break;
	case 'magnitude':
		$magnitude= $textValue;
		break;
	case 'number':
		$number= $textValue;
		break;
	case 'weight':
		$weight= $textValue;
		break;
	default:
		$default= $textValue;
		break;
}
/*$color= $_POST["color"];
$constitution= $_POST["constitution"];
$shape= $_POST["shape"];
$size= $_POST["size"];
$state= $_POST["state"];*/

if($_SESSION["main"])
{
	$main =$_SESSION["main"];
}
else
{
	$domain = $_SESSION["domain"];
	$l = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
	$tmp = mysql_fetch_array($l)["main"];
	$main = $tmp;
}
if(isset($_POST["main"]))
	$main= $_POST["main"];
$artifact= $main;
mysql_close($con);
$con1= mysql_connect("localhost","nipun","123ltrc") or die(mysql_error());
$purposenet= mysql_select_db("purposenet", $con1);
session_start();
if($add)
{
	$flag=0;
	if($color || $constitution || $fluidity || $heaviness || $inertness || $mobility || $oilness || $position || $shape || $state || $size || $sliminess || $smell || $smoothness || $softness || $sound || $stability || $subtleness || $taste || $temperature || $transparency || $capacity || $magnitude || $number || $weight )
	{
		if($color)
		{
			$color = strtolower($color);
			$color = trim($color);
			$color = str_replace(" ","_",$color);
			mysql_query("INSERT INTO color (ArtifactName, Color) VALUES ('$artifact', '$color')", $con1);
		}
		if($constitution)
		{
			$constitution = strtolower($constitution);
			$constitution = trim($constitution);
			$constitution = str_replace(" ","_",$constitution);
			mysql_query("INSERT INTO constitution (ArtifactName, Constitution) VALUES ('$artifact', '$constitution')", $con1);
		}
		if($fluidity)
		{
			$fluidity = strtolower($fluidity);
			$fluidity = trim($fluidity);
			$fluidity = str_replace(" ","_",$fluidity);
			mysql_query("INSERT INTO fluidity (ArtifactName, Fluidity) VALUES ('$artifact', '$fluidity')", $con1);
		}
		if($heaviness)
		{
			$heaviness = strtolower($heaviness);
			$heaviness = str_replace(" ","_",$heaviness);
			mysql_query("INSERT INTO heaviness (ArtifactName, Heaviness) VALUES ('$artifact', '$heaviness')", $con1);
		}
		if($inertness)
		{
			$inertness = strtolower($inertness);
			$inertness = trim($inertness);
			$inertness = str_replace(" ","_",$inertness);
			mysql_query("INSERT INTO inertness (ArtifactName, Inertness) VALUES ('$artifact', '$inertness')", $con1);
		}
		if($mobility)
		{
			$mobility = strtolower($mobility);
			$mobility = trim($mobility);
			$mobility = str_replace(" ","_",$mobility);
			mysql_query("INSERT INTO mobility (ArtifactName, Mobility) VALUES ('$artifact', '$mobility')", $con1);
		}
		if($oilness)
		{
			$oilness = strtolower($oilness);
			$oilness = trim($oilness);
			$oilness = str_replace(" ","_",$oilness);
			mysql_query("INSERT INTO oilness (ArtifactName, Oilness) VALUES ('$artifact', '$oilness')", $con1);
		}
		if($position)
		{
			$position = strtolower($position);
			$position = trim($position);
			$position = str_replace(" ","_",$position);
			mysql_query("INSERT INTO position (ArtifactName,Position) VALUES ('$artifact', '$position')", $con1);
		}

		if($shape)
		{
			$shape = strtolower($shape);
			$shape = trim($shape);
			$shape = str_replace(" ","_",$shape);
			mysql_query("INSERT INTO shape (ArtifactName, Shape) VALUES ('$artifact', '$shape')", $con1);
		}
		if($state)
		{
			$state = strtolower($state);
			$state = trim($state);
			$state = str_replace(" ","_",$state);
			mysql_query("INSERT INTO state (ArtifactName, State) VALUES ('$artifact', '$state')", $con1);
		}
		if($size)
		{
			$size= strtolower($size);
			$size = trim($size);
			$size = str_replace(" ","_",$size);
			mysql_query("INSERT INTO size (ArtifactName, Size) VALUES ('$artifact', '$size')", $con1);
		}
		if($sliminess)
		{
			$sliminess = strtolower($sliminess);
			$sliminess = trim($sliminess);
			$sliminess = str_replace(" ","_",$sliminess);
			mysql_query("INSERT INTO sliminess (ArtifactName, Sliminess) VALUES ('$artifact', '$sliminess')", $con1);
		}
		if($smell)
		{
			$smell = strtolower($smell);
			$smell = trim($smell);
			$smell = str_replace(" ","_",$smell);
			mysql_query("INSERT INTO smell (ArtifactName, Smell) VALUES ('$artifact', '$smell')", $con1);
		}
		if($smoothness)
		{
			$smoothness = strtolower($smoothness);
			$smoothness = trim($smoothness);
			$smoothness = str_replace(" ","_",$smoothness);
			mysql_query("INSERT INTO smooth (ArtifactName, Smooth) VALUES ('$artifact', '$smoothness')", $con1);
		}
		if($softness)
		{
			$softness = strtolower($softness);
			$softness = trim($softness);
			$softness = str_replace(" ","_",$softness);
			mysql_query("INSERT INTO softness (ArtifactName, Softness) VALUES ('$artifact', '$softness')", $con1);
		}
		if($sound)
		{
			$sound = strtolower($sound);
			$sound = trim($sound);
			$sound = str_replace(" ","_",$sound);
			mysql_query("INSERT INTO sound (ArtifactName, Sound) VALUES ('$artifact', '$sound')", $con1);
		}
		if($stability)
		{
			$stability = strtolower($stability);
			$stability = trim($stability);
			$stability = str_replace(" ","_",$stability);
			mysql_query("INSERT INTO stability (ArtifactName, Stability) VALUES ('$artifact', '$stability')", $con1);
		}
		if($subtleness)
		{
			$subtleness = strtolower($subtleness);
			$subtleness = trim($subtleness);
			$subtleness = str_replace(" ","_",$subtleness);
			mysql_query("INSERT INTO subtleness (ArtifactName, Subtleness) VALUES ('$artifact', '$subtleness')", $con1);
		}
		if($taste)
		{
			$taste = strtolower($taste);
			$taste = trim($taste);
			$taste = str_replace(" ","_",$taste);
			mysql_query("INSERT INTO taste (ArtifactName, Taste) VALUES ('$artifact', '$taste')", $con1);
		}
		if($temperature)
		{
			$temperature = strtolower($temperature);
			$temperature = trim($temperature);
			$temperature = str_replace(" ","_",$temperature);
			mysql_query("INSERT INTO temperature (ArtifactName, Temperature) VALUES ('$artifact', '$temperature')", $con1);
		}
		if($transparency)
		{
			$transparency = strtolower($transparency);
			$transparency = trim($transparency);
			$transparency = str_replace(" ","_",$transparency);
			mysql_query("INSERT INTO transparency (ArtifactName, Transparency) VALUES ('$artifact', '$transparency')", $con1);
		}
		if($capacity)
		{
			$capacity = strtolower($capacity);
			$capacity = trim($capacity);
			$capacity = str_replace(" ","_",$capacity);
			mysql_query("INSERT INTO capacity (ArtifactName, Capacity) VALUES ('$artifact', '$capacity')", $con1);
		}
		if($magnitude)
		{
			$magnitude = strtolower($magnitude);
			$magnitude = trim($magnitude);
			$magnitude = str_replace(" ","_",$magnitude);
			mysql_query("INSERT INTO magnitude (ArtifactName, Magnitude) VALUES ('$artifact', '$magnitude')", $con1);
		}
		if($number)
		{
			$number = strtolower($number);
			$number = trim($number);
			$number = str_replace(" ","_",$number);
			mysql_query("INSERT INTO number (ArtifactName, Number) VALUES ('$artifact', '$number')", $con1);
		}
		if($weight)
		{
			$weight = strtolower($weight);
			$weight = trim($weight);
			$weight = str_replace(" ","_",$weight);
			mysql_query("INSERT INTO weight (ArtifactName, Weight) VALUES ('$artifact', '$weight')", $con1);
		}
		$flag=2;
		unset($_POST["add"]);
	}
	else
	{
		$flag=3;
	}
}
else if($submit)
{
	header("Location:./actionFeature.php");
}
else if($change)
{
	mysql_close($con1);
	include("db_connection.php");
	$domain = $_SESSION["domain"];
	$l = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
	$tmp = mysql_fetch_array($l)["main"];
	$main = $tmp;
}
else;

?>
<html lang="en">
<head>
	<title>Descriptor Feature</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/descriptorFeatureJS.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Purposenet, Purpose net, PurposeNet, Ontology, KnowledgeBase, Knowledgebase">
	<meta name="author" content="Anshu Shekhar and Rishabh Shrivastav">
	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#fourth").css('background-color','rgb(120,120,120)');
$("#fourth").css('border-radius','30px');
$("#fourthtext").css('color','White');
</script>
<style type="text/css">
	#dropdownList { text-align:center;  }
	.dropdown { float:left; }
	#dropdownButton { width:175px; }
	#formGroupDescriptive { margin-left:75px; margin-right:auto; }
	#inputArea { width:600px; }
</style>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4); padding:20px; width:90%; margin:auto; ">
	<form action="./descriptorFeature.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the descriptive features of the artifact '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>'
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		</p>
<?php
if ($flag == 3)
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flag == 2)
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
		<form id="descriptiveForm" class="form-horizontal" role="form" action="./descriptorFeature.php" method="post">
			<div class="form-group" id="formGroupDescriptive">
						<div class="dropdown">
							<form id="dropdownForm" class="dropdown">
							<button type="button" name="dropdown" id="dropdownButton" class="btn btn-default" data-target="#" data-toggle="dropdown" data-placement="right">Choose Features &nbsp;<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li class="dropdownList" id="default" name="default" role="presentation" value="default"><a role="menuitem" href="#">Choose Features</a></li>
									<li role="presentation" class="divider"></li>
									<li class="dropdownList" id="color" name="list" role="presentation" value="color"><a role="menuitem" href="#">Color</a></li>
									<li class="dropdownList" id= "constitution" name="list" role="presentation" value="constitution"><a role="menuitem" href="#">Constitution</a></li>
									<li class="dropdownList" id= "fluidity" name="list" role="presentation" value="fluidity"><a role="menuitem" href="#">Fluidity</a></li>
									<li class="dropdownList" id="heaviness" name="list" role="presentation" value="heaviness"><a role="menuitem" href="#">Heaviness</a></li>
									<li class="dropdownList" id="inertness" name="list" role="presentation" value="inertness"><a role="menuitem" href="#">Inertness</a></li>
									<li class="dropdownList" id="mobility" name="list" role="presentation" value="mobility"><a role="menuitem" href="#">Mobility</a></li>
									<li class="dropdownList" id="oilness" name="list" role="presentation" value="oilness"><a role="menuitem" href="#">Oilness</a></li>
									<li class="dropdownList" id="position" name="list" role="presentation" value="position"><a role="menuitem" href="#">Position</a></li>
									<li class="dropdownList" id="shape"name="list" role="presentation" value="shape"s><a role="menuitem" href="#">Shape</a></li>
									<li class="dropdownList" id="size" name="list" role="presentation" value="size"><a role="menuitem" href="#">Size</a></li>
									<li class="dropdownList" id="sliminess" name="list" role="presentation" value="sliminess"><a role="menuitem" href="#">Sliminess</a></li>
									<li class="dropdownList" id="smell" name="list" role="presentation" value="smell"><a role="menuitem" href="#">Smell</a></li>
									<li class="dropdownList" id="smoothness" name="list" role="presentation" value="smoothness"><a role="menuitem" href="#">Smoothness</a></li>
									<li class="dropdownList" id="softness" name="list" role="presentation" value="softness"><a role="menuitem" href="#">Softness</a></li>
									<li class="dropdownList" id="sound" name="list" role="presentation" value="sound"><a role="menuitem" href="#">Sound</a></li>
									<li class="dropdownList" id="stability" name="list" role="presentation" value="stability"><a role="menuitem" href="#">Stability</a></li>
									<li class="dropdownList" id="state" name="list" role="presentation" value="state"><a role="menuitem" href="#">State</a></li>
									<li class="dropdownList" id="subtleness" name="list" role="presentation" value="subtleness"><a role="menuitem" href="#">Subtleness</a></li>
									<li class="dropdownList" id="taste" name="list" role="presentation" value="taste"><a role="menuitem" href="#">Taste</a></li>
									<li class="dropdownList" id="temperature" name="list" role="presentation" value="temperature"><a role="menuitem" href="#">Temperature</a></li>
									<li class="dropdownList" id="transparency" name="list" role="presentation" value="transparency"><a role="menuitem" href="#">Transparency</a></li>
									<li class="dropdownList" id="capacity" name="list" role="presentation" value="capacity"><a role="menuitem" href="#">Capacity</a></li>
									<li class="dropdownList" id="magnitude" name="list" role="presentation" value="magnitude"><a role="menuitem" href="#">Magnitude</a></li>
									<li class="dropdownList" id="number" name="list" role="presentation" value="number"><a role="menuitem" href="#">Number</a></li>
									<li class="dropdownList" id="weight" name="list" role="presentation" value="weight"><a role="menuitem" href="#">Standard Weight</a></li>
							</ul>
						</div>
						<div class="col-sm-10">
							&nbsp;
							<input type="hidden" id="hiddenDescriptiveFeature" name="feature" value="default">
							<input type="text" name="textValue" class="form-control" id="inputArea" placeholder="Select a role first from the dropdown menu on the left" autocomplete="off" disabled>
							&nbsp;
							
							<button type="button" name="example" id="example" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Example in context of a car</b>" data-html="<p><i></i><br/></p>" data-content="<i>Please first select a descriptive feature from the dropdown menu on the left!</i>" style="text-align:left; margin-right:auto;">View Example</button>
								<script>
									$(function () 
										{ $("[data-toggle='popover']").popover();
										});
								</script>		
						</div>
					</form>
				</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10" id="submitButton" align="center">
					<input type="hidden" name="main" value=<?php echo $main; ?> />
					<button type="submit" id="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
					<button type="submit" id="next" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
				</div>
			</div>
		</form>
	</form>
</div>

</body>
</html>