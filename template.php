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
				$result = mysql_query("SELECT count FROM alter WHERE main='$main' AND artifacts='$artifact' AND uname='$uname'");
				$cc = mysql_fetch_array($result);
				$pl = Inflector::pluralize($artifact);
				$result = mysql_query("SELECT count FROM alter WHERE main='$main' AND artifacts='$pl' AND uname='$uname'");
				$cc1 = mysql_fetch_array($result);
				$sin = Inflector::singularize($artifact);
				$result = mysql_query("SELECT count FROM alter WHERE main='$main' AND artifacts='$sin' AND uname='$uname'");
				$cc2 = mysql_fetch_array($result); 
				$nos = str_replace("_","",$artifact);
				$result = mysql_query("SELECT count FROM alter WHERE main='$main' AND artifacts='$nos' AND uname='$uname'");
				$cc3 = mysql_fetch_array($result); 
				if($cc)
				{
					$new_count = $cc['count'] + 1;
					mysql_query("UPDATE alter SET count=$new_count WHERE main='$main' AND artifacts='$artifact' AND uname='$uname'");
				}
				else if($cc1)
				{
					$new_count = $cc1['count'] + 1;
					mysql_query("UPDATE alter SET count=$new_count WHERE main='$main' AND artifacts='$pl' AND uname='$uname'");
				}
				else if($cc2)
				{
					$new_count = $cc2['count'] + 1;
					mysql_query("UPDATE alter SET count=$new_count WHERE main='$main' AND artifacts='$sin' AND uname='$uname'");
				}
				else if($cc3)
				{
					$new_count = $cc3['count'] + 1;
					mysql_query("UPDATE alter SET count=$new_count WHERE main='$main' AND artifacts='$nos' AND uname='$uname'");
				}
				else
				{
					//		echo "asdkjh<br />";
					$uname = $_SESSION["email"];
					mysql_query("INSERT INTO alter VALUES ('$uname','$main','$artifact',1)");
					$query = mysql_query("SELECT * FROM objects_fwdc WHERE main='$artifact'");
					$l = mysql_num_rows($query);
					if($l == 0)
					{
						//	mysql_query("INSERT INTO objects_fwdc VALUES ('$artifact',1)");
					}
				}
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
		//	$l = mysql_query("SELECT * FROM alter ORDER BY RAND() LIMIT 1");
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

	//$l = mysql_query("SELECT * FROM alter ORDER BY RAND() LIMIT 1");
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


<!DOCTYPE HTML>
<html lang="en">
<head>

<title>
Template
</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
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
<script>
$(document).ready(function() {
        $("#help").hide();
        $("#trigger").click(function() {
           $("#help").slideToggle();
         });
});
</script>
</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">

<?php
include("headandnav.php");
?>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:80%;margin:auto">

<form action="./template.php" method="post">
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
<a id="trigger" style="cursor:pointer;" >Awesomeness</a>
<form action="./template.php" method="post" id="help">
<table border=0 align="center">
<tr>
<th rowspan="6"></th>
<th rowspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<td><input type="text" name="ro1" autocomplete="off" class="search"></td>
</tr>
<tr>
<td><input type="text" name="ro2" autocomplete="off" class="search"/></td>
</tr>
<tr>
<td><input type="text" name="ro3" autocomplete="off" class="search"/></td>
</tr>
<tr>
<td><input type="text" name="ro4" autocomplete="off" class="search"></td>
</tr>
<tr>
<td><input type="text" name="ro5" autocomplete="off" class="search"/></td>
</tr>
<tr>
<td style="text-align:right">
<input type="hidden" name="main" value=<?php echo $main; ?> />
<input type="submit" name="add" value="Submit" class="btn btn-primary" />
<input type="submit" name="submit" value="Go to the Next Step" class="btn btn-success" />
</td>
</tr>
</table>
</form>

</div>
</body>
</html>

