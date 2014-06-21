<!DOCTYPE HTML>

<html>
<head>
	<title>Outcome: Result</title>
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
input { width:700px; }
label { width: 140px; float:left; }
#submitButton { margin-left:695px; }
.form-group { margin-left:60px; }

</style>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">
	<form action="./semanticRoles.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the various <i>"OUTCOMES"</i> &nbsp;of the artifact '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		</p>
		<form class="form-horizontal" role="form" action="./semantic_roles.php" method="post" id="outcomesForm">
  
		  <div class="form-group">

			<label for="result" class="col-sm-2 control-label" style="float:left ">Result: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="result" placeholder="Result" name="result" autocomplete="off" >
				&nbsp;
				<button type="button" name="example" id="example" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
					<script>
						$(function () 
							{ $("[data-toggle='popover']").popover();
							});
					</script>		
			</div>
		  </div>
		  <div class="form-group">
			<label for="sideeffects" class="col-sm-2 control-label" style="float:left ">Side-effects: </label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="sideeffects" placeholder="Enter the side effects that will occur in the process of achieving the result" name="sideeffects" autocomplete="off" >
			  &nbsp;
			  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
					<script>
						$(function () 
							{ $("[data-toggle='popover']").popover();
							});
					</script>
					
			</div>
		  </div>
		  <div class="form-group">
			<label for="wearNtear" class="col-sm-2 control-label" style="float:left ">Wear and Tear: </label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="wearNtear" placeholder="Enter the wear and tear that may happen during the purpose serving" name="wearNtear" autocomplete="off" >
			  &nbsp;
			  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
					<script>
						$(function () 
							{ $("[data-toggle='popover']").popover();
							});
					</script>
					
			</div>
		  </div>
		  <div class="form-group">
			<label for="attribute" class="col-sm-2 control-label" style="float:left ">Maintainance: </label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="attribute" placeholder="Enter the maintainance work to overcome the wear and tear happened during process" name="attribute" autocomplete="off" >
			  &nbsp;
			  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
					<script>
						$(function () 
							{ $("[data-toggle='popover']").popover();
							});
					</script>
					
			</div>
		  </div>
		  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10" id="submitButton">
		  <button type="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
		  <button type="submit" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
		</div>
	</div>
</form>

</form>
</div>

</body>