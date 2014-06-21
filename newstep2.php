<!DOCTYPE HTML>
<?php
include("login_check.php");
include("pl.php");
include("db_connection.php");
$submit = $_POST["submit"];
$add = $_POST["add"];
$change = $_POST["change"];
$ro1 = $_POST["ro1"];
$ro2 = $_POST["ro2"];
$ro3 = $_POST["ro3"];
$ro4 = $_POST["ro4"];
$ro5 = $_POST["ro5"];
$main = $_POST["main"];
if($submit == "Go to the Next Step")
{
	header("Location:./theme.php");
}
if($add == "Submit")
{
	$flag = 0;
	if($ro1 || $ro2 || $ro3 || $ro4 || $ro5)
	{
		//add them to db;
		$roarray = array();$l = 0;
		if($ro1){array_push($roarray,$ro1);$l++;}
		if($ro2){array_push($roarray,$ro2);$l++;}
		if($ro3){array_push($roarray,$ro3);$l++;}
		if($ro4){array_push($roarray,$ro4);$l++;}
		if($ro5){array_push($roarray,$ro5);$l++;}
		for($i=0;$i<5;$i++)
		{
			if($roarray[$i])
			{
				$artifact = strtolower($roarray[$i]);
				$artifact = trim($artifact);
				$artifact = str_replace(" ","_",$artifact);
				$result = mysql_query("SELECT count FROM temp WHERE main='$main' AND artifacts='$artifact'");
				$cc = mysql_fetch_array($result);
				$pl = Inflector::pluralize($artifact);
				$result = mysql_query("SELECT count FROM temp WHERE main='$main' AND artifacts='$pl'");
				$cc1 = mysql_fetch_array($result);
				$sin = Inflector::singularize($artifact);
				$result = mysql_query("SELECT count FROM temp WHERE main='$main' AND artifacts='$sin'");
				$cc2 = mysql_fetch_array($result); 
				$nos = str_replace("_","",$artifact);
				$result = mysql_query("SELECT count FROM temp WHERE main='$main' AND artifacts='$nos'");
				$cc3 = mysql_fetch_array($result); 
				$uname = $_SESSION["email"];
				if($cc)
				{
					$new_count = $cc['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$artifact'");
					
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$artifact'");
					$id = mysql_fetch_array($q)["id"];
				}
				else if($cc1)
				{
					$new_count = $cc1['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$pl'");
					
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$pl'");
					$id = mysql_fetch_array($q)["id"];
				}
				else if($cc2)
				{
					$new_count = $cc2['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$sin'");
					
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$sin'");
					$id = mysql_fetch_array($q)["id"];
				}
				else if($cc3)
				{
					$new_count = $cc3['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$nos'");
					
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$nos'");
					$id = mysql_fetch_array($q)["id"];
				}
				else
				{
			//		echo "asdkjh<br />";
					mysql_query("INSERT INTO temp ( main, artifacts, count) VALUES ('$main','$artifact',1)");
				//UDATA TABLE 
					$id = mysql_insert_id();

					$query = mysql_query("SELECT * FROM objects_fwdc WHERE main='$artifact'");
					$l = mysql_num_rows($query);
					if($l == 0)
					{
					//	mysql_query("INSERT INTO objects_fwdc VALUES ('$artifact',1)");
					}
				}
				mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'temp', '$id') ");
			}
		}
		$_SESSION["main"] = $main;
		$flag = 2;
	}
	else
	{
		$flag = 3;
	}
}
else if ($change == "Change the Artifact")
{
	while(1){
		$l = mysql_query("SELECT * FROM objects_fwdc ORDER BY RAND() LIMIT 1");
	//	$l = mysql_query("SELECT * FROM temp ORDER BY RAND() LIMIT 1");
		$tmp = mysql_fetch_array($l)["main"];
		if($main != $tmp)
		{
			$main = $tmp;
			break;
		}
	}
	
}
else
{

	//$l = mysql_query("SELECT * FROM temp ORDER BY RAND() LIMIT 1");
	if($_SESSION["main"])
	{
		$main =$_SESSION["main"];
	}
	else
	{
		$l = mysql_query("SELECT * FROM objects_fwdc ORDER BY RAND() LIMIT 1");
		$tmp = mysql_fetch_array($l)["main"];
		$main = $tmp;
	}
}

?>
<html lang="en">
<head>
<title>
Second Step
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/raphael.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#second").css('background-color','rgb(120,120,120)');
$("#secondtext").css('color','rgb(255,255,255)');
</script>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:80%;margin:auto;">

	<form action="./secondstep.php" method="post">
		<p style="text-align:center;font-size:20px;font-family:Droid Sans;padding:20px;">Enter the Artifacts that are related to '<?php $_SESSION["present"] = $main; echo strtoupper($main); ?>'
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
 		</p>
	</form> 
<?php
if ($flag == 3)
{
?>
	<div class="alert alert-danger">
		Press Submit Only after filling atleast One of the available boxes.
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
if ($flag == 2)
{
?>
	
	<div class="alert alert-success">
		Submitted Successfully
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
<?php
}
?>
	<form action="./secondstep.php" method="post">
		<p id="tt"></p>
		<table border=0 align="center">
		<tr>
			<td><input type="text" name="ro1" id="ro1" autocomplete="off" class="search" ></td>
			<td>
			<select name="cat1" id="cat1" > 
				<option name="coreComponent">coreComponent</option>
				<option name="purposeServingAccessory">purposeServingAccessory</option>
				<option name="nonPurposeServingAccessory">nonPurposeServingAccessory</option>
				<option name="nAccessory">nAccessory</option>
				<option name="subType">subType</option>
			</select>
			</td>

		</tr>
		<tr>
			<td><input type="text" name="ro2" id="ro2" autocomplete="off" class="search" ></td>
			<td>
			<select name="cat2" id="cat2" > 
				<option name="coreComponent">coreComponent</option>
				<option name="purposeServingAccessory">purposeServingAccessory</option>
				<option name="nonPurposeServingAccessory">nonPurposeServingAccessory</option>
				<option name="nAccessory">nAccessory</option>
				<option name="subType">subType</option>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type="text" name="ro3" id="ro3" autocomplete="off" class="search" ></td>
			<td>
			<select name="cat3" id="cat3" > 
				<option name="coreComponent">coreComponent</option>
				<option name="purposeServingAccessory">purposeServingAccessory</option>
				<option name="nonPurposeServingAccessory">nonPurposeServingAccessory</option>
				<option name="nAccessory">nAccessory</option>
				<option name="subType">subType</option>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type="text" name="ro4" id="ro4" autocomplete="off" class="search"></td>
			<td>
			<select name="cat4" id="cat4" > 
				<option name="coreComponent">coreComponent</option>
				<option name="purposeServingAccessory">purposeServingAccessory</option>
				<option name="nonPurposeServingAccessory">nonPurposeServingAccessory</option>
				<option name="nAccessory">nAccessory</option>
				<option name="subType">subType</option>
			</select>
			</td>
		</tr>
		<tr>
			<td><input type="text" name="ro5" id="ro5" autocomplete="off" class="search" ></td>
			<td>
			<select name="cat5" id="cat5" > 
				<option name="coreComponent">coreComponent</option>
				<option name="purposeServingAccessory">purposeServingAccessory</option>
				<option name="nonPurposeServingAccessory">nonPurposeServingAccessory</option>
				<option name="nAccessory">nAccessory</option>
				<option name="subType">subType</option>
			</select>
			</td>
		</tr>
		<tr>
			<td style="text-align:center" colspan="2">
				<input type="hidden" name="main" value=<?php echo $main; ?> />
				<input type="submit" name="add" value="Submit" class="btn btn-primary" />
				<input type="submit" name="submit" value="Go to the Next Step" class="btn btn-success" />
			</td>
		</tr>
		</table>
		<script>
		$(document).ready( function() {
			 //$('#cat1').attr('disabled', 'disabled');
<?php
		for($i=1;$i<6;$i++)
		{
?>
			$(<?php echo '"'."#cat$i".'"';?>).attr("disabled","true");
			$(<?php echo '"'."#ro$i".'"';?>).keyup(function(){
				var val = $(this).val();
				if($.trim(val).length != 0)
				{
					$(<?php echo '"'."#cat$i".'"';?>).removeAttr("disabled");
				} else {
					$(<?php echo '"'."#cat$i".'"';?>).attr("disabled","true");
				}

				
			});
<?php
		}
?>

		});
		</script>
	</form>
</div>
</body>
</html>
