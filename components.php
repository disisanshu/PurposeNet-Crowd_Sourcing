<!DOCTYPE HTML>
<?php
session_start();
include("login_check.php");
include("pl.php");
include("db_connection.php");

/*
	CODE for Default Page Setup, i.e., when the page will be loaded
*/
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
// CODE to set the value of the TAB
$defaultTab= $_POST["tab"];
if(!$defaultTab)
	$defaultTab= "component";
// Setup for variables assigning
$change= $_POST["change"];
if(isset($_POST["main"]))
	$main= $_POST["main"];
$uname = $_SESSION["email"];

// CODE for the Default setup of the Relation TAB, i.e., when the page will be loaded
if(!isset($_SESSION["ma"]))
{
	session_start();

	$_SESSION["i"] = 0;
	$_SESSION["flag"] = 1;
	$domain = $_SESSION["domain"];

	if(!$_SESSION["main"])
	{
	//	$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
		$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' ORDER BY RAND() LIMIT 1");
		$row = mysql_fetch_array($result);
		$_SESSION["main"]= $row["main"];
		$_SESSION["ma"] = $row["main"];
	}
	else
	{
	//	$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
		$_SESSION["ma"] = $_SESSION["main"];
	}
}
$mainRel = $_SESSION["ma"];
//echo "Main: ".$main."mainRel: ".$mainRel;
$result = mysql_query("SELECT * FROM temp WHERE main='$mainRel' AND count<=10 ORDER BY count DESC LIMIT 7", $con);
$art = array();
$i=0;
while($row=mysql_fetch_array($result))
{
	$art[$i] = $row['artifacts'];
	//echo "Value ".$i.": ".$art[$i]."</br>";
	$i = $i + 1;
}
$len = $i;
//echo "Len: ".$len."i: ".$i."</br>";
if($_SESSION["i"]+1)
{
	$i = $_SESSION["i"];
	if($i == $len)
	{
		$SESSION["i"]= 0;
		$defaultTab= "purpose";
	}
}

