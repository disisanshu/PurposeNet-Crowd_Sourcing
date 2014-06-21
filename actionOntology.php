<!DOCTYPE HTML>
<?php

include("db_connection.php");
$changePrecondition= $_POST["changePrecondition"];
$changeOutcome= $_POST["changeOutcome"];
$changeSubaction= $_POST["changeSubaction"];
$changeSemanticRoles= $_POST["changeSemanticRoles"];
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
$actor= $_POST["actor"];
$agent= $_POST["agent"];
$asset= $_POST["asset"];
$attribute= $_POST["attribute"];
$beneficiary= $_POST["beneficiary"];
$cause= $_POST["cause"];
$destination= $_POST["destination"];
$source= $_POST["source"];
$location= $_POST["location"];
$experiencer= $_POST["experiencer"];
$extent= $_POST["extent"];
$instrument= $_POST["instrument"];
$material= $_POST["material"];
$patient= $_POST["patient"];
$prediacte= $_POST["prediacte"];
$recipient= $_POST["recipient"];
$stimulus= $_POST["stimulus"];
$theme= $_POST["theme"];
$time= $_POST["time"];
$topic= $_POST["topic"];
$textValueSemantic= $_POST["textValueSemantic"];
$addSemanticRoles= $_POST["addSemanticRoles"];
$submitSemanticRoles= $_POST["submitSemanticRoles"];
if($change == "Change the Artifact")
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
	<script type="text/javascript" src="js/actionOntologyJS.js"></script>
	<!--
	<script type="text/javascript" src="jquery-ui-1.10.4.custom\js\jquery-1.10.2"></script>
	<script type="text/javascript" src="jquery-ui-1.10.4.custom\js\jquery-ui-1.10.4.custom"></script>
	<script type="text/javascript" src="jquery-ui-1.10.4.custom\js\jquery-ui-1.10.4.custom.min"></script>
	-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Purposenet, Purpose net, PurposeNet, Ontology, KnowledgeBase, Knowledgebase>
	<meta name="author" content="Anshu Shekhar and Rishabh Shrivastav">
	
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
<style type="text/css">
	/*#submitButtonOutcome { margin-left:755px; }*/
	#inputOutcome { width:700px; }
	label { width: 140px; float:left; }
	#FormGroupOutcomes { margin-left:60px; }

	#dropdownList { text-align:center;  }
	.dropdown { float:left; }
	#dropdownButton { width:175px; }
	#formGroupSemantic { margin-left:125px; }
	#inputAreaSemantic { width:600px; }
	/*#submitButtonSemantic { margin-left:765px }*/

	/*#submitButtonSubaction { margin-left:775px }*/
	.collapseExample { background-color:rgb(240,240,240); width:600px; padding:2px; padding-left:10px; margin-top:20px; border-radius:2px; box-shadow:2px 2px 2px 2px rgba(0,0,0,0.4); }

	/*#submitButtonPrecondition { margin-left: 780px; }*/
</style>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4); padding:20px; width:90%; margin:auto; ">

<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs">
		<li class="active" style="width:25%; text-align:center;"><a href="#precondition" data-toggle="tab">Preconditions</a></li>
		<li style="width:25%; text-align:center;"><a href="#outcome" data-toggle="tab">Outcome</a></li>
		<li style="width:25%; text-align:center;"><a href="#subactions" data-toggle="tab">Subactions</a></li>
		<li style="width:25%; text-align:center;"><a href="#semanticRoles" data-toggle="tab">Semantic Roles</a></li>
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade in active" id="precondition">
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Fill the pre-conditions which must be fulfilled before you '<?php $_SESSION["action"] = $action_name; echo strtolower($acton_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
					<input type="submit" name="changePrecondition" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
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
		<div class="tab-pane fade" id="outcome">
			<form action="./actionOntology.php/#outcome" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the various <i>"OUTCOMES"</i> &nbsp;of the artifact '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
					<input type="submit" name="changeOutcome" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
				<form class="form-horizontal" role="form" action="./components.php" method="post" id="outcomesForm">
		  
				  <div class="form-group" id="FormGroupOutcomes">

					<label for="result" class="col-sm-2 control-label" style="float:left ">Result: </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputOutcome" placeholder="Result at the end of the action" name="result" autocomplete="off" >
						&nbsp;
						<button type="button" name="example" id="example" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
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
					  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
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
					  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
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
					  <button type="button" name="example" id="example" class="btn btn-info" style="align:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Subactions in case of a car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Start engine of the car</li><li> Accelerate car</li><li> Steer car</li><li> Stop car</li></ul></i>">View Example</button>
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
		<div class="tab-pane fade" id="subactions">
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the actions step-wise you perform to '<?php $_SESSION["action"] = $action_name; echo strtolower($action_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
					<input type="submit" name="changeSubaction" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
			
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
		<div class="tab-pane fade" id="semanticRoles">
			<form action="./actionOntology.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the semantic-roles you perform to '<?php $_SESSION["action"] = $action_name; echo strtolower($acton_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
					<input type="submit" name="changeSemanticRoles" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
				</p>
				
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
							<input type="hidden" id="hiddenSemanticRole" name="default" value="default">
							<input type="text" name="textValueSemantic" class="form-control" id="inputAreaSemantic" placeholder="Select a role first from the dropdown menu on the left" autocomplete="off" disabled>
							&nbsp;
							
							<button type="button" name="example" id="exampleSemantic" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>First select a role!</b>" data-html="<p><i></i><br/></p>" data-content="<i>Please first select a semantic role from the dropdown menu on the left!</i>" style="text-align:left;">View Example</button>
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
							<button type="submit" id="next" name="submitSemanticRoles" value="Go to the Next Step" class="btn btn-success">Next step</button>
						</div>
					</div>
				</form>
			</form>
		</div>	
	</div>
</div>

</body>
</html>
