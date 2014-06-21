<?php 

include("db_connection.php");

$y = $_GET["y"];
$w = $_GET["art"];
$main = strtolower($_GET["main"]);

if($y == 1)
{
	mysql_query("UPDATE temp SET count=count+1 WHERE main='$main' AND artifacts='$w' ");
}
else if ($y == 0)
{
	mysql_query("UPDATE temp SET count=count-1 WHERE main='$main' AND artifacts='$w' ");
}

echo "Success";

?>
