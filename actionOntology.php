<!DOCTYPE HTML>
<?php
include("login_check.php");
include("db_connection.php");
//include("db_connection1.php");
/*
	Database Information:
	$con connected through database pnet.
	$con1 connected through database purposenet.
*/

$defaultTab= "precondition";
$main= $_POST["main"];
if($main);
else if(isset($_SESSION["main"]))
{
	$main= $_SESSION["main"];
}
else
{
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc  WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
	$main = mysql_fetch_array($result)["main"];
}
$actionName= $_SESSION["action"];
if($actionName);
else
{
	$actionDb= mysql_query("SELECT * FROM `usage` WHERE main='$main' ORDER BY RAND() LIMIT 1", $con);
	$actionName= mysql_fetch_array($actionDb)["purpose"];
	if(!$actionName)
	{
		$actionDb= mysql_query("SELECT * FROM `usage` ORDER BY RAND() LIMIT 1", $con);
		$actionNmain= mysql_fetch_array($actionDb);
		$actionName= $actionNmain['purpose'];
		$main= $actionNmain['main'];
		$_SESSION["main"]= $main;
	}
}
$change= $_POST["change"];

$cond1= $_POST["cond1"];
$cond2= $_POST["cond2"];
$cond3= $_POST["cond3"];
$cond4= $_POST["cond4"];
$cond5= $_POST["cond5"];
$addPrecondition= $_POST["addPrecondition"];
$submitPrecondition= $_POST["submitPrecondition"];
$resultOutcome= $_POST["result"];
$sideeffects= $_POST["sideeffects"];
$wearNtear= $_POST["wearNtear"];
$maintainance= $_POST["maintainance"];
$addOutcome= $_POST["addOutcome"];
$submitOutcome= $_POST["submitOutcome"];
$subact1= $_POST["subact1"];
$subact2= $_POST["subact2"];
$subact3= $_POST["subact3"];
$subact4= $_POST["subact4"];
$subact5= $_POST["subact5"];
$addSubaction= $_POST["addSubaction"];
$submitSubaction= $_POST["submitSubaction"];
$semanticRole= $_POST["semanticRole"];
$textValueSemantic= $_POST["textValueSemantic"];
switch ($semanticRole) {
	case 'actor':
		$actor= $textValueSemantic;
		break;
	case 'agent':
		$agent= $textValueSemantic;
		break;
	case 'asset':
		$asset= $textValueSemantic;
		break;
	case 'attribute':
		$attribute= $textValueSemantic;
		break;
	case 'beneficiary':
		$beneficiary= $textValueSemantic;
		break;
	case 'cause':
		$cause= $textValueSemantic;
		break;
	case 'destination':
		$destination= $textValueSemantic;
		break;
	case 'source':
		$source= $textValueSemantic;
		break;
	case 'location':
		$location= $textValueSemantic;
		break;
	case 'experiencer':
		$experiencer= $textValueSemantic;
		break;
	case 'extent':
		$extent= $textValueSemantic;
		break;
	case 'instrument':
		$instrument= $textValueSemantic;
		break;
	case 'material':
		$material= $textValueSemantic;
		break;
	case 'patient':
		$patient= $textValueSemantic;
		break;
	case 'prediacte':
		$prediacte= $textValueSemantic;
		break;
	case 'recipient':
		$recipient= $textValueSemantic;
		break;
	case 'stimulus':
		$stimulus= $textValueSemantic;
		break;
	case 'theme':
		$theme= $textValueSemantic;
		break;
	case 'time':
		$time= $textValueSemantic;
		break;
	case 'topic':
		$topic= $textValueSemantic;
		break;
	
	default:
		$default= $textValueSemantic;
		break;
}
$addSemanticRoles= $_POST["addSemanticRoles"];
$submitSemanticRoles= $_POST["submitSemanticRoles"];
if(isset($_POST["change"]))
{
	while(1){
		$domain = $_SESSION["domain"];
		$l = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
		$tmp = mysql_fetch_array($l)["main"];
		$prev= $main;
		if($main != $tmp)
		{
			$main = $tmp;
			$actionDb= mysql_query("SELECT * FROM `usage` WHERE main='$main' ORDER BY RAND() LIMIT 1", $con);
			$actionName= mysql_fetch_array($actionDb)["purpose"];
			if(!$actionName)
			{
				$actionDb= mysql_query("SELECT * FROM `usage` ORDER BY RAND() LIMIT 1", $con);
				$actionNmain= mysql_fetch_array($actionDb);
				$actionName= $actionNmain['purpose'];
				$main= $actionNmain['main'];
				$_SESSION["main"]= $main;
			}
			unset($_POST["change"]);
			if($main != $prev)
				break;
		}
	}

}
mysql_close($con);
$con1= mysql_connect("localhost","root","disisanshu") or die(mysql_error());
$purposenet= mysql_select_db("purposenet", $con1);
session_start();
// CODE for 'Submit' button on PreCondition tab
if(isset($_POST["addPrecondition"]))
{
	$flagPre=0;
	$defaultTab= "precondition";
	if($cond1 || $cond2 || $cond3 || $cond4 || $cond5)
	{
		if($cond1)
		{
			$cond1= strtolower($cond1);
			$cond1= trim($cond1);
			$cond1= str_replace(" ","_", $cond1);
			mysql_query("INSERT INTO precondition (ActionName, Precondition) VALUES ('$actionName', '$cond1')", $con1);
		}
		if($cond2)
		{
			$cond2= strtolower($cond2);
			$cond2= trim($cond2);
			$cond2= str_replace(" ","_", $cond2);
			mysql_query("INSERT INTO precondition (ActionName, Precondition) VALUES ('$actionName', '$cond2')", $con1);
		}
		if($cond3)
		{
			$cond3= strtolower($cond3);
			$cond3= trim($cond3);
			$cond3= str_replace(" ","_", $cond3);
			mysql_query("INSERT INTO precondition (ActionName, Precondition) VALUES ('$actionName', '$cond3')", $con1);
		}
		if($cond4)
		{
			$cond4= strtolower($cond4);
			$cond4= trim($cond4);
			$cond4= str_replace(" ","_", $cond4);
			mysql_query("INSERT INTO precondition (ActionName, Precondition) VALUES ('$actionName', '$cond4')", $con1);
		}
		if($cond5)
		{
			$cond5= strtolower($cond5);
			$cond5= trim($cond5);
			$cond5= str_replace(" ","_", $cond5);
			mysql_query("INSERT INTO precondition (ActionName, Precondition) VALUES ('$actionName', '$cond5')", $con1);
		}
		$flagPre=2;
		unset($_POST["addPrecondition"]);
	}
	else
	{
		$flagPre= 3;
	}
	
	
}
// CODE for 'Submit' button on Outcomes tab
if(isset($_POST["addOutcome"]))
{
	$flagOut=0;
	$defaultTab= "outcomes";
	if($resultOutcome || $sideeffects || $wearNtear || $maintainance)
	{
		if($resultOutcome)
		{
			$resultOutcome = strtolower($resultOutcome);
			$resultOutcome = trim($resultOutcome);
			$resultOutcome = str_replace(" ","_",$resultOutcome);
			mysql_query("INSERT INTO result (ActionName, Result) VALUES ('$actionName', '$result')", $con1);			
		}
		if($sideeffects)
		{
			$sideeffects = strtolower($sideeffects);
			$sideeffects = trim($sideeffects);
			$sideeffects = str_replace(" ","_",$sideeffects);
			$sideeffectsDB= mysql_query("SELECT * FROM sideeffect WHERE ActionName='$actionName' AND Sideeffect='$sideeffects'", $con1);
			mysql_query("INSERT INTO sideeffect (ActionName, Sideeffect) VALUES ('$actionName', '$sideeffects')", $con1);
		}
		if($wearNtear)
		{
			$wearNtear = strtolower($wearNtear);
			$wearNtear = trim($wearNtear);
			$wearNtear = str_replace(" ","_",$wearNtear);
			$wearNtearDB= mysql_query("SELECT * FROM wearandtear WHERE ActionName='$actionName' AND WearandTear='$wearNtear'", $con1);
			mysql_query("INSERT INTO wearandtear (ActionName, WearandTear) VALUES ('$actionName', '$wearNtear')", $con1);
		}
		if($maintainance)
		{
			$maintainance = strtolower($maintainance);
			$maintainance = trim($maintainance);
			$maintainance = str_replace(" ","_",$maintainance);
			$maintainanceDB= mysql_query("SELECT * FROM maintenance WHERE ActionName='$actionName' AND maintenance='$maintainance'", $con1);
			mysql_query("INSERT INTO maintenance (ActionName, maintenance) VALUES ('$actionName', '$maintainance')", $con1);
		}
		$flagOut=2;
		unset($_POST["addOutcome"]);
	}
	else
	{
		$flagOut=3;
	}
}
// CODE for 'Submit' button on Subaction tab
if(isset($_POST["addSubaction"]))
{
	$flagSub=0;
	$defaultTab= "subactions";
	if($subact1 || $subact2 || $subact3 || $subact4 || $subact5)
	{
		if($subact1)
		{
			$subact1= strtolower($subact1);
			$subact1= trim($subact1);
			$subact1= str_replace(" ","_", $subact1);
			mysql_query("INSERT INTO subaction (ActionName, Subaction) VALUES ('$actionName', '$subact1')", $con1);
		}
		if($subact2)
		{
			$subact2= strtolower($subact2);
			$subact2= trim($subact2);
			$subact2= str_replace(" ","_", $subact2);
			mysql_query("INSERT INTO subaction (ActionName, Subaction) VALUES ('$actionName', '$subact2')", $con1);
		}
		if($subact3)
		{
			$subact3= strtolower($subact3);
			$subact3= trim($subact3);
			$subact3= str_replace(" ","_", $subact3);
			mysql_query("INSERT INTO subaction (ActionName, Subaction) VALUES ('$actionName', '$subact3')", $con1);
		}
		if($subact4)
		{
			$subact4= strtolower($subact4);
			$subact4= trim($subact4);
			$subact4= str_replace(" ","_", $subact4);
			mysql_query("INSERT INTO subaction (ActionName, Subaction) VALUES ('$actionName', '$subact4')", $con1);
		}
		if($subact5)
		{
			$subact5= strtolower($subact5);
			$subact5= trim($subact5);
			$subact5= str_replace(" ","_", $subact5);
			mysql_query("INSERT INTO subaction (ActionName, Subaction) VALUES ('$actionName', '$subact5')", $con1);
		}
		$flagSub=2;
		unset($_POST["addSubaction"]);
	}
	else
	{
		$flagSub= 3;
	}	
}
// CODE for 'Submit' button on Semantic Roles tab
if(isset($_POST["addSemanticRoles"]))
{
	$flagSemantic=0;
	$defaultTab= "semanticRoles";
	if($actor || $agent || $asset || $attribute || $beneficiary || $cause || $destination || $source || $location || $experiencer || $extent || $instrument || $material || $patient || $predicate || $recipient || $stimulus || $theme || $time || $topic)
	{
		if($actor)
		{
			$actor = strtolower($actor);
			$actor = trim($actor);
			$arr= explode(",", $actor);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[$i]= trim($arr[$i]);
				$actor = str_replace(" ","_",$actor);
				mysql_query("INSERT INTO actor (ActionName, Actor) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($agent)
		{
			$agent = strtolower($agent);
			$agent = trim($agent);
			$arr= explode(",", $agent);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$agent = str_replace(" ","_",$agent);
				mysql_query("INSERT INTO agent (ActionName, agent) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($asset)
		{
			$asset = strtolower($asset);
			$asset = trim($asset);
			$arr= explode(",", $asset);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$asset = str_replace(" ","_",$asset);
				mysql_query("INSERT INTO asset (ActionName, Asset) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($attribute)
		{
			$attribute = strtolower($attribute);
			$attribute = trim($attribute);
			$arr= explode(",", $attribute);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$attribute = str_replace(" ","_",$attribute);
				mysql_query("INSERT INTO attribute (ActionName, attribute) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($beneficiary)
		{
			$beneficiary = strtolower($beneficiary);
			$beneficiary = trim($beneficiary);
			$arr= explode(",", $beneficiary);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$beneficiary = str_replace(" ","_",$beneficiary);
				mysql_query("INSERT INTO actor (ActionName, beneficiary) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($cause)
		{
			$cause = strtolower($cause);
			$cause = trim($cause);
			$arr= explode(",", $cause);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$cause = str_replace(" ","_",$cause);
				mysql_query("INSERT INTO cause (ActionName, cause) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($destination)
		{
			$destination = strtolower($destination);
			$destination = trim($destination);
			$arr= explode(",", $destination);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$destination = str_replace(" ","_",$destination);
				mysql_query("INSERT INTO destination (ActionName, destination) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($source)
		{
			$source = strtolower($source);
			$source = trim($source);
			$arr= explode(",", $source);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$source = str_replace(" ","_",$source);
				mysql_query("INSERT INTO source (ActionName, source) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($location)
		{
			$location = strtolower($location);
			$location = trim($location);
			$arr= explode(",", $location);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$location = str_replace(" ","_",$location);
				mysql_query("INSERT INTO location (ActionName, location) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($experiencer)
		{
			$experiencer = strtolower($experiencer);
			$experiencer = trim($experiencer);
			$arr= explode(",", $experiencer);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$experiencer = str_replace(" ","_",$experiencer);
				mysql_query("INSERT INTO experiencer (ActionName, experiencer) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($extent)
		{
			$extent = strtolower($extent);
			$extent = trim($extent);
			$arr= explode(",", $extent);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$extent = str_replace(" ","_",$extent);
				mysql_query("INSERT INTO extent (ActionName, extent) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($instrument)
		{
			$instrument = strtolower($instrument);
			$instrument = trim($instrument);
			$arr= explode(",", $instrument);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$instrument = str_replace(" ","_",$instrument);
				mysql_query("INSERT INTO instrument (ActionName, Instrument) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($material)
		{
			$material = strtolower($material);
			$material = trim($material);
			$arr= explode(",", $material);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$material = str_replace(" ","_",$material);
				mysql_query("INSERT INTO material (ActionName, material) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($patient)
		{
			$patient = strtolower($patient);
			$patient = trim($patient);
			$arr= explode(",", $patient);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$patient = str_replace(" ","_",$patient);
				mysql_query("INSERT INTO patient (ActionName, patient) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($predicate)
		{
			$apredicate = strtolower($predicate);
			$predicate = trim($predicate);
			$arr= explode(",", $predicate);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$predicate = str_replace(" ","_",$predicate);
				mysql_query("INSERT INTO predicate (ActionName, predicate) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($recipient)
		{
			$recipient = strtolower($recipient);
			$recipient = trim($recipient);
			$arr= explode(",", $recipient);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$recipient = str_replace(" ","_",$recipient);
				mysql_query("INSERT INTO recipient (ActionName, recipient) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($stimulus)
		{
			$stimulus = strtolower($stimulus);
			$stimulus = trim($stimulus);
			$arr= explode(",", $stimulus);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$stimulus = str_replace(" ","_",$stimulus);
				mysql_query("INSERT INTO stimulus (ActionName, stimulus) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($theme)
		{
			$theme = strtolower($theme);
			$theme = trim($theme);
			$arr= explode(",", $theme);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$theme = str_replace(" ","_",$theme);
				mysql_query("INSERT INTO theme (ActionName, Theme) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($time)
		{
			$time = strtolower($time);
			$time = trim($time);
			$arr= explode(",", $time);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$time = str_replace(" ","_",$time);
				mysql_query("INSERT INTO time (ActionName, time) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		if($topic)
		{
			$topic = strtolower($topic);
			$topic = trim($topic);
			$arr= explode(",", $topic);
			$len= count($arr);
			for ($i=0; $i < $len; $i++) { 
				$arr[i]= trim($arr[i]);
				$topic = str_replace(" ","_",$topic);
				mysql_query("INSERT INTO topic (ActionName, topic) VALUES ('$actionName', '$arr[$i]')", $con1);
			}
		}
		$flagSemantic=2;
		unset($_POST["addSemanticRoles"]);
	}
	else
	{
		$flagSemantic=3;
	}
}
// CODE for 'Next Step' Button on all the four tabs 
if(isset($_POST["submitPrecondition"]))
{
	$defaultTab= "outcomes";
	unset($_POST["submitPrecondition"]);
}
if(isset($_POST["submitOutcome"]))
{
	$defaultTab= "subactions";
	unset($_POST["submitOutcome"]);
}
if(isset($_POST["submitSubaction"]))
{
	$defaultTab= "semanticRoles";
	unset($_POST["submitSubaction"]);
}
if(isset($_POST["submitSemanticRoles"]))
{
	header("Location:./descriptorFeature.php");
}
?>
<html lang="en">
<head>
	<title>Action Ontology</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<!--	<link rel="stylesheet" type="text/css" href="css/style.css" />	-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!--<script type="text/javascript" src="js/actionOntologyJS.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Purposenet, Purpose net, PurposeNet, Ontology, KnowledgeBase, Knowledgebase>
	<meta name="author" content="Anshu Shekhar and Rishabh Shrivastav">
	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#third").css('background-color','rgb(120,120,120)');
$("#third").css('border-radius','30px');
$("#thirdtext").css('color','White');
</script>
<script type="text/javascript">


$(function(){
	$("#collapseExampleSubaction").hide();
	$("#exampleSubaction").click(function(){
		$("#collapseExampleSubaction").toggle();
	});
	$("#collapseExamplePrecondition").hide();
	$("#examplePrecondition").click(function(){
		$("#collapseExamplePrecondition").toggle();
	});
	
	$("li").click(function(){
			var dropdownValue= $(this).attr("id");
			switch(dropdownValue){
				case "default":
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr({ "placeholder": "Select a role first from the dropdown menu on the left", "disabled":""} );
					$("#exampleSemantic").attr({ "data-title": "<b>First select a role!</b>", "data-content": "<i>Please first select a semantic role from the dropdown menu on the left!</i>" });
					$("#hiddenSemanticRole").attr({ "value": "default" });
					break;
				case "actor":
					$("#dropdownButton").html('Actor &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Actor: doer of the action").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Actor in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "actor" });
					break;
				case "agent":
					$("#dropdownButton").html('Agent &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Agent: through which the action is performed").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Agent in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "agent" });
					break;
				case "asset":
					$("#dropdownButton").html('Asset &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Asset").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Asset in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "asset" });
					break;
				case "attribute":
					$("#dropdownButton").html('Attribute &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Attribute").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Attribute in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "attribute" });
					break;
				case "beneficiary":
					$("#dropdownButton").html('Beneficiary &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Beneficiary").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Beneficiary in context of a car:</b>", "data-content": "<i><ul><li><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "beneficiary" });
					break;
				case "cause":
					$("#dropdownButton").html('Cause &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Cause").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Cause in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "cause" });
					break;
				case "destination":
					$("#dropdownButton").html('Destination &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Destination").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Destination in context of a car:</b>", "data-content": "<i><ul><li> Place Y (where journey ends)</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "destination" });
					break;
				case "source":
					$("#dropdownButton").html('Source &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Source").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Source in context of a car:</b>", "data-content": "<i><ul><li> Place X (where journey begins)</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "source" });
					break;
				case "location":
					$("#dropdownButton").html('Location &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Location").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Location in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "location" });
					break;
				case "experiencer":
					$("#dropdownButton").html('Experiencer &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "experiencer").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Experiencer in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "experiencer" });
					break;
				case "extent":
					$("#dropdownButton").html('Extent &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Extent").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Extent in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "extent" });
					break;
				case "instrument":
					$("#dropdownButton").html('Instrument &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Instrument").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Instrument in context of a car:</b>", "data-content": "<i><ul><li> Car</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "instrument" });
					break;
				case "material":
					$("#dropdownButton").html('Material &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Material").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Material in context of a car:</b>", "data-content": "<i><ul><li>NULL</li>></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "material" });
					break;
				case "patient":
					$("#dropdownButton").html('Patient &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Patients").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Patient in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "patient" });
					break;
				case "predicate":
					$("#dropdownButton").html('Predicate &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Predicate").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Predicate in context of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "predicate" });
					break;
				case "recipient":
					$("#dropdownButton").html('Recipient &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Recipient").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Recipient in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "recipient" });
					break;
				case "stimulus":
					$("#dropdownButton").html('Stimulus &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Stimulus").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Stimulus in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "stimulus" });
					break;
				case "theme":
					$("#dropdownButton").html('Theme &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Theme").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Theme in context of a car:</b>", "data-content": "<i><ul><li> Passenger</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "theme" });
					break;
				case "time":
					$("#dropdownButton").html('Time &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Time").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Time in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "time" });
					break;
				case "topic":
					$("#dropdownButton").html('Topic &nbsp;<span class="caret"></span>');
					$("#inputAreaSemantic").attr("placeholder", "Topic").removeAttr("disabled");
					$("#exampleSemantic").attr({ "data-title": "<b>Topic in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenSemanticRole").attr({ "value": "topic" });
					break;
				default:
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
			}
		});
});

</script>
<style type="text/css">
	#inputOutcome { width:60%; }
	label { width: 12.5%; float:left; }
	#FormGroupOutcomes { margin-left:auto; }

	#dropdownList { text-align:center;  }
	.dropdown { float:left; }
	#dropdownButton { width:6.5% auto; }
	#formGroupSemantic { margin-left:6.5%; margin-right:auto; }
	#inputAreaSemantic { width:54%; }
	.collapseExample { background-color:rgb(240,240,240); width:600px; padding:2px; padding-left:10px; margin-top:20px; border-radius:2px; box-shadow:2px 2px 2px 2px rgba(0,0,0,0.4); }

</style>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4); padding:20px; width:90%; margin:auto; ">

<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs">
		<li <?php if($defaultTab=='precondition') echo 'class="active"'; ?> style="width:25%; text-align:center;"><a href="#precondition" data-toggle="tab">Preconditions</a></li>
		<li <?php if($defaultTab=='outcomes') echo 'class="active"'; ?> style="width:25%; text-align:center;"><a href="#outcome" data-toggle="tab">Outcome</a></li>
		<li <?php if($defaultTab=='subactions') echo 'class="active"'; ?> style="width:25%; text-align:center;"><a href="#subactions" data-toggle="tab">Subactions</a></li>
		<li <?php if($defaultTab=='semanticRoles') echo 'class="active"'; ?> style="width:25%; text-align:center;"><a href="#semanticRoles" data-toggle="tab">Semantic Roles</a></li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade <?php if($defaultTab=='precondition') echo 'in active'; ?>" id="precondition">
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Fill the pre-conditions which must be fulfilled before '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' performs to '<?php $_SESSION["action"] = $actionName; echo strtolower($actionName); ?>' 
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
			</form>
<?php
if ($flagPre == 3 && $defaultTab=='precondition')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagPre == 2 && $defaultTab=='precondition')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
			<form action="./actionOntology.php" method="post">
				<table border=0 align="center" >
				<tr>
					<th rowspan="6"></th>
					<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					
					<td><p style="text-align:left;"><i>Enter the pre-conditions:</i>
					<button type="button" id="examplePrecondition" class="btn btn-info" style="float:right;">View Example</button>
					<div id="collapseExamplePrecondition" class="collapseExample">
						<h4>Preconditions to fulfill before transporting people using car:</h4>
						<i>
							<ul>
								<li> Exists fuel</li>
								<li> Exists engine oil</li>
								<li> Exists brake fluid</li>
								<li> Exists coolant</li>
								<li> Exists transmission fluid</li>
								<li> Battery charged</li>
								<li> Tyres properly inflated</li>
							</ul>
						</i>
					</div>
					</p>	
					<input type="text" name="cond1" autocomplete="off" class="search" style="width:600px; margin-top:5px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text" name="cond2" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text" name="cond3" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text"  name="cond4" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text" name="cond5" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				
				</table>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonPrecondition" align="center">
					  <input type="hidden" name="main" value=<?php echo $main; ?> />
					  <button type="submit" id="submit" name="addPrecondition" value="Submit" class="btn btn-primary">Submit</button>
					  <button type="submit" id="next" name="submitPrecondition" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane fade <?php if($defaultTab=='outcomes') echo 'in active'?>" id="outcome">
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the various <i>outcomes</i> &nbsp; when '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' performs to '<?php $_SESSION["action"] = $actionName; echo strtolower($actionName); ?>'
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
<?php
if ($flagOut == 3 && $defaultTab=='outcomes')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagOut == 2 && $defaultTab=='outcomes')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
				<form class="form-horizontal" role="form" action="./actionOntology.php" method="post" id="outcomesForm">
		  
				  <div class="form-group" id="FormGroupOutcomes">

					<label for="result" class="col-sm-2 control-label" style="float:left;">Result: </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputOutcome" placeholder="Result at the end of the action" name="result" autocomplete="off" >
						&nbsp;
						<button type="button" name="example" id="example" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Result in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> At place y (Passenger)</li></ul></i>">View Example</button>
							<script>
								$(function () 
									{ $("[data-toggle='popover']").popover();
									});
							</script>		
					</div>
				  </div>
				  <div class="form-group" id="FormGroupOutcomes">
					<label for="sideeffects" class="col-sm-2 control-label" style="float:left ">Side-effects: </label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputOutcome" placeholder="Enter the side effects that will occur in the process of achieving the result" name="sideeffects" autocomplete="off" >
					  &nbsp;
					  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Side-effects in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> At place y ( Car )</li><li> At place y ( Driver )</li></ul></i>">View Example</button>
							<script>
								$(function () 
									{ $("[data-toggle='popover']").popover();
									});
							</script>
							
					</div>
				  </div>
				  <div class="form-group" id="FormGroupOutcomes">
					<label for="wearNtear" class="col-sm-2 control-label" style="float:left ">Wear and Tear: </label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputOutcome" placeholder="Enter the wear and tear that may happen during the purpose serving" name="wearNtear" autocomplete="off" >
					  &nbsp;
					  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Wear and Tear in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Flat tyre</li><li> Worn out seat</li><li> Clogged engine</li></ul></i>">View Example</button>
							<script>
								$(function () 
									{ $("[data-toggle='popover']").popover();
									});
							</script>
							
					</div>
				  </div>
				  <div class="form-group" id="FormGroupOutcomes">
					<label for="maintainance" class="col-sm-2 control-label" style="float:left ">Maintainance: </label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputOutcome" placeholder="Enter the maintainance work to overcome the wear and tear happened during process" name="maintainance" autocomplete="off" >
					  &nbsp;
					  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Maintainance in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Repair car engine</li><li> Repair car ignition system</li><li> Oil car engine</li><li> Fill tyres</li></ul></i>">View Example</button>
							<script>
								$(function () 
									{ $("[data-toggle='popover']").popover();
									});
							</script>
							
					</div>
				  </div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10" id="submitButtonOutcome" align="center">
				  <input type="hidden" name="main" value=<?php echo $main; ?> />
				  <button type="submit" id="submit" name="addOutcome" value="Submit" class="btn btn-primary">Submit</button>
				  <button type="submit" id="next" name="submitOutcome" value="Go to the Next Step" class="btn btn-success">Next step</button>
				</div>
			</div>
			</form>
			</form>
		</div>
		<div class="tab-pane fade <?php if($defaultTab=='subactions') echo 'in active'?>" id="subactions">
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the actions step-wise you perform to '<?php $_SESSION["action"] = $actionName; echo strtolower($actionName); ?>' in context of '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
<?php
if ($flagSub == 3 && $defaultTab=='subactions')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagSub == 2 && $defaultTab=='subactions')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
			<form action="./components.php" method="post">
				<table border=0 align="center" >
				<tr>
					<th rowspan="6"></th>
					<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<td><p><i>Enter the sub-actions:</i>
					<button type="button" id="exampleSubaction" class="btn btn-info" style="float:right;">View Example</button>
					<div id="collapseExampleSubaction" class="collapseExample">
						<h4>Subactions in case of a car:</h4>
						<i>
							<ul>
								<li> Start engine of the car</li>
								<li> Accelerate car</li>
								<li> Steer car</li>
								<li> Stop car</li>
							</ul>
						</i>
					</div>

					
					</p>
					<div class="inputTextSubaction" style="padding-top:4px;">
					<input type="text" name="subact1" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text" name="subact2" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text" name="subact3" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text"  name="subact4" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				<tr>
					<td><input type="text" name="subact5" autocomplete="off" class="search" style="width:600px; padding:4px; align:center;"></td>
				</tr>
				
				</table>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonSubaction" align="center">
					  <input type="hidden" name="main" value=<?php echo $main; ?> />
					  <button type="submit" id="submit" name="addSubaction" value="Submit" class="btn btn-primary">Submit</button>
					  <button type="submit" id="next" name="submitSubaction" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
			</form>
		</div>
		<div class="tab-pane fade <?php if($defaultTab=='semanticRoles') echo 'in active'?>" id="semanticRoles">
			
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
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
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the semantic-roles for the action: '<?php $_SESSION["action"] = $actionName; echo strtolower($actionName); ?>' in context of '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
					<button class="btn btn-warning pull-right" id="trigger" data-toggle="modal" data-target="#myModal">Help</button>
				</p>
				
<?php
if ($flagSemantic == 3 && $defaultTab=='semanticRoles')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagSemantic == 2 && $defaultTab=='semanticRoles')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
			<form id="semanticForm" class="form-horizontal" role="form" action="./components.php" method="post" style="align:center;">
					<div class="form-group" id="formGroupSemantic">
						<div class="dropdown">
							<form id="dropdownForm" class="dropdown">
							<button type="button" name="dropdown" id="dropdownButton" class="btn btn-default" data-target="#" data-toggle="dropdown" data-placement="right">Choose Theta Roles &nbsp;<span class="caret"></span></button>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li class="dropdownList" id="default" name="default" role="presentation" value="default"><a role="menuitem" href="#">Choose Theta Roles</a></li>
									<li role="presentation" class="divider"></li>
									<li class="dropdownList" id="actor" name="list" role="presentation" value="actor"><a role="menuitem" href="#">Actor</a></li>
									<li class="dropdownList" id= "agent" name="list" role="presentation" value="agent"><a role="menuitem" href="#">Agent</a></li>
									<li class="dropdownList" id= "asset" name="list" role="presentation" value="asset"><a role="menuitem" href="#">Asset</a></li>
									<li class="dropdownList" id="attribute" name="list" role="presentation" value="attribute"><a role="menuitem" href="#">Attribute</a></li>
									<li class="dropdownList" id="beneficiary" name="list" role="presentation" value="beneficiary"><a role="menuitem" href="#">Beneficiary</a></li>
									<li class="dropdownList" id="cause" name="list" role="presentation" value="cause"><a role="menuitem" href="#">Cause</a></li>
									<li class="dropdownList" id="destination" name="list" role="presentation" value="destination"><a role="menuitem" href="#">Destination</a></li>
									<li class="dropdownList" id="source" name="list" role="presentation" value="source"><a role="menuitem" href="#">Source</a></li>
									<li class="dropdownList" id="location"name="list" role="presentation" value="location"s><a role="menuitem" href="#">Location</a></li>
									<li class="dropdownList" id="experiencer" name="list" role="presentation" value="experiencer"><a role="menuitem" href="#">Experiencer</a></li>
									<li class="dropdownList" id="extent" name="list" role="presentation" value="extent"><a role="menuitem" href="#">Extent</a></li>
									<li class="dropdownList" id="instrument" name="list" role="presentation" value="instrument"><a role="menuitem" href="#">Instrument</a></li>
									<li class="dropdownList" id="material" name="list" role="presentation" value="material"><a role="menuitem" href="#">Material</a></li>
									<li class="dropdownList" id="patient" name="list" role="presentation" value="patient"><a role="menuitem" href="#">Patient</a></li>
									<li class="dropdownList" id="predicate" name="list" role="presentation" value="predicate"><a role="menuitem" href="#">Predicate</a></li>
									<li class="dropdownList" id="recipient" name="list" role="presentation" value="recipient"><a role="menuitem" href="#">Recipient</a></li>
									<li class="dropdownList" id="stimulus" name="list" role="presentation" value="stimulus"><a role="menuitem" href="#">Stimulus</a></li>
									<li class="dropdownList" id="theme" name="list" role="presentation" value="theme"><a role="menuitem" href="#">Theme</a></li>
									<li class="dropdownList" id="time" name="list" role="presentation" value="time"><a role="menuitem" href="#">Time</a></li>
									<li class="dropdownList" id="topic" name="list" role="presentation" value="topic"><a role="menuitem" href="#">Topic</a></li>
							</ul>
						</div>
						<div class="col-sm-10">
							&nbsp;
							<input type="hidden" id="hiddenSemanticRole" name="semanticRole" value="default">
							<input type="text" name="textValueSemantic" class="form-control" id="inputAreaSemantic" placeholder="Select a role first from the dropdown menu on the left" autocomplete="off" disabled>
							&nbsp;
							
							<button type="button" name="example" id="exampleSemantic" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Example in context of a car</b>" data-html="<p><i></i><br/></p>" data-content="<i>Please first select a semantic role from the dropdown menu on the left!</i>" style="text-align:left; margin-right:auto;">View Example</button>
								<script>
									$(function () 
										{ $("[data-toggle='popover']").popover();
										});
								</script>		
						</div>	
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" id="submitButtonSemantic" align="center">
							<input type="hidden" name="main" value=<?php echo $main; ?> />
							<button type="submit" id="submit" name="addSemanticRoles" value="Submit" class="btn btn-primary">Submit</button>
							<button type="submit" id="next" name="submitSemanticRoles" value="Go to the Next Step" class="btn btn-success">Next step</button><br/><br/><br/><br/><br/><br/><br/><br/><br/>
						</div>
					</div>
				</form>
			</form>
		</div>	
	</div>
</div>

</body>
</html>
