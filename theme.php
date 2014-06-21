<?php

session_start();

include("db_connection.php");

$_SESSION["i"] = 0;
$_SESSION["flag"] = 1;
$domain = $_SESSION["domain"];

if(!$_SESSION["main"])
{
//	$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
	$result = mysql_query("SELECT * FROM temp INNER JOIN objects_fwdc ON temp.main=objects_fwdc.main WHERE objects_fwdc.domain='$domain' ORDER BY RAND() LIMIT 1");
	$row = mysql_fetch_array($result);
	$_SESSION["ma"] = $row["main"];
}
else
{
//	$result = mysql_query("SELECT * FROM temp GROUP BY main ORDER BY RAND() LIMIT 1");
	$_SESSION["ma"] = $_SESSION["main"];
}
//echo $_SESSION["main"];
header("Location:./alt_sec.php");

?>
