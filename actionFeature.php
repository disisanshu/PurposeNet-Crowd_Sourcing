<!DOCTYPE HTML>
<?php
include("login_check.php");
include("db_connection.php");

// Variable declarations here
$birth= $_POST["birth"];
$technique= $_POST["technique"];
$purpose= $_POST["primarypurpose"];
$destruction= $_POST["destruction"];
$change= $_POST["change"];
$domain= $_SESSION["domain"];
$main= $_POST["main"];
if($main);
	//$main= $_POST["main"];
else if(isset($_SESSION["main"]))
	$main= $_SESSION["main"];
else
{
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc  WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
	$main = mysql_fetch_array($result)["main"];
}
$defaultTab= "birth";	// default tab check variable
mysql_close($con);
$con1= mysql_connect("localhost","root","disisanshu") or die(mysql_error());
$purposenet= mysql_select_db("purposenet", $con1);
session_start();
// CODE for 'add' button
if(isset($_POST["addBirth"]))
{
	$flagBirth = 0;
	$defaultTab= "birth";
	/*if($birth)
	{
		$_SESSION["main"] = $main;
		$flagBirth = 2;
		$birth = strtolower($birth);
		$birth = trim($birth);
		$arr= explode("\n", $birth);
		$len= count($arr);
		for ($i=0; $i < $len; $i++) { 
			$arr[i]= trim($arr[i]);
			mysql_query("INSERT INTO birth ( ArtifactName , Birth ) VALUES ('$main', '$arr[$i]')", $con1);
		}
		unset($_POST["addBirth"]);
	}*/
	//echo 
	if($birth)
	{
		$_SESSION["main"]= $main;
		$flagBirth=2;
		$birth = strtolower($birth);
		$birth = trim($birth);
		mysql_query("INSERT INTO birth1 (ArtifactName, Technique, Parts) VALUES ('$main', '$technique', '$birth')", $con1);
		unset($_POST["addBirth"]);

	}
	else
	{
		$flagBirth = 1;
	}
}
else if(isset($_POST["addDestruction"]))
{
	$flagDestruction = 0;
	$defaultTab= "destruction";
	if($destruction)
	{
		$_SESSION["main"] = $main;
		$flagDestruction = 2;
		$destruction = strtolower($destruction);
		$destruction = trim($destruction);
		$arr= explode("\n", $destruction);
		$len= count($arr);
		for ($i=0; $i < $len; $i++) { 
			$arr[i]= trim($arr[i]);
			mysql_query("INSERT INTO destruction ( ArtifactName , Destruction ) VALUES ('$main', '$arr[$i]')", $con1);
		}
		unset($_POST["addDestruction"]);
	}
	else
	{
		$flagDestruction = 1;
	}
}
else if(isset($_POST["addPurpose"]))
{
	mysql_close($con1);
	include("db_connection.php");
	session_start();
	$flagPurpose = 0;
	$defaultTab= "purpose";
	if($purpose)
	{
		$_SESSION["main"] = $main;
		mysql_query("INSERT INTO `usage` ( `main` , `purpose` ) VALUES ('$main', '$purpose')", $con);
		$id = mysql_insert_id();
		mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'usage', '$id') ", $con);
		$flagPurpose = 2;
		$purpose = strtolower($purpose);
		$purpose = trim($purpose);
		$purpose = str_replace(" ","_",$purpose);
		$_SESSION["action"]= $purpose;
		unset($_POST["addPurpose"]);
	}
	else
	{
		$flagPurpose = 1;
	}
}
// CODE for 'change the artifact' button for all the three TABs.
else if(isset($_POST["change"]))
{
	mysql_close($con1);
	include("db_connection.php");
	$domain = $_SESSION["domain"];
	$result = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
	$main = mysql_fetch_array($result)["main"];
}
// CODE for 'submit' button for all the TABs
else if(isset($_POST["submitBirth"]))
{
	$defaultTab= "purpose";
	unset($_POST["submitBirth"]);
}
else if(isset($_POST["submitPurpose"]))
{
	$defaultTab= "destruction";
	unset($_POST["submitPurpose"]);
}
else if(isset($_POST["submitDestruction"]))
{
	mysql_close($con1);
	include("db_connection.php");
	session_start();

	$_SESSION["i"] = 0;
	$_SESSION["flag"] = 1;
	$_SESSION["defaultTab"]= 'component';
	$domain = $_SESSION["domain"];

	if(!$_SESSION["main"])
	{
		$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' ORDER BY RAND() LIMIT 1");
		$row = mysql_fetch_array($result);
		$_SESSION["main"]= $row["main"];
		$_SESSION["ma"] = $row["main"];
	}
	else
	{
		$_SESSION["ma"] = $_SESSION["main"];
	}
	header("Location:./components.php");
}
// if the page is loaded for the first time
else
{
	mysql_close($con1);
	include("db_connection.php");
	if($_SESSION["main"])
	{
		$main = $_SESSION["main"];
		$domain = $_SESSION["domain"];
	}
	else
	{
		$domain = $_SESSION["domain"];
		$result = mysql_query("SELECT * FROM objects_fwdc  WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
		$main = mysql_fetch_array($result)["main"];
	}
}
?>
<html>
<head lang="en">
	<title>Action Feature</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<!--	<link rel="stylesheet" type="text/css" href="css/style.css" />	-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="./draganddrop.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
	 
<?php
	include("headandnav.php");
?>
<script>
$("#second").css('background-color','rgb(120,120,120)');
$("#second").css('border-radius','30px');
$("#secondtext").css('color','rgb(255,255,255)');
</script>
<style type="text/css">
#dropdownList { text-align:center;  }
.dropdown { float:left; margin-left:15%; }
#dropdownButton { width:185px auto; }
#submitButton { margin-left: 30%; margin-right: 30%; }
</style>
<script type="text/javascript">
$(function(){
	
	$("li").click(function(){
			var dropdownValue= $(this).attr("id");
			switch(dropdownValue){
				case "default":
					$("#dropdownButton").html('Choose Birth Technique &nbsp;<span class="caret"></span>');
					$("#inputAreaBirth").attr({ "placeholder": " Select a technique first from the dropdown menu on the left", "disabled":""} );
					//$("#exampleSemantic").attr({ "data-title": "<b>First select a role!</b>", "data-content": "<i>Please first select a semantic role from the dropdown menu on the left!</i>" });
					$("#hiddenTechnique").attr({ "value": "default" });
					break;
				case "assemble":
					$("#dropdownButton").html('Assemble &nbsp;<span class="caret"></span>');
					$("#inputAreaBirth").attr("placeholder", " Enter the names of the parts to be assembled").removeAttr("disabled");
					//$("#exampleSemantic").attr({ "data-title": "<b>Actor in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenTechnique").attr({ "value": "assemble" });
					break;
				case "integrate":
					$("#dropdownButton").html('Integrate &nbsp;<span class="caret"></span>');
					$("#inputAreaBirth").attr("placeholder", " Enter the names of the parts to be integrated").removeAttr("disabled");
					//$("#exampleSemantic").attr({ "data-title": "<b>Agent in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenTechnique").attr({ "value": "integrate" });
					break;
				case "manufacture":
					$("#dropdownButton").html('Manufacture &nbsp;<span class="caret"></span>');
					$("#inputAreaBirth").attr("placeholder", " Enter the names of the parts to be manufactured").removeAttr("disabled");
					//$("#exampleSemantic").attr({ "data-title": "<b>Asset in context of a car:</b>", "data-content": "<i><ul><li>NULL</li></ul></i>" });
					$("#hiddenTechnique").attr({ "value": "manufacture" });
					break;
				default:
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
			}
		});
});
</script>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li <?php if($defaultTab=='birth') echo 'class="active"'; ?> style="width:33.33%; text-align:center;"><a href="#birth" data-toggle="tab">Birth of Artifact</a></li>
			<li <?php if($defaultTab=='purpose') echo 'class="active"'; ?> style="width:33.33%; text-align:center;"><a href="#purpose" data-toggle="tab">Main Usage of Artifact</a></li>
			<li <?php if($defaultTab=='destruction') echo 'class="active"'; ?> style="width:33.33%; text-align:center;"><a href="#destruction" data-toggle="tab">Destruction of Artifact</a></li>
		</ul>
	</div>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade <?php if($defaultTab=='birth') echo 'in active'; ?>" id="birth">
<?php
if ($flagBirth == 1 && $defaultTab=='birth')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagBirth == 2 && $defaultTab=='birth')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
			</br>
			<p style="color:black;font: 15px Droid Sans;text-align:center;">
			<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
			</p>
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Example: Process of creation of 'PEN'</br>
				<button class="btn btn-default" disabled style="width:185px auto;">Integrate &nbsp;<span class="caret"></button>
		        <input class="input-xlarge" id="disabledInput" type="text" style="margin:5px; width:200px;" placeholder="body parts, cap, refil" disabled>
			</p>
			<form action="actionFeature.php" method="post" >
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
				Write the step-wise process for creation of the '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
				<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
			</p>
			</form>
			<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
				(Follow the above format)
			</p>

			<p style="color:black;font: italic 20px Droid Sans;">
			<form action="./actionFeature.php" method="post" style="text-align:center;">
				<div class="form-group" id="formGroupBirth">
					<div class="dropdown">
						<button type="button" name="dropdown" id="dropdownButton" class="btn btn-default" data-target="#" data-toggle="dropdown" data-placement="right">Choose Birth Technique &nbsp;<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li class="dropdownList" id="default" name="default" role="presentation" value="default"><a role="menuitem" href="#">Choose Birth Technique</a></li>
							<li role="presentation" class="divider"></li>
							<li class="dropdownList" id="assemble" name="list" role="presentation" value="assemble"><a role="menuitem" href="#">Assemble</a></li>
							<li class="dropdownList" id= "integrate" name="list" role="presentation" value="integrate"><a role="menuitem" href="#">Integrate</a></li>
							<li class="dropdownList" id= "manufacture" name="list" role="presentation" value="manufacture"><a role="menuitem" href="#">Manufacture</a></li>
						</ul>
						&nbsp;
						<input type="hidden" id="hiddenTechnique" name="technique" value="default">
						<input type="text" name="birth" class="form-control" id="inputAreaBirth" placeholder=" Enter the process of creation (or Manufacture) of the artifact" autocomplete="off" style="width:600px; margin-top:5px; padding:4px; align:center;" disabled>
						<!--<input type="text" name="birth" autocomplete="off" class="search" placeholder=" Enter the process of creation (or Manufacture) of the artifact" style="width:600px; margin-top:5px; padding:4px; align:center;">-->
					</div>
				</div>
				<!--<textarea name="birth" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea>-->
				</br>
				</br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButton" align="center">
						<input type="hidden" name="main" value=<?php echo $main; ?>  />
						<button type="submit" id="submit" name="addBirth" value="Submit" class="btn btn-primary">Submit</button>
						<button type="submit" id="next" name="submitBirth" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
			</form>
			</p>
			</br>
			</br>
		</div>
		<div class="tab-pane fade <?php if($defaultTab=='purpose') echo 'in active'; ?>" id="purpose">
