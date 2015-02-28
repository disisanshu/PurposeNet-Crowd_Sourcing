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
$textValue= $_POST["textValue"];
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
$con1= mysql_connect("localhost","root","disisanshu") or die(mysql_error());
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
			$arr= explode(",", $color);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO color (ArtifactName, Color) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($constitution)
		{
			$constitution = strtolower($constitution);
			$constitution = trim($constitution);
			$constitution = str_replace(" ","_",$constitution);
			$arr= explode(",", $constitution);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO constitution (ArtifactName, Constitution) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($fluidity)
		{
			$fluidity = strtolower($fluidity);
			$fluidity = trim($fluidity);
			$fluidity = str_replace(" ","_",$fluidity);
			$arr= explode(",", $fluidity);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO fluidity (ArtifactName, Fluidity) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($heaviness)
		{
			$heaviness = strtolower($heaviness);
			$heaviness= trim($heaviness);
			$heaviness = str_replace(" ","_",$heaviness);
			$arr= explode(",", $heaviness);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO heaviness (ArtifactName, Heaviness) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($inertness)
		{
			$inertness = strtolower($inertness);
			$inertness = trim($inertness);
			$inertness = str_replace(" ","_",$inertness);
			$arr= explode(",", $inertness);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO inertness (ArtifactName, Inertness) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($mobility)
		{
			$mobility = strtolower($mobility);
			$mobility = trim($mobility);
			$mobility = str_replace(" ","_",$mobility);
			$arr= explode(",", $mobility);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO mobility (ArtifactName, Mobility) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($oilness)
		{
			$oilness = strtolower($oilness);
			$oilness = trim($oilness);
			$oilness = str_replace(" ","_",$oilness);
			$arr= explode(",", $oilness);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO oilness (ArtifactName, Oilness) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($position)
		{
			$position = strtolower($position);
			$position = trim($position);
			$position = str_replace(" ","_",$position);
			$arr= explode(",", $position);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO `position` (ArtifactName, `Position`) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}

		if($shape)
		{
			$shape = strtolower($shape);
			$shape = trim($shape);
			$shape = str_replace(" ","_",$shape);
			$arr= explode(",", $shape);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO shape (ArtifactName, Shape) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($state)
		{
			$state = strtolower($state);
			$state = trim($state);
			$state = str_replace(" ","_",$state);
			$arr= explode(",", $state);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO state (ArtifactName, State) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($size)
		{
			$size= strtolower($size);
			$size = trim($size);
			$size = str_replace(" ","_",$size);
			$arr= explode(",", $size);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO size (ArtifactName, Size) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($sliminess)
		{
			$sliminess = strtolower($sliminess);
			$sliminess = trim($sliminess);
			$sliminess = str_replace(" ","_",$sliminess);
			$arr= explode(",", $sliminess);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO sliminess (ArtifactName, Sliminess) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($smell)
		{
			$smell = strtolower($smell);
			$smell = trim($smell);
			$smell = str_replace(" ","_",$smell);
			$arr= explode(",", $smell);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO smell (ArtifactName, Smell) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($smoothness)
		{
			$smoothness = strtolower($smoothness);
			$smoothness = trim($smoothness);
			$smoothness = str_replace(" ","_",$smoothness);
			$arr= explode(",", $smoothness);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO smooth (ArtifactName, Smooth) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($softness)
		{
			$softness = strtolower($softness);
			$softness = trim($softness);
			$softness = str_replace(" ","_",$softness);
			$arr= explode(",", $softness);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO softness (ArtifactName, Softness) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($sound)
		{
			$sound = strtolower($sound);
			$sound = trim($sound);
			$sound = str_replace(" ","_",$sound);
			$arr= explode(",", $sound);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO sound (ArtifactName, Sound) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($stability)
		{
			$stability = strtolower($stability);
			$stability = trim($stability);
			$stability = str_replace(" ","_",$stability);
			$arr= explode(",", $stability);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO stability (ArtifactName, Stability) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($subtleness)
		{
			$subtleness = strtolower($subtleness);
			$subtleness = trim($subtleness);
			$subtleness = str_replace(" ","_",$subtleness);
			$arr= explode(",", $subtleness);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO subtleness (ArtifactName, Subtleness) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($taste)
		{
			$taste = strtolower($taste);
			$taste = trim($taste);
			$taste = str_replace(" ","_",$taste);
			$arr= explode(",", $taste);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO taste (ArtifactName, Taste) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($temperature)
		{
			$temperature = strtolower($temperature);
			$temperature = trim($temperature);
			$temperature = str_replace(" ","_",$temperature);
			$arr= explode(",", $temperature);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO temperature (ArtifactName, Temperature) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($transparency)
		{
			$transparency = strtolower($transparency);
			$transparency = trim($transparency);
			$transparency = str_replace(" ","_",$transparency);
			$arr= explode(",", $transparency);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO transparency (ArtifactName, Transparency) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($capacity)
		{
			$capacity = strtolower($capacity);
			$capacity = trim($capacity);
			$capacity = str_replace(" ","_",$capacity);
			$arr= explode(",", $capacity);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO capacity (ArtifactName, Capacity) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($magnitude)
		{
			$magnitude = strtolower($magnitude);
			$magnitude = trim($magnitude);
			$magnitude = str_replace(" ","_",$magnitude);
			$arr= explode(",", $magnitude);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO magnitude (ArtifactName, Magnitude) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($number)
		{
			$number = strtolower($number);
			$number = trim($number);
			$number = str_replace(" ","_",$number);
			$arr= explode(",", $number);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO number (ArtifactName, Number) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
		}
		if($weight)
		{
			$weight = strtolower($weight);
			$weight = trim($weight);
			$weight = str_replace(" ","_",$weight);
			$arr= explode(",", $weight);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				mysql_query("INSERT INTO weight (ArtifactName, Weight) VALUES ('$artifact', '$arr[$i]')", $con1);
			}
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
	<!--<script type="text/javascript" src="js/descriptorFeatureJS.js"></script>-->

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
<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
          <h3 class="modal-title" id="myModalLabel">Descriptor Features</h3>
        </div>
        <div class="modal-body">
        	<p>
        		The descriptor features of PurposeNet have three constituents that are similar to WordNet, viz., Name, Alias and 
        		Description. But, it has an additional complex feature called properties. Properties of an artifact explain the various 
        		morphological features of an artifact. These features are such that the values of each of these features qualify the 
        		artifact as being fit to be used for the purpose for which it has been invented. Also, based on the kind of values that 
        		these properties take, i.e., numeric or nonnumeric, we have categorized the descriptor - properties into two, 
        		<i>Nonnumeric</i> and <i>Numeric</i>.
        		</br>
        	</p>
        	<hr>
          	<h4>Nonnumeric Descriptor Properties</h4>
          	<p>The various Nonnumeric-descriptor-property features of an artifact in alphabetic order are -</p>
          	<ol>
          	<hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Color</b></span></br>
	          		<p style="margin-left:15px;">
	          			The usual color in which this artifact appears after manufacture.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The color of a Paper is usually white.</span>
	          		</p>
	          	</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Constitution</b></span></br>
	          		<p style="margin-left:15px;">
	          			The material with which this artifact is mostly made of. The possible materials are Carbon, Wood, Glass, Metal, 
	          			Plastic, Foam, Rubber and Silicon.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The constitution of a Table is Wood.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Fluidity</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property refers to the physical property of a substance that enables it to flow. It takes the values 
	          			fluid and nonfluid.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Juice is fluid, and so is Cement.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Heaviness</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property refers to whether an artifact is Light, Moderate or Heavy in weight.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Screws are light and Ships are heavy.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Inertness</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property refers to whether an artifact is Acidic, Alkaline or Neutral.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Lime Juice is acidic.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Mobility</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates whether the given artifact moves in course of its action to achieve its purpose, 
	          			or remains stationary.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">a Car is mobile, whereas a Cell Phone is stationary.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Oiliness</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates if the surface of the artifact is oily or not.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The surface of a Carburetor is oily.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Position</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates where the component artifact is located vis-a-vis the artifact in which it is resident.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">a Clutch is located inside the Car, of which it happens to be a component.</span>
	          		</p>
          		</li>
          	<hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Shape</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates the general shape of the artifact. The various shapes defined are cubical, cuboidal, 
	          			spherical, hemispherical, aerodynamic, conical, cylindrical, circular, oval and flat.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">a Truck is Large in size.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Size</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property refers to the amount of space occupied by the artifact. The possible adjectives are microscopic, 
	          			very small, small, medium and Large and compared with the human body.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The color of a Paper is usually white.</span></br>
	          			This property, however, has nothing to do with Heaviness.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">an Iron Rod is heavier than a Giant Balloon of a bigger size.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Sliminess</b></span></br>
	          		<p style="margin-left:15px;">
	          			This refers to the stickiness property of a substance. It takes the values Slimy and Nonslimy.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Castor oil is slimy, whereas Mineral Oil is nonslimy.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Smell</b></span></br>
	          		<p style="margin-left:15px;">
	          			It indicates the property of an artifact that is sensed by the nose. It is again categorized into two- 
	          			Intensity and odour character. There are six possible Intensity values – No odour, Weak, Very Weak, Distinct, 
	          			Strong and Intolerable. Odour characteristics may take one of the six values - Sweet, pungent, acrid, 
	          			fragrant, warm, dry and sour values.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">the odour intensity of cologne is distinct. Similarly, the smell of room freshener is fragrant.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Smoothness</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates the texture of the surface of an artifact.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The surface of a Knife is sharp, whereas a BasketBall is smooth.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Softness</b></span></br>
	          		<p style="margin-left:15px;">
	          			This indicates whether the artifact is easily deformed on application of stress. It takes the values soft and hard.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">a stuffed toy is soft, whereas, a Toy Gun is hard.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Sound</b></span></br>
	          		<p style="margin-left:15px;">
	          			An Artifact may or may not produce sounds in course of achievement of its purpose. These sound values are Silent, 
	          			Whisper, Bearable_Sound and Unbearable_Sound.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The sound of an Atom Bomb is unbearable.</span></br>
	          			Sounds produced by an artifact because of wear and tear are not incorporated here.</br>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Stability</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates whether the given artifact remains as it is or disintegrates in normal environment.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Ice is unstable.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>State</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property shows the Physical state in which the artifact usually exists.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The State of Paper is Solid.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Subtleness</b></span></br>
	          		<p style="margin-left:15px;">
	          			It indicates whether the artifact can be perceived visually or not.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Power is a Subtle artifact, whereas an Electrical_Wire is NonSubtle.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Taste</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates the various tastes that can be perceived by the tongue with respect to an artifact. 
	          			This attribute is very important for artifacts whose chief characteristic is taste, like, for example, Food. 
	          			It takes one of the five values- Sweet, Salty, Sour, Bitter and Umami (or delicious).</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Sugar is Sweet to taste.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Temperature</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates the temperature in which the artifact usually functions. The possible values are cold, 
	          			cool, room temperature, warm, and hot.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Tea is usually Hot, whereas, Ice Cream is Cold.</span>
	          		</p>
	          	</li>
	        <hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Transparency</b></span></br>
	          		<p style="margin-left:15px;">
	          			This property indicates the thickness of surface of an artifact. The possible values are - 
	          			Transparent, Semi-Transparent, and Opaque.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Plastic is Semi-transparent</span>
	          		</p>
	          	</li>
	        <hr>
	    </ol>
        <h4>Numeric Descriptor Property</h4>
        <p>The numeric descriptor values are those that take numeric type values for their features. The various Numeric Descriptor 
        	Property features are -</p>
        <ol>
          	<hr>
	          	<li>
	          		<span style="font-size:18px;"><b>Capacity</b></span></br>
	          		<p style="margin-left:15px;">
	          			The maximum weight that this artifact can hold.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">the capacity of a heavy duty chair is 500 lbs.</span>
	          		</p>
	          	</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Magnitude</b></span></br>
	          		<p style="margin-left:15px;">
	          			The various standard dimensions of a sample of the artifact. Further subproperties here are- length, breadth, 
	          			height, and, radius.</br>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Number</b></span></br>
	          		<p style="margin-left:15px;">
	          			It indicates the standard number of items that come in a set (if any) of this artifact.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">Footwear always comes in pairs.</span>
	          		</p>
          		</li>
          	<hr>
          		<li>
          			<span style="font-size:18px;"><b>Standard Weight</b></span></br>
	          		<p style="margin-left:15px;">
	          			Most artifacts have a standard weight associated with them. This property indicates that weight.</br>
	          			<span style="font-size:13px; margin-left:30px;"><b><i>For example : </i></b></span>
	          			<span style="font-size:15px;">The standard weight of a Sugar Packet would be 1 Kilogram</span>
	          		</p>
          		</li>
          	</ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
	<form action="./descriptorFeature.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the descriptive features of the artifact '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>'
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
			<button class="btn btn-warning pull-right" id="trigger" data-toggle="modal" data-target="#myModal">Help</button>
		</p>
	</form>
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
			</br>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10" id="submitButton" align="center">
					<input type="hidden" name="main" value=<?php echo $main; ?> />
					<button type="submit" id="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
					<button type="submit" id="next" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
				</div>
			</div>
		</div>
	</form>
</div>

</body>
</html>
<script>
$(document).ready(function(){
	$("li").click(function(){
		var valueDrop= $(this).attr("id");
		switch(valueDrop){
			case "default":
					$("#dropdownButton").html('Choose Features &nbsp;<span class="caret"></span>');
					$("#inputArea").attr({ "placeholder": "Select a role first from the dropdown menu on the left", "disabled":""} );
					$("#example").attr({ "data-title": "<b>First select a role!</b>", "data-content": "<i>Please first select a semantic role from the dropdown menu on the left!</i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "default" });
					break;
				case "color":
					$("#dropdownButton").html('Color &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Color: the usual color in which this artifact appears after manufacture").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Color in context of paper:</b>", "data-content": "<i><ul><li> White</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "color" });
					break;
				case "constitution":
					$("#dropdownButton").html('Constitution &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Constitution: the material with which this artifact is mostly made of").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Constitution in context of table:</b>", "data-content": "<i><ul><li> Wood</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "constitution" });
					break;
				case "fluidity":
					$("#dropdownButton").html('Fluidity &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Fluidity: property of a substance that enables it to flow. It takes the values fluid and nonfluid.").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Fluidity in context of juice:</b>", "data-content": "<i><ul><li> Fluid</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "fluidity" });
					break;
				case "heaviness":
					$("#dropdownButton").html('Heaviness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Heaviness: refers to whether an artifact is Light, Moderate or Heavy in weight").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Heaviness in context of screws:</b>", "data-content": "<i><ul><li> Light</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "heaviness" });
					break;
				case "inertness":
					$("#dropdownButton").html('Inertness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Inertness: refers to whether an artifact is Acidic, Alkaline or Neutral").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Inertness in context of Lime juice:</b>", "data-content": "<i><ul><li><li> Acidic</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "inertness" });
					break;
				case "mobility":
					$("#dropdownButton").html('Mobility &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Mobility: indicates whether the given artifact moves in course of its action or remains stationary").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Mobility in context of a car:</b>", "data-content": "<i><ul><li> Mobile</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "mobility" });
					break;
				case "oilness":
					$("#dropdownButton").html('Oilness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Oilness: indicates if the surface of the artifact is oily or not").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Oilness in context of carburetor:</b>", "data-content": "<i><ul><li> Oily</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "oilness" });
					break;
				case "position":
					$("#dropdownButton").html('Position &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Position: indicates where the component artifact is located vis-a-vis the artifact in which 	it is resident").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Position in context of Clutch:</b>", "data-content": "<i><ul><li> Located inside the car</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "position" });
					break;
				case "shape":
					$("#dropdownButton").html('Shape &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Shape: indicates the general shape of the artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Shape in context of Racing Track:</b>", "data-content": "<i><ul><li> Oval</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "shape" });
					break;
				case "size":
					$("#dropdownButton").html('Size &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Size: refers to the amount of space occupied by the artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Size in context of a car:</b>", "data-content": "<i><ul><li> Moderate</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "size" });
					break;
				case "sliminess":
					$("#dropdownButton").html('Sliminess &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Sliminess: refers to the stickiness property of a substance").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Sliminess in context of Mineral Oil:</b>", "data-content": "<i><ul><li> Nonslimmy</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "sliminess" });
					break;
				case "smell":
					$("#dropdownButton").html('Smell &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Smell: indicates the property of an artifact that is sensed by the nose").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Smell in context of a Room Freshner:</b>", "data-content": "<i><ul><li> Fragrant</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "smell" });
					break;
				case "smoothness":
					$("#dropdownButton").html('Smoothness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Smoothness: indicates the texture of the surface of an artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Smoothness in context of Knife:</b>", "data-content": "<i><ul><li> Sharp</li>></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "smoothness" });
					break;
				case "softness":
					$("#dropdownButton").html('Softness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Softness: indicates whether the artifact is easily deformed on application of stress").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Softness in context of a Toy Gun:</b>", "data-content": "<i><ul><li> Hard</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "softness" });
					break;
				case "sound":
					$("#dropdownButton").html('Sound &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Sound: values are Silent, Whisper, Bearable_Sound and Unbearable_Sound").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Sound in context of Atom Bomb:</b>", "data-content": "<i><ul><li> Unbearable</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "sound" });
					break;
				case "stability":
					$("#dropdownButton").html('Stability &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Stability: indicates whether the artifact remains as it is or disintegrates in normal").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Stability in context of Ice:</b>", "data-content": "<i><ul><li> Unstable</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "stability" });
					break;
				case "state":
					$("#dropdownButton").html('State &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "State: shows the Physical state in which the artifact usually exists").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>State in context of paper:</b>", "data-content": "<i><ul><li> Solid</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "state" });
					break;
				case "subtleness":
					$("#dropdownButton").html('Subtleness &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Subtleness: indicates whether the artifact can be perceived visually or not").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Subtleness in context of Power:</b>", "data-content": "<i><ul><li> Subtle</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "subtleness" });
					break;
				case "taste":
					$("#dropdownButton").html('Taste &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Taste: indicates the various tastes that can be perceived by the tongue").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Taste in context of Sugar</b>", "data-content": "<i><ul><li> Sweet</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "taste" });
					break;
				case "temperature":
					$("#dropdownButton").html('Temperature &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Temperature: indicates the temperature in which the artifact usually functions").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Temperature in context of Ice cream:</b>", "data-content": "<i><ul><li> Cold</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "temperature" });
					break;
				case "transparency":
					$("#dropdownButton").html('Transparency &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Transparency: indicates the thickness of surface of an artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Transparency in context of Plastic</b>", "data-content": "<i><ul><li> Semi-Transparent</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "transparency" });
					break;
				case "capacity":
					$("#dropdownButton").html('Capacity &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Capacity: maximum weight that this artifact can hold(integer value)").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Capacity in context of a heavy-duty chair(in lbs)</b>", "data-content": "<i><ul><li> 500</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "capacity" });
					break;
				case "magnitude":
					$("#dropdownButton").html('Magnitude &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Magnitude: standard dimensions of a sample of the artifact(integer value)").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Length in context of a ladder(in m)</b>", "data-content": "<i><ul><li> 5</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "magnitude" });
					break;
				case "number":
					$("#dropdownButton").html('Number &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Number: indicates the standard number of items that come in a set of this artifact").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Number in context of Footwear</b>", "data-content": "<i><ul><li> 2</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "number" });
					break;
				case "weight":
					$("#dropdownButton").html('Standard Weight &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Standard Weight: indicates the weight of the artifact(integer value)").removeAttr("disabled");
					$("#example").attr({ "data-title": "<b>Standard Weight in context of a Sugar packet(in kg)</b>", "data-content": "<i><ul><li> 1</li></ul></i>" });
					$("#hiddenDescriptiveFeature").attr({ "value": "weight" });
					break;
				default:
					$("#dropdownButton").html('Choose Features &nbsp;<span class="caret"></span>');
		}
	});
});
</script>