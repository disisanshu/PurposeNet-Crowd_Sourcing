<?php

include("db_connection.php");
session_start();

	$main = strtolower($_SESSION["present"]);
	$result = mysql_query(" SELECT artifacts, category, MAX( count ) FROM class WHERE main='$main' GROUP BY artifacts LIMIT 0 , 30 ");
	$s = '';
	while($row = mysql_fetch_array($result))
	{
		$s = $s.$row["category"]."(".$main.", ".$row["artifacts"].")\n";
	}

	$nm = "AuthoringTool/information_".$_SESSION["present"];
	$file = fopen($nm,"w");
	fwrite($file,$s);
	fclose($file);

	header("Location:AuthoringTool/writeUp.php");
	echo $main;
	echo $s;
?>
