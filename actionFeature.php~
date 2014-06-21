<!DOCTYPE HTML>
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
$("#first").css('background-color','rgb(120,120,120)');
$("#first").css('border-radius','30px');
$("#firsttext").css('color','rgb(255,255,255)');

</script>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="active" style="width:33.33%; text-align:center;"><a href="#birth" data-toggle="tab">Birth of Artifact</a></li>
			<li style="width:33.33%; text-align:center;"><a href="#purpose" data-toggle="tab">Main Usage of Artifact</a></li>
			<li style="width:33.33%; text-align:center;"><a href="#destruction" data-toggle="tab">Destruction of Artifact</a></li>
		</ul>
	</div>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade in active" id="birth">
			</br>
			<p style="color:black;font: 15px Droid Sans;text-align:center;">
			<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
			</p>
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Example: Process of creation of 'PEN'<br>
		        <input class="input-xlarge" id="disabledInput" type="text" style="margin:5px; width:200px;" placeholder="Integrate body parts" disabled>
			</p>
			<form action="firststep.php" method="post" >
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
				Write the step-wise process for creation of the '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
				<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
			</p>
			</form>
			<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
				(Follow the above format)
			</p>

			<p style="color:black;font: italic 20px Droid Sans;">
			<form action="firststep.php" method="post" style="text-align:center;">
	<!--			<textarea name="primarypurpose" cols=43 autocomplete=off /></textarea><br> -->
				<textarea name="primarypurpose" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea><br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
						<button type="submit" id="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
						<button type="submit" id="next" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
				<!--<input type="hidden" name="main" value=<?php echo $main; ?>  />
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
				<input type="submit" name="next" value="Go to the next step" class="btn btn-success" />-->
			</form>
			</p>
		</div>
		<div class="tab-pane fade" id="purpose">
			</br>
			<p style="color:black;font: 15px Droid Sans;text-align:center;">
			<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
			</p>
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Example: Main Usage of 'PEN'<br>
		        <input class="input-xlarge" id="disabledInput" type="text" style="margin:5px; width:200px;" placeholder="To write something on paper" disabled>
			</p>
			<form action="firststep.php" method="post" >
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
				Write the main usage of '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
				<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
			</p>
			</form>
			<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
				(Follow the above format)
			</p>

			<p style="color:black;font: italic 20px Droid Sans;">
			<form action="firststep.php" method="post" style="text-align:center;">
	<!--			<textarea name="primarypurpose" cols=43 autocomplete=off /></textarea><br> -->
				<textarea name="primarypurpose" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea><br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
						<button type="submit" id="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
						<button type="submit" id="next" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
				<!--<input type="hidden" name="main" value=<?php echo $main; ?>  />
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
				<input type="submit" name="next" value="Go to the next step" class="btn btn-success" />-->
			</form>
			</p>
		</div>
		<div class="tab-pane fade" id="destruction">
			</br>
			<p style="color:black;font: 15px Droid Sans;text-align:center;">
			<?php echo strtoupper($main); ?> belongs to the <?php echo strtoupper($_SESSION["domain"]); ?> domain.
			</p>
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
			Example: Result on DESTRUCTION of 'PEN'<br>
		        <input class="input-xlarge" id="disabledInput" style="margin:5px; width:275px;" type="text" placeholder="Reused to manufacture other plastic goods" disabled>
			</p>
			<form action="firststep.php" method="post" >
			<p style="color:black;font: 20px Droid Sans;text-align:center;">
				Write the result on <i>destruction</i> of '<?php $_SESSION["present"]=$main; echo strtoupper($main); ?>'
				<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
			</p>
			</form>
			<p style="color:black;font: italic 12px Droid Sans;text-align:center;">
				(Follow the above format)
			</p>

			<p style="color:black;font: italic 20px Droid Sans;">
			<form action="firststep.php" method="post" style="text-align:center;">
	<!--			<textarea name="primarypurpose" cols=43 autocomplete=off /></textarea><br> -->
				<textarea name="destructionResult" cols="43" autocomplete="off" style="margin: 0px 0px 10px; height: 150px; width: 457px;"></textarea><br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
						<button type="submit" id="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
						<button type="submit" id="next" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
					</div>
				</div>
				<!--<input type="hidden" name="main" value=<?php echo $main; ?>  />
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
				<input type="submit" name="next" value="Go to the next step" class="btn btn-success" />-->
			</form>
			</p>
		</div>
	</div>
</div>
</body>
</html>