<?php
if ($flagPurpose == 1 && $defaultTab=='purpose')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagPurpose == 2 && $defaultTab=='purpose')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
			</br>
			<p style="color:black;font: 15px Droid Sans;text-align:center;">
			<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
			</p>
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Example: Main Usage of 'PEN'<br>
		        <input class="input-xlarge" id="disabledInput" type="text" style="margin:5px; width:200px;" placeholder="To write something on paper" disabled>
			</p>
			<form action="actionFeature.php" method="post" >
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
				Write the main usage of '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
				<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
			</p>
			</form>
			<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
				(Follow the above format)
			</p>

			<p style="color:black;font: italic 20px Droid Sans;">
			<form action="actionFeature.php" method="post" style="text-align:center;">
				<input type="text" name="primarypurpose" autocomplete="off" class="search" placeholder=" Enter the main action (i.e., Purpose) of the Artifact for which it is made" style="width:60%; margin-top:5px; padding:4px; align:center;">
				<!--<textarea name="primarypurpose" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea><br>-->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
						<input type="hidden" name="main" value=<?php echo $main; ?>  />
						<button type="submit" id="submit" name="addPurpose" value="Submit" class="btn btn-primary">Submit</button>
						<button type="submit" id="next" name="submitPurpose" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
			</form>
			</p>
		</div>
		<div class="tab-pane fade <?php if($defaultTab=='destruction') echo 'in active'; ?>" id="destruction">
