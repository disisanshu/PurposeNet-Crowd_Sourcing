<!DOCTYPE HTML>
<?php
include("login_check.php");
include ("db_connection.php");
$submit= $_POST["submit"];
$add= $_POST["add"];
$change= $_POST["change"];
$cond1= $_POST["cond1"];
$cond2= $_POST["cond2"];
$cond3= $_POST["cond3"];
$cond4= $_POST["cond4"];
$cond5= $_POST["cond5"];
$main= $_POST["main"];
if($submit= "Go to the Next Step")
{
	header("Location: ./theme.php");
}
if($add= "Submit")
{
	$flag=0;
	if($cond1 || $cond2 || $cond3 || $cond4 || $cond5)
	{
		$condArray= array();
		$count=0;
		if($cond1) { array_push($condArray, $cond1); $count++; }
		if($cond2) { array_push($condArray, $cond2); $count++; }
		if($cond3) { array_push($condArray, $cond3); $count++; }
		if($cond4) { array_push($condArray, $cond4); $count++; }
		if($cond5) { array_push($condArray, $cond5); $count++; }
		for($i=o; $i<count; $i++)
		{
			if($condArray[$i])
			{
				$condition= strtolower($condArray[$i]);
				$condition= trim($condition);
			}
		}
		$_SESSION["main"]= $main;
		$flag= 2;
	}
	else
	{
		$flag= 3;
	}
}
else if($change == "Change the Artifact")
{
	while(1)
	{
		$domain= $_SESSION["domain"];
		$count= mysql_query("SELECT * from objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
		$tmp= mysql_fetch_array($count)["main"];
		if($main != $tmp)
		{
			$main= $tmp;
			break;
		}
	}
}
else
{
	if($_SESSION["main"])
	{
		$main= $_SESSION["main"];
	}
	else
	{
		$domain= $_SESSION["domain"];
		$count= mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1");
		$tmp= mysql_fetch_array($count)["main"];
		$main= $tmp;
	}
}


?>

<!--
<script>
jQuery(document).ready(function($) {

   $('.pop_button').click(function () {
        $(this).popover({
                    html: true,
                    trigger: 'manual',
                    placement: 'right',
                    content: function () {
                        var $buttons = $('#popover_template').html();
                        return $buttons;
                    }
        }).popover('toggle');
    });
    
    $('.container').on('click', '.btn-info', function() {
        alert('it works!');
    });
    
});
</script>
-->

<html>
<head>
	<title>Precondition Step</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<!--	<link rel="stylesheet" type="text/css" href="css/style.css" />	-->
	<script type="text/javascript" src="js/jquery.js"></script>
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
#submitButton { margin-left: 780px; }
</style>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto;">
	<form action="./precondition.php" method="post">
		<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Fill the pre-conditions which must be fulfilled before you '<?php $_SESSION["action"] = $action_name; echo strtolower($acton_name); ?>' using '<?php $_SESSION["present"]= $main; echo strtoupper($main); ?>' 
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		</p>
	<form action="./precondition.php" method="post">
		<table border=0 align="center" >
		<tr>
			<th rowspan="6"></th>
			<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			
			<td><p style="text-align:left;"><i>Enter the pre-conditions:</i>
			<button type="button" name="example" id="example" class="btn btn-info" style="float:right;" data-container="body" data-toggle="popover" data-placement="right" data-title="<b>Preconditions to fulfill before transporting people using car:</b>" data-html="<p><i></i><br/></p>" data-content="<i><ul><li> Exists fuel</li><li> Exists engine oil</li><li> Exists brake fluid</li><li> Exists coolant</li><li> Exists transmission fluid</li><li> Battery charged</li><li> Tyres properly inflated</li></ul></i>">View Example</button>
			<script>
				$(function () 
					{ $("[data-toggle='popover']").popover();
					});
			</script>
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
			<div class="col-sm-offset-2 col-sm-10" id="submitButton">
			  <button type="submit" name="add" value="Submit" class="btn btn-primary">Submit</button>
			  <button type="submit" name="submit" value="Go to the Next Step" class="btn btn-success">Next step</button>
			</div>
		  </div>
	</form>

</body>
</html>

