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


<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">
	<form action="./precondition.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the semantic-roles you perform to '<?php $_SESSION["action"] = $action_name; echo strtolower($acton_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		</p>
		
<style>
input { width:600px; }
label { width: 140px; float:left; }
#submitButton { float:right; }

</style>		
<form class="form-horizontal" role="form" action="./semantic_roles.php" method="post">
  
  <div class="form-group">

    <label for="actor" class="col-sm-2 control-label" style="float:left ">Actor: </label>
    <div class="col-sm-10">
		<input type="text" class="form-control" id="actor" placeholder="Actor: doer of the action" name="actor" autocomplete="off" >
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
    <label for="agent" class="col-sm-2 control-label" style="float:left ">Agent: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="agent" placeholder="Agent: through which the action is performed" name="action" autocomplete="off" >
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
    <label for="asset" class="col-sm-2 control-label" style="float:left ">Asset: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="asset" placeholder="Agent: through which the action is performed" name="asset" autocomplete="off" >
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
    <label for="attribute" class="col-sm-2 control-label" style="float:left ">Attribute: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="attribute" placeholder="Attribute" name="attribute" autocomplete="off" >
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
    <label for="beneficiary" class="col-sm-2 control-label" style="float:left ">Beneficiary: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="beneficiary" placeholder="Beneficiary" name="beneficiary" autocomplete="off" >
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
    <label for="cause" class="col-sm-2 control-label" style="float:left ">Cause: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cause" placeholder="Cause" name="causes" autocomplete="off" >
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
    <label for="destination" class="col-sm-2 control-label" style="float:left ">Destination: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="destination" placeholder="Destination" name="destination" autocomplete="off" >
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
    <label for="source" class="col-sm-2 control-label" style="float:left ">Source: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="source" placeholder="Source" name="source" autocomplete="off" >
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
    <label for="location" class="col-sm-2 control-label" style="float:left ">Location: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="location" placeholder="Location" name="location" autocomplete="off" >
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
    <label for="experiencer" class="col-sm-2 control-label" style="float:left ">Experiencer: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="experiencer" placeholder="Experiencer" name="experiencer" autocomplete="off" >
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
    <label for="extent" class="col-sm-2 control-label" style="float:left ">Extent: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="extent" placeholder="Extent" name="extent" autocomplete="off" >
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
    <label for="instrument" class="col-sm-2 control-label" style="float:left ">Instrument: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="instrument" placeholder="Instrument" name="instrument" autocomplete="off" >
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
    <label for="material_product" class="col-sm-2 control-label" style="float:left ">Material & Product: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="material_product" placeholder="Material and Product" name="material_product" autocomplete="off" >
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
    <label for="patient" class="col-sm-2 control-label" style="float:left ">Patient: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="patient" placeholder="Patient" name="patient" autocomplete="off" >
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
    <label for="predicate" class="col-sm-2 control-label" style="float:left ">Predicate: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="predicate" placeholder="Prediacte" name="predicate" autocomplete="off" >
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
    <label for="recipient" class="col-sm-2 control-label" style="float:left ">Recipient: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="recipient" placeholder="Recipient" name="recipient" autocomplete="off" >
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
    <label for="stimulus" class="col-sm-2 control-label" style="float:left ">Stimulus: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stimulus" placeholder="Stimulus" name="stimulus" autocomplete="off" >
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
    <label for="theme" class="col-sm-2 control-label" style="float:left ">Theme: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="theme" placeholder="Theme" name="theme" autocomplete="off" >
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
    <label for="time" class="col-sm-2 control-label" style="float:left ">Time: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="time" placeholder="Time" name="time" autocomplete="off" >
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
    <label for="topic" class="col-sm-2 control-label" style="float:left ">Topic: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="topic" placeholder="Topic" name="topic" autocomplete="off">
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
    <div class="col-sm-offset-2 col-sm-10" id="submitButton">
      <button type="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
      <button type="submit" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
    </div>
  </div>
</form>

</form>
</div>


</body>