<?php
if ($flagDestruction == 1 && $defaultTab=='destruction')
{
?>
	<div class="alert alert-danger">
		Press 'Submit' only after filling atleast one of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flagDestruction == 2 && $defaultTab=='destruction')
{
?>
	
	<div class="alert alert-success">
		Submitted successfully. If you don't want to fill more <b>Press <i>'Next Step'</i></b> else continue!
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
			</br>
			<p style="color:black;font: 15px Droid Sans;text-align:center;">
			<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
			</p>
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Example: Result on DESTRUCTION of 'PEN'<br>
		        <input class="input-xlarge" id="disabledInput" style="margin:5px; width:275px;" type="text" placeholder="Reused to manufacture other plastic goods" disabled>
			</p>
			<form action="actionFeature.php" method="post" >
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
				Write the result on <i>destruction</i> of '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
				<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
			</p>
			</form>
			<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
				(Follow the above format)
			</p>

			<p style="color:black;font: italic 20px Droid Sans;">
			<form action="actionFeature.php" method="post" style="text-align:center;">
				<textarea name="destruction" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea><br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
						<input type="hidden" name="main" value=<?php echo $main; ?>  />
						<button type="submit" id="submit" name="addDestruction" value="Submit" class="btn btn-primary">Submit</button>
						<button type="submit" id="next" name="submitDestruction" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
			</form>
			</p>
		</div>
	</div>
</div>
</body>
</html>