/*
	CODE for component Tab
*/
if($defaultTab == "component")
{
	$submitComponent = $_POST["submitComponent"];
	$addComponent = $_POST["addComponent"];
	$roComponent1 = $_POST["roComponent1"];
	$roComponent2 = $_POST["roComponent2"];
	$roComponent3 = $_POST["roComponent3"];
	$roComponent4 = $_POST["roComponent4"];
	$roComponent5 = $_POST["roComponent5"];
	$change= $_POST["change"];
	/*
		CODE for 'SUBMIT' button in Components TAB
	*/
	if($addComponent == "Submit")
	{
		$flagComp = 0;
		if($roComponent5 || $roComponent4 || $roComponent3 || $roComponent2 || $roComponent1)
		{
			$roArrayComponent= array();
			$lenComponent= 0;
			if($roComponent1){
				array_push($roArrayComponent, $roComponent1);
				$lenComponent++;
			}
			if ($roComponent2) {
				array_push($roArrayComponent, $roComponent2);
				$lenComponent++;
			}
			if ($roComponent3) {
				array_push($roArrayComponent, $roComponent3);
				$lenComponent++;
			}
			if ($roComponent4) {
				array_push($roArrayComponent, $roComponent4);
				$lenComponent++;
			}
			if ($roComponent5) {
				array_push($roArrayComponent, $roComponent5);
				$lenComponent++;
			}
			for ($i=0; $i < 5; $i++) { 
				if($roArrayComponent[$i]){
					$artifact= strtolower($roArrayComponent[$i]);
					$artifact= trim($artifact);
					$artifact= str_replace(" ", "_", $artifact);
					$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$artifact'", $con);
					$cc= mysql_fetch_array($result);
					$p1= Inflector::pluralize($artifact);
					$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$p1'", $con);
					$cc1= mysql_fetch_array($result);
					$sin= Inflector::singularize($artifact);
					$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$sin'", $con);
					$cc2= mysql_fetch_array($result);
					$nos= str_replace("_", "", $artifact);
					$result= mysql_query("SELECT count FROM temp WHERE main='$main' AND artifact='$nos'", $con);
					$cc3= mysql_fetch_array($result);
					// Some more code to be added here.....
					$uname = $_SESSION["email"];
					if($cc)
					{
						$new_count = $cc['count'] + 1;
						mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$artifact'", $con);
					
						$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$artifact'", $con);
						$id = mysql_fetch_array($q)["id"];
					}
					else if($cc1)
					{
						$new_count = $cc1['count'] + 1;
						mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$pl'", $con);
					
						$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$pl'", $con);
						$id = mysql_fetch_array($q)["id"];
					}
					else if($cc2)
					{
						$new_count = $cc2['count'] + 1;
						mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$sin'", $con);
					
						$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$sin'", $con);
						$id = mysql_fetch_array($q)["id"];
					}
					else if($cc3)
					{
						$new_count = $cc3['count'] + 1;
						mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$nos'", $con);
					
						$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$nos'", $con);
						$id = mysql_fetch_array($q)["id"];
					}
					else
					{
						mysql_query("INSERT INTO temp ( main, artifacts, count) VALUES ('$main','$artifact',1)", $con);
					//UDATA TABLE 
						$id = mysql_insert_id();

						$query = mysql_query("SELECT * FROM objects_fwdc WHERE main='$artifact'", $con);
						$l = mysql_num_rows($query);
						if($l == 0)
						{
							$domain = $_SESSION["domain"];
							$check = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' AND main='$artifact'", $con);
						}
					}
					mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'temp', '$id') ", $con);
				}
			}
			$_SESSION["main"] = $main;
			$flagComp = 2;
		}
		else
		{
			$flagComp = 3;
		}
	}
	/*
		CODE for 'NEXT' button in the Components TAB
	*/
	else if($submitComponent == "Go to the Next Step")
	{
		//$_SESSION["defaultTab"]= 'relation';
		//$defaultTab= $_SESSION["defaultTab"];
		$defaultTab= "relation";
		/*session_start();
		$_SESSION["i"] = 0;
		$_SESSION["flag"] = 1;
		$domain = $_SESSION["domain"];

		if(!$_SESSION["main"])
		{
			$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' ORDER BY RAND() LIMIT 1", $con);
			$row = mysql_fetch_array($result);
			$_SESSION["ma"] = $row["main"];
		}
		else
		{
			$_SESSION["ma"] = $_SESSION["main"];
		}
		//header("Location:./components.php");*/
	}
	/*
		CODE for 'CHANGE' button for Components TAB
	*/
	else if($change== "Change the Artifact")
	{
		//$_SESSION["defaultTab"]= 'component';
		//$defaultTab= $_SESSION["defaultTab"];
		$defaultTab= "component";
		while(1){
			$domain = $_SESSION["domain"];
			$l = mysql_query("SELECT * FROM objects_fwdc WHERE domain='$domain' ORDER BY RAND() LIMIT 1", $con);
			$tmp = mysql_fetch_array($l)["main"];
			if($main != $tmp)
			{
				$main = $tmp;
				$_SESSION["main"]= $main;
				$_SESSION["ma"]= $main;
				break;
			}
		}
		header("Location:./components.php");
	}
	else;
}
/*
	CODE for TAB "Relation"
*/
else if($defaultTab == "relation")
{
	/*
		CODE for 'CHANGE' button in Relation TAB
	*/
	if(isset($_POST["change"]))
	{
		$domain = $_SESSION['domain'];
		$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' ORDER BY RAND() LIMIT 1", $con);
		$row = mysql_fetch_array($result);
		$_SESSION["ma"] = $row["main"];
		$_SESSION["main"] = $_SESSION["ma"];
	}

	
	$mainRel = $_SESSION["ma"];
	$result = mysql_query("SELECT * FROM `temp` WHERE main='$main' AND count<=10 ORDER BY count DESC LIMIT 7", $con);
//	echo $main;
	$art = array();
	$i=0;
	while($row=mysql_fetch_array($result))
	{
		$art[$i] = $row['artifacts'];
		$i = $i + 1;
	}
	$len = $i;
	if($_SESSION["i"]+1)
	{
		$i = $_SESSION["i"];
//		echo $i.$art[$i];
		if($i == $len)
		{
			$SESSION["i"]= 0;
			$defaultTab= "purpose";
			//header("Location:./components.php");
		//	header("Location:./theme.php");
		}
	}


	/*
		CODE for 'SKIP' button in Relation TAB
	*/
	else if(ISSET($_POST["skip"]))
	{
		if($_SESSION["i"]+1)
		{
			$_SESSION["i"] = $_SESSION["i"] + 1;
		}
		header("Location:./components.php");
	}
	/*
		CODE for 'NEXT' button in Relation TAB
	*/
	else if($submitRelation == "Go to the Next Step")
	{
		//$_SESSION["defaultTab"]= 'purpose';
		//$defaultTab= $_SESSION["defaultTab"];
		$defaultTab= "purpose";
	}
	else;
}
/*
	CODE for TAB "Purpose"
*/
else if($defaultTab == "purpose")
{
	if($_SESSION["main"])
	{
		$main = $_SESSION["main"];
	}
	else
	{
		$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1", $con);
		$main = mysql_fetch_array($result)["main"];
	}
	$roPurpose1= $_POST["ro1"];
	$roPurpose2= $_POST["ro2"];
	$roPurpose3= $_POST["ro3"];
	$roPurpose4= $_POST["ro4"];
	$roPurpose5= $_POST["ro5"];
	$uname = $_SESSION["email"];
	/*
		CODE for 'SUBMIT' button in Purpose TAB
	*/
	if ($addPurpose == "Submit")
	{
		$flagPurpose=0;
		if($roPurpose1 || $roPurpose2 || $roPurpose3 || $roPurpose4 || $roPurpose5)
		{
			//add them to db;
			$roarray = array();$l = 0;
			array_push($roarray,$roPurpose1);
			array_push($roarray,$roPurpose2);
			array_push($roarray,$roPurpose3);
			array_push($roarray,$roPurpose4);
			array_push($roarray,$roPurpose5);
			for($i=0;$i<5;$i++)
			{
				$tmp = $i + 1;
				$nm = 'art'.$tmp;
				if($roarray[$i])
				{
					$art = $_POST[$nm];
					$purpose = strtolower($roarray[$i]);
					$purpose = trim($purpose);
					$purpose = str_replace(" ","_",$purpose);
					$result = mysql_query("SELECT count FROM small_purpose WHERE main='$main' AND purpose='$purpose' AND artifacts='$art'", $con);
					$cc = mysql_fetch_array($result);
					if($cc)
					{
						$new_count = $cc['count'] + 1;
						mysql_query("UPDATE small_purpose SET count=$new_count WHERE main='$main' AND purpose='$purpose' AND artifacts='$art'", $con);
				
						$q = mysql_query("SELECT * FROM small_purpose WHERE count=$new_count AND main='$main' AND purpose='$purpose' AND artifacts='$art'", $con);
						$id = mysql_fetch_array($q)["id"];
					}
					else
					{
						mysql_query("INSERT INTO small_purpose  ( main, artifacts, purpose, count) VALUES ('$main','$art','$purpose',1)", $con);
						$id = mysql_insert_id();
					}
					mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'small_purpose', '$id') ", $con);
						
				}
			}
			$_SESSION["present"]=$main;
			header("Location:./data.php");
			$_SESSION["main"] = $main;
			$flagPurpose = 2;
		}
		else
		{
			$flagPurpose = 1;
		}
	}
	/*
		CODE for 'CHANGE' button in Purpose TAB
	*/
	else if(isset($_POST["change"]))
	{
		$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1", $con);
		$main = mysql_fetch_array($result)["main"];
		$_SESSION["main"]= $main;
		$_SESSION["ma"]= $main;
		header("Location:./components.php");
	}
	/*
		CODE for 'NEXT' button in Purpose TAB
	*/
	else if($submitPurpose == "Go to the Next Step")
	{
		//unset($_SESSION["$defaultTab"]);
		header("Location:./actionOntology.php");
	}
	else;
}
// In case anything extra from the default values is somehow stored in the Default TAB
else
{
	echo "ERROR: Default TAB not set";
}

