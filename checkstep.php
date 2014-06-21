<?php
session_start();
include("db_connection.php");

if(ISSET($_POST["addmore"]))
{
	$_SESSION["pointer"] = $_SESSION["pointer"] + 10;
	if($_SESSION["pointer"] >= 25)
	{
		header("Location:./home.php");
	}
}
else
{
	$_SESSION["pointer"] = 0;
}
if(ISSET($_POST["done"]))
{
	header("Location:./home.php");
}


?>


<html>
  <head>
     <title>Check Step</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <script type="text/javascript" src="jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
  </head>

 
 <body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">
 <?php include("headandnav.php"); ?>
 <script>
 $("#check").css('background-color','rgb(120,120,120)');
 $("#check").css('border-radius','30px');
 $("#checktext").css('color','White');
 </script>
 <div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4);padding:20px;width:90%;margin:auto">
<table style="margin-left:20%" cellpadding="20" cellspacing="20" border=0>
<?php
include("./db_connection.php");
$l = $_SESSION["pointer"];
$domain = $_SESSION["domain"];
//$result = mysql_query("SELECT * FROM temp WHERE count>0 ORDER BY count ASC LIMIT $l,10");
$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' AND temp.count>0 ORDER BY temp.count ASC LIMIT $l,10");
$len = mysql_num_rows($result);
for( $i=0;$i<$len;$i++)
{
?>
	<tr>
		<td>
		Is <span id=<?php printf("artifact$i"); ?> style="font-weight:bold"><?php $row = mysql_fetch_array($result);echo $row["artifacts"]; ?></span> related to <span id=<?php printf("main$i"); ?> style="font-weight:bold"><?php echo strtoupper($row["main"]);?></span>
		</td>
		<td>
		    <button class="btn btn-success" id=<?php printf("yes$i"); ?> style="border-radius:10px;">Yes</button><span id=<?php printf("oa$i"); ?> style="color:green;"></span>
		    <button class="btn btn-danger" id=<?php printf("no$i"); ?> style="border-radius:10px;width:50px;">No</button><span id=<?php printf("ob$i"); ?> style="color:red;" ></span>
		</td>
	</tr>
<?php
}
?>
	<tr>
		<td>
		</td>
		<td>
			<form action="checkstep.php" method="post">
				<input type="submit" name="addmore" value="check some more" class="btn btn-primary"/>
				<input type="submit" name="done" value="DONE!!" class="btn btn-success" />
			</form>
		</td>
	</tr>
</table>
<?php include("other.php"); ?>
<!-- <div style="float:right;background-color:Yellow;">HARSHA VARDHAN</div> -->
</div>
</body>
</html>
