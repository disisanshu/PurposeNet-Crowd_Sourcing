<html>
  <head>
     <link rel="stylesheet" href="css/bootstrap.css">
     <script type="text/javascript" src="jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <script type="text/javascript" src="other.js"></script>
  </head>
  
<body style="background-color:white;font-size:12;">
<img src="../iiith.png">
<h1 style="text-align:center;">PURPOSENET CROWD SOURCING</h1>
<div style="margin:30;">
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li><a href="./home.php" class="divider-vertical;">Home</a></li>
				<li><a href="./firststep.php" class="divider-vertical;">First Step</a></li>
				<li><a href="./theme.php" class="divider-vertical;">Second Step</a></li>
				<li><a href="./check/main.php" class="divider-vertical;">Check Step</a></li>
				<li><a href="./contact.php" class="divider-vertical;">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid">
<div style="
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 20px;
border:1px solid;
background-color:#FFFFFF;
margin-right:40;
margin-left:40;
margin-bottom:40;">

<table width="80%" align="center" cellpadding="20" cellspacing="20">
<?php
include("../db_connection.php");
$l = 0;
$result = mysql_query("SELECT * FROM temp ORDER BY count ASC LIMIT $l,10");
$len = mysql_num_rows($result);
for( $i=0;$i<$len;$i++)
{
?>
<tr>
<td width="40%">
Is <?php $row = mysql_fetch_array($result);echo $row["artifacts"] ?> related to Car
</td>
<td width="40%">
    <button class="btn btn-danger" id=<?php printf("no$i"); ?> >No</button><span id=<?php printf("ob$i"); ?> style="color:red;" ></span>
    <button class="btn btn-success" id=<?php printf("yes$i"); ?> >Yes</button><span id=<?php printf("oa$i"); ?> style="color:green;"></span>
</td
</tr>
<?php
}
?>
</table>
</div>
</div>
<div id="footer" style="float:right;">
Copyrights reserved for the IIIT@LTRC
</div>
</body>
</html>
