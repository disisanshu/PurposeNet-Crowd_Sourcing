<!DOCTYPE HTML>
<?php
include(login.php);
include(db-connection.php);
$submit= $_POST["submit"];
$add= $_POST["add"];
$change= $_POST["change"];
$subact1= $_POST["subact1"];
$subact2= $_POST["subact2"];
$subact3= $_POST["subact3"];
$subact4= $_POST["subact4"];
$subact5= $_POST["subact5"];


?>

<html>
<head>
	<title>SubAction Step</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<!--	<link rel="stylesheet" type="text/css" href="css/style.css" />	-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
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
<?php include("headandnav.php"); ?>
<script>
$("#home").css('background-color','rgb(120,120,120)');
$("#home").css('border-radius','30px');
$("#hometext").css('color','White');
</script>

<style>
#carousel-example-generic { width:400px; height:220px; align:center; }
#submitButton { margin-left:775px }
#collapseExample { background-color:rgb(240,240,240); width:600px; padding:2px; padding-left:10px; margin-top:20px; border-radius:2px; box-shadow:2px 2px 2px 2px rgba(0,0,0,0.4); }
</style>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">
	<form action="./precondition.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the actions step-wise you perform to '<?php $_SESSION["action"] = $action_name; echo strtolower($acton_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		</p>
	
	<form action="./subactions.php" method="post">
		<table border=0 align="center" >
		<tr>
			<th rowspan="6"></th>
			<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<td><p><i>Enter the sub-actions:</i>
			<button type="button" id="example" class="btn btn-info" style="float:right;">View Example</button>
			<div id="collapseExample" class="collapseExample">
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
			<div class="inputText" style="padding-top:4px;">
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
		<div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10" id="submitButton">
			  <button type="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
			  <button type="submit" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
			</div>
		  </div>
	</form>
<script>
$(function(){
	$("#collapseExample").hide();
	$("#example").click(function(){
		$("#collapseExample").toggle();
	});
});

</script>
</body>
</html>