?>

<html lang="en">
<head>
	<title>Components</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./draganddrop.js"></script>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>-->
	

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
<script>
  $(document).ready(function() {
		  <?php 
		  $hello = array(); 
		  $file = fopen('dict.txt','r');
		  while (!feof($file))
		  {
		  array_push($hello,fgets($file));
		  }
		  array_pop($hello);
		  $world = json_encode($hello);
		  echo "var row =".$world.";\n";

		  ?> 
		  //alert(row);
		  $(".search").typeahead({source:row,items:10}) 
  	})


</script>

<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li <?php if($defaultTab=='component') echo 'class="active"'; ?> style="width:33.33%; text-align:center;"><a href="#component" data-toggle="tab">Components of Artifact</a></li>
			<li <?php if($defaultTab=='relation') echo 'class="active"'; ?> style="width:33.33%; text-align:center;"><a href="#relation" data-toggle="tab">Relation of Components</a></li>
			<li <?php if($defaultTab=='purpose') echo 'class="active"'; ?> style="width:33.33%; text-align:center;"><a href="#purpose" data-toggle="tab">Purpose of Componennts</a></li>
		</ul>
	</div>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade <?php if($defaultTab=='component') echo 'in active'; ?>" id="component">
			<form action="./components.php" method="post">
				<p style="text-align:center; font-size:20px; font-family:Droid Sans; padding:20px;">Enter the Artifacts that are related to '<?php $_SESSION["present"] = $main; echo strtoupper($main); ?>'
					<input type="hidden" name="tab" value="component"  />
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
		 		</p>
			</form>
			<?php
			if ($flagComp == 3 && $defaultTab == "component")
			{
			?>
				<div class="alert alert-danger">
					Press Submit only after filling atleast One of the available boxes.
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
			<?php
			}
			if ($flagComp == 2 && $defaultTab == "component")
			{
			?>
				<div class="alert alert-success">
					Submitted Successfully
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
			<?php
			}
			?>
			<form action="./components.php" method="post">
				<table border=0 align="center">
				<tr>
					<th rowspan="6"></th>
					<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<td><p style="text-align:justify;"><i>Enter the Artifacts:</i></p><input type="text" name="roComponent1" autocomplete="off" class="search"></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent2" autocomplete="off" class="search"/></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent3" autocomplete="off" class="search"/></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent4" autocomplete="off" class="search"></td>
				</tr>
				<tr>
					<td><input type="text" name="roComponent5" autocomplete="off" class="search"/></td>
				</tr>
				<tr>
					<td style="text-align:right">
						
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10" id="submitButtonComponent" align="center">
							  <input type="hidden" name="main" value="<?php echo $main; ?>"  />
							  <input type="hidden" name="tab" value="component"  />
							  <button type="submit" id="submit" name="addComponent" value="Submit" class="btn btn-primary">Submit</button>
							  <button type="submit" id="next" name="submitComponent" value="Go to the Next Step" class="btn btn-success">Next step</button>
							</div>
						</div>
					</td>
				</tr>
				</table>
			</form>
		</div>
		<div class="tab-pane fade <?php if($defaultTab == 'relation') echo 'in active'; ?>" id="relation">
			<?php $_SESSION["present"] = $mainRel;?>
			<form action="./components.php" method="POST">
				<input type="hidden" name="tab" value="relation"  />
				<p style="margin:10px;font: 20px Droid Sans;padding:10px;">
					Drag and drop the artifact into the box that suits the features of the artifact best in relation to '
					<span id="main"><?php echo strtoupper($mainRel); ?></span> '
					<input type="submit" name="change" class="btn btn-inverse btn-mini" value="Change the Artifact">
				</p>
			</form>
			<div id="anchor">
				<div id="help" class="alert ">
				<?php include("help.php"); ?>
				</div>
			</div>
			<button class="btn btn-warning pull-right" id="trigger" >Help</button>

			<div draggable="true" id="move" style="font-size: 20px ;text-align:center;" align="center">
				<i><?php $arti= strtoupper($art[$i]); echo $arti;?></i>
				</br>
				</br>
			</div>
			<form action="./components.php" method="POST">
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10" id="skipArtifact" align="center">
					<button type="submit" id="submit" name="skip" value="Skip the Artifact" class="btn btn-inverse btn-mini">Skip the Artifact</button>
				</div>
			</div>
			</form>
			<div class="container-fluid" style="width: 80%;padding-left:15%">
				<div id="opone">
					<p style="">
						<li id="awesome">Required in Manfacture of <b><i><?php echo strtoupper($mainRel); ?></b></i></li>
						<li id="awesome">Essential for <b><i><?php echo strtoupper($mainRel); ?></b></i>'s primary purpose </li>
					</br>
					</p>
				</div>
				<div id="optwo">
					<p style="">
						<li id="awesome">Not required in Manfacture of <b><i><?php echo strtoupper($mainRel); ?></b></i> but</li>
						<li id="awesome">is a part of it  to fulfill its primary purpose</li>
					
					</br>
					</p>
				</div>
				<div id="opthree">
					<p style="">
						<li id="awesome">Present in <b><i><?php echo strtoupper($mainRel); ?></b></i> but </li>
						<li id="awesome">Useful in other purposes not primary</li>
					</br>
					</br>
					</p>
				</div>
				<div id="opfour">
					<p style="">
						<li id="awesome">Not a part of <b><i><?php echo strtoupper($mainRel); ?></b></i> but </li>
						<li id="awesome">Required to fulfill its primary purpose.</li>
					</br>
					</br>
					</p>
				</div>
				<div id="opfive" >
					<p style="">
						<li id="awesome">Subtype of <b><i><?php echo strtoupper($mainRel); ?></b></i></li>
					</br>
					</br>
					</br>
					</br>
					</br>
					</p>
				</div>
			</div>
			<div>
				<form action="./components.php" method="POST">
					<p style="margin:10px; text-align:right">
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" id="submitButtonRelation" align="center">
							<input type="hidden" name="tab" value="purpose"  />
							<!--<button type="submit" id="submit" name="skip" value="Skip the Artifact" class="btn btn-primary">Skip the Artifact</button>-->
							<button type="submit" id="next" name="submitRelation" value="Go to the Next Step" class="btn btn-success">Next step</button>
						</div>
					</div>
					</p>
				</form>
			</div>
		</div>
		<div class="tab-pane fade <?php if($defaultTab=='purpose') echo 'in active'; ?>" id="purpose">
			<?php
			if($flagPurpose == 1 && $defaultTab == "purpose")
			{
			?>
				<div class="alert alert-danger">press submit only after entering into atleast one of the input box
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>

			<?php
				//$flagPurpose = 0;
			}
			elseif($flagPurpose == 2 && $defaultTab == "purpose")
			{
			?>
				<div class="alert alert-success">Your input was successfully submitted.
					<button type="button" class="close" data-dismiss="alert">&times;</button>
				</div>
			<?php
				//$flagPurpose = 0;
			}
			?>
			<form action="./components.php" method="post" style="text-align:center;">
				<p style="color:black;font: 20px Droid Sans;text-align:center">
					Write the Purpose of these artifacts with reference to <?php $_SESSION["present"]=$main;echo strtoupper($main); ?>
					<input type="hidden" name="tab" value="purpose"  />
					<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini" />
					<table align="center" cellpadding =5px >
					<tr>
					<?php
						$result = mysql_query("SELECT * FROM temp WHERE main='$main' ORDER BY RAND() LIMIT 0,5");
						$l = mysql_num_rows($result);
						if($l == 0)
						{
					//		header("Location:./firststep.php");
						}
						for($i = 1; $i <= $l;$i++)
						{
							$row = mysql_fetch_array($result);
							echo '<td style="text-align:right;">'.strtoupper($row["artifacts"]).'</td>';
					?>
						<td>
							<input type="hidden" name="tab" value="purpose"  />
							<input type="hidden" name=<?php echo "art".$i; ?> value=<?php echo $row["artifacts"]; ?> >
							<input type="text" name=<?php echo "ro".$i; ?> placeholder="Enter Purpose" autocomplete="OFF" >
						</td>
						</tr>
					<?php
						}
					?>
					</table>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10" id="submitButtonPurpose" align="center">
							<input type="hidden" name="tab" value="purpose"  />
							<input type="hidden" name="main" value=<?php echo $main; ?>  />
							<button type="submit" id="submit" name="addPurposeComp" value="Submit" class="btn btn-primary">Submit</button>
						  	<button type="submit" id="next" name="submitPurposeComp" value="Go to the Next Step" class="btn btn-success">Next step</button>
						</div>
					</div>
				</p>
			</form>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
	$("#help").hide();
	$("#trigger").click(function() {
		$("#help").slideToggle();
	});
});
</script>
</body>
</html>
