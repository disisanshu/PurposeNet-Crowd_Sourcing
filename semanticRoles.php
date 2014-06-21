
<!DOCTYPE HTML>




<html>
<head>
	<title>Semantic Roles Step</title>
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
#dropdownList { text-align:center;  }
input { width:600px; }
.dropdown { float:left; }
form { align:center; }
div .form-group { margin-left:125px; }
#dropdownButton { width:175px; }
#submitButtonSemantic { margin-left:640px }

</style>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">
	<form action="./semanticRoles.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the semantic-roles you perform to '<?php $_SESSION["action"] = $action_name; echo strtolower($acton_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		</p>
		
		<form id="semanticForm" class="form-horizontal" role="form" action="./semantic_roles.php" method="post" >
			<div class="form-group">
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
					<input type="text" class="form-control" id="inputArea" placeholder="Select a role first from the dropdown menu on the left" autocomplete="off" >
					&nbsp;
					
					<button type="button" name="example" id="example" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>First select a role!</b>" data-html="<p><i></i><br/></p>" data-content="<i>Please first select a semantic role from the dropdown menu on the left!</i>" style="text-align:left;">View Example</button>
						<script>
							$(function () 
								{ $("[data-toggle='popover']").popover();
								});
						</script>		
				</div>	
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10" id="submitButtonSemantic">
					<button type="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
					<button type="submit" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
				</div>
			</div>
			</form>
		</form>
	</form>
</div>		
</body>
</html>

<script>
$(document).ready(function() {
		$("li").click(function(){
			var dropdownValue= $(this).attr("id");
			switch(dropdownValue){
				case "default":
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Select a role first from the dropdown menu on the left");
					$("#example").attr({ "data-title": "<b>First select a role!</b>", "data-content": "<i>Please first select a semantic role from the dropdown menu on the left!</i>" });
					break;
				case "actor":
					$("#dropdownButton").html('Actor &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Actor: doer of the action");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "agent":
					$("#dropdownButton").html('Agent &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Agent: through which the action is performed");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "asset":
					$("#dropdownButton").html('Asset &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Asset");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "attribute":
					$("#dropdownButton").html('Attribute &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Attribute");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "beneficiary":
					$("#dropdownButton").html('Beneficiary &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Beneficiary");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "cause":
					$("#dropdownButton").html('Cause &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Cause");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "destination":
					$("#dropdownButton").html('Destination &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Destination");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "source":
					$("#dropdownButton").html('Source &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Source");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "location":
					$("#dropdownButton").html('Location &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Location");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "experiencer":
					$("#dropdownButton").html('Experiencer &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "experiencer");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "extent":
					$("#dropdownButton").html('Extent &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Extent");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "instrument":
					$("#dropdownButton").html('Instrument &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Instrument");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "material":
					$("#dropdownButton").html('Material &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Material");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "patient":
					$("#dropdownButton").html('Patient &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Patients");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "predicate":
					$("#dropdownButton").html('Predicate &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Predicate");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "recipient":
					$("#dropdownButton").html('Recipient &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Recipient");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "stimulus":
					$("#dropdownButton").html('Stimulus &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Stimulus");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "theme":
					$("#dropdownButton").html('Theme &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Theme");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "time":
					$("#dropdownButton").html('Time &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Time");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				case "topic":
					$("#dropdownButton").html('Topic &nbsp;<span class="caret"></span>');
					$("#inputArea").attr("placeholder", "Topic");
					$("#example").attr({ "data-title": "<b>Subactions in case of a car:</b>", "data-content": "<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>" });
					break;
				default:
					$("#dropdownButton").html('Choose Theta Roles &nbsp;<span class="caret"></span>');
			}
		});
});



/*$(window).load(function() {
      alert("window load occurred!");
});

$(".class-name li).click(function(){
	var getValue=$(this).attr("value");
});*/
</script>