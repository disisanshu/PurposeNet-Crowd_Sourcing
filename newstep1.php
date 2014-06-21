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
$cat1 = $_POST["cat1"];
$cat2 = $_POST["cat2"];
$cat3 = $_POST["cat3"];
$cat4 = $_POST["cat4"];
$cat5 = $_POST["cat5"];
$main = $_POST["main"];
print $cat1;
print $cat2;
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
		array_push($roarray,$ro1);$l++;
		array_push($roarray,$ro2);$l++;
		array_push($roarray,$ro3);$l++;
		array_push($roarray,$ro4);$l++;
		array_push($roarray,$ro5);$l++;
		$catarray = array();$m = 0;
		array_push($catarray,$cat1);$m++;
		array_push($catarray,$cat2);$m++;
		array_push($catarray,$cat3);$m++;
		array_push($catarray,$cat4);$m++;
		array_push($catarray,$cat5);$m++;
		for($i=0;$i<5;$i++)
		{
			if($roarray[$i] && $catarray[$i])
			{
//				print "CAME<br>";
//				print $catarray[$i]."<br>";
				$category = $catarray[$i];
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
				$new = "";
				if($cc)
				{
					$new_count = $cc['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$artifact'");
					$new = $artifact;
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$artifact'");
					$id = mysql_fetch_array($q)["id"];
				}
				else if($cc1)
				{
					$new_count = $cc1['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$pl'");
					$new = $pl;
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$pl'");
					$id = mysql_fetch_array($q)["id"];
				}
				else if($cc2)
				{
					$new_count = $cc2['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$sin'");
					$new = $sin;
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$sin'");
					$id = mysql_fetch_array($q)["id"];
				}
				else if($cc3)
				{
					$new_count = $cc3['count'] + 1;
					mysql_query("UPDATE temp SET count=$new_count WHERE main='$main' AND artifacts='$nos'");
					$new = $nos;
					$q = mysql_query("SELECT * FROM temp WHERE count='$new_count' AND main='$main' AND artifacts='$nos'");
					$id = mysql_fetch_array($q)["id"];
				}
				else
				{
			//		echo "asdkjh<br />";
					mysql_query("INSERT INTO temp ( main, artifacts, count) VALUES ('$main','$artifact',1)");
				//UDATA TABLE 
					$id = mysql_insert_id();
					$new = $artifact;
					$query = mysql_query("SELECT * FROM objects_fwdc WHERE main='$artifact'");
					$l = mysql_num_rows($query);
					if($l == 0)
					{
					//	mysql_query("INSERT INTO objects_fwdc VALUES ('$artifact',1)");
					}
				}
				mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'temp', '$id') ");
				$query = mysql_query("SELECT * FROM class WHERE main='$main' AND artifacts='$new' AND category='$category'");
				if(mysql_num_rows($query))
				{
					$row = mysql_fetch_array($query);
					$c = $row["count"];
					$c = $c + 1;
					$id = $row["id"];
					mysql_query("UPDATE class SET count='$c' WHERE main='$main' AND artifacts='$new' AND category='$category'");
					mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'class', '$id') ");
				}
				else
				{
					mysql_query("INSERT INTO class (main,artifacts,category,count) VALUES ('$main','$new','$category',1)");
					$id = mysql_insert_id();
					mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'class', '$id') ");
//					print $id; 
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

<style>
html
{
overflow-y:scroll;
}
.bircle{
width: 30px;
height: 30px;
background-color: rgb(214,213,192);
border: solid 1px #000;
border-radius: 50%
}
.bircle:hover{
background-color: rgb(255,255,255);
}
.bircle:focus{
background-color: rgb(255,255,255);
}
</style>
<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />

</head>
<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
<?php include("headandnav.php"); ?>
<script>
$("#second").css('background-color','rgb(120,120,120)');
$("#secondtext").css('color','rgb(255,255,255)');
</script>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:80%;margin:auto;">

	<form action="./newstep1.php" method="post">
		<p style="text-align:center;font-size:20px;font-family:Droid Sans;padding-up:20px;">Enter the Artifacts that are related to '<?php $_SESSION["present"] = $main; echo strtoupper($main); ?>'
			<input type="submit" name="change" value="Change the Artifact" class="btn btn-inverse btn-mini"/>
 		</p>
	</form> 
<?php
if ($flag == 3)
{
?>
	<div class="alert alert-danger" id="testing">
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
	<p id="catname" style="text-align:right" > Category Name </p>
	<form action="./newstep1.php" method="post">
		<table border=0 style="margin-left:40%;">
		<tr>
			<td><input type="text" name="ro1" id="ro1" autocomplete="off" class="search" >
			<input type="hidden" name="cat1" id="cat1" ></td>
			<td width="60%">&nbsp;&nbsp;<span id="text1"><button class="bircle" id="a10" ></button>&nbsp;&nbsp;<button class="bircle" id="a11" ></button>&nbsp;&nbsp;<button class="bircle" id="a12" ></button>&nbsp;&nbsp;<button class="bircle" id="a13" ></button>&nbsp;<button class="bircle" id="a14" ></button></span> <span id="some1"> </span>&nbsp;&nbsp;&nbsp;<button class="bircle" id="back1" ></button></td>

		</tr>
		<tr>
			<td><input type="text" name="ro2" id="ro2" autocomplete="off" class="search" >
			<input type="hidden" name="cat2" id="cat2" ></td>
			<td width="60%">&nbsp;&nbsp;<span id="text2"><button class="bircle" id="a20" ></button>&nbsp;&nbsp;<button class="bircle" id="a21" ></button>&nbsp;&nbsp;<button class="bircle" id="a22" ></button>&nbsp;&nbsp;<button class="bircle" id="a23" ></button>&nbsp;<button class="bircle" id="a24" ></button></span> <span id="some2"> </span>&nbsp;&nbsp;&nbsp;<button class="bircle" id="back2" ></button></td>
		</tr>
		<tr>
			<td><input type="text" name="ro3" id="ro3" autocomplete="off" class="search" >
			<input type="hidden" name="cat3" id="cat3" ></td>
			<td width="60%">&nbsp;&nbsp;<span id="text3"><button class="bircle" id="a30" ></button>&nbsp;&nbsp;<button class="bircle" id="a31" ></button>&nbsp;&nbsp;<button class="bircle" id="a32" ></button>&nbsp;&nbsp;<button class="bircle" id="a33" ></button>&nbsp;<button class="bircle" id="a34" ></button></span> <span id="some3"> </span>&nbsp;&nbsp;&nbsp;<button class="bircle" id="back3" ></button></td>
		</tr>
		<tr>
			<td><input type="text" name="ro4" id="ro4" autocomplete="off" class="search">
			<input type="hidden" name="cat4" id="cat4" ></td>
			<td width="60%">&nbsp;&nbsp;<span id="text4"><button class="bircle" id="a40" ></button>&nbsp;&nbsp;<button class="bircle" id="a41" ></button>&nbsp;&nbsp;<button class="bircle" id="a42" ></button>&nbsp;&nbsp;<button class="bircle" id="a43" ></button>&nbsp;<button class="bircle" id="a44" ></button></span> <span id="some4"> </span>&nbsp;&nbsp;&nbsp;<button class="bircle" id="back4" ></button></td>
		</tr>
		<tr>
			<td><input type="text" name="ro5" id="ro5" autocomplete="off" class="search" >
			<input type="hidden" name="cat5" id="cat5" ></td>
			<td width="60%">&nbsp;&nbsp;<span id="text5"><button class="bircle" id="a50" ></button>&nbsp;&nbsp;<button class="bircle" id="a51" ></button>&nbsp;&nbsp;<button class="bircle" id="a52" ></button>&nbsp;&nbsp;<button class="bircle" id="a53" ></button>&nbsp;<button class="bircle" id="a54" ></button></span> <span id="some5"> </span>&nbsp;&nbsp;&nbsp;<button class="bircle" id="back5" ></button></td>
		</tr>
		<tr>
			<td style="text-align:center">
				<input type="hidden" name="main" value=<?php echo $main; ?> />
				<input type="submit" name="add" value="Submit" class="btn btn-primary" />
				<input type="submit" name="submit" value="Go to the Next Step" class="btn btn-success" />
			</td>
		</tr>
		</table>

		<script>
                $(document).ready( function() {
<?php
		$cat = array();
		$cat = ["coreComponent","purposeServingAccessory","nAccesssory","nonPurposeServingAccessory","subType"];
		for($o=1;$o<6;$o++) {
?>
/*			$(<?php echo '"'."#text$o".'"';?>).hide();
			$(<?php echo '"'."#ro$o".'"';?>).keydown(function(){
				var val = $(this).val();
				if($.trim(val).length != 0 && !($(<?php echo '"'."#back$o".'"';?>).is(":visible")))
				{
					$(<?php echo '"'."#text$o".'"';?>).show();
				} else {
					if($(<?php echo '"'."#back$o".'"';?>).is(":visible"))
					{
						$(<?php echo '"'."#back$o".'"';?>).hide();
						$(<?php echo '"'."#some$o".'"';?>).html("");
					}
					$(<?php echo '"'."#text$o".'"';?>).hide();
				}

			
			});
 */
			
			$(<?php echo '"'."#back$o".'"';?>).hide();
			$(<?php echo '"'."#back$o".'"';?>).prop('title','back');
			$(<?php echo '"'."#back$o".'"';?>).hover(function(event){
				event.preventDefault();
				$("#catname").html("Back");					
			});
			$(<?php echo '"'."#back$o".'"';?>).live('mouseleave',function(event){
				event.preventDefault();
				$("#catname").html("Category Name");					
			});
			$(<?php echo '"'."#back$o".'"';?>).focus(function(event){
				event.preventDefault();
				$("#catname").html("Back");					
			});
			$(<?php echo '"'."#back$o".'"';?>).focusout(function(event){
				event.preventDefault();
				$("#catname").html("Category Name");					
			});

			$(<?php echo '"'."#back$o".'"';?>).click(function(event) {
				event.preventDefault();
				$(<?php echo '"'."#text$o".'"';?>).fadeIn();
				$(<?php echo '"'."#some$o".'"';?>).html("");
				$(<?php echo '"'."#back$o".'"';?>).hide();
			});
	
<?php
			for($i=0;$i<5;$i++) {
?>
			var id = <?php echo '"'."#a$o$i".'"';?>;
				$(id).prop('title',<?php echo '\''.$cat[$i].'\'' ;?>);

				$(id).click(function(event) {
					event.preventDefault();
					$(<?php echo '"'."#text$o".'"';?>).hide();
					$(<?php echo '"'."#some$o".'"';?>).html(<?php echo '\''.$cat[$i].'\'' ;?>);
					$(<?php echo '"'."#back$o".'"';?>).slideDown();
					$(<?php echo '"'."#cat$o".'"';?>).val(<?php echo '\''.$cat[$i].'\'' ;?>);
				});

				$(id).focus(function(event) {
					event.preventDefault();
					$("#catname").html(<?php echo '\''.$cat[$i].'\'' ;?>);					
				});

				$(id).focusout(function(event) {
					event.preventDefault();
					$("#catname").html("Category Name");					
				});

				$(id).hover(function(event) {
					event.preventDefault();
					$("#catname").html(<?php echo '\''.$cat[$i].'\'' ;?>);					
				});

				$(id).live('mouseleave', function (event) {
					event.preventDefault();
					$("#catname").html("Category Name");					
		  		});
<?php
			}
		}
?>

		});
		</script>
	</form>
</div>
</body>
</html>
