<?php
session_start();
$initial = $_GET['initial'];
$fnal = $_GET['fnal'];
$main = strtolower($_GET['main']);
$main = strtolower($_SESSION['ma']);

include 'db_connection.php';

$result = mysql_query(" SELECT * FROM  class WHERE  artifacts='$initial' AND category='$fnal' AND main='$main' ");

$len = mysql_num_rows($result);

$uname = $_SESSION["email"];
if ($len)
{
	$row = mysql_fetch_array($result);
	$count = $row["count"] + 1;
	mysql_query("UPDATE class SET count='$count' WHERE artifacts='$initial' AND category='$fnal' AND main='$main' ");

	$q = mysql_query("SELECT * FROM class WHERE count='$count' AND artifacts='$initial' AND category='$fnal' AND main='$main' ");
	$id = mysql_fetch_array($q)["id"]; 
}
else
{
	mysql_query(" INSERT INTO class ( main , artifacts , category , count ) VALUES ( '$main' , '$initial' , '$fnal' , 1 ) ");
	$id = mysql_insert_id();
}
$uname = $_SESSION["email"];
//mysql_query("INSERT INTO ");
mysql_query("INSERT INTO udata (uname, tname, rowid ) VALUES ('$uname', 'class', '$id') ");


$_SESSION["i"] = $_SESSION["i"]+1;
$_SESSION["main"] = $main;

header("Location:./alt_sec.php");

?>
