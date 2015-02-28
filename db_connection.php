<?php
$con = mysql_connect("localhost","root","disisanshu") or die(mysql_error());
$pnet= mysql_select_db("pnet", $con);
//$con1= mysql_connect("localhost","nipun","123ltrc") or die(mysql_error());
//$purposenet= mysql_select_db("purposenet", $con1);
session_start();
if(!$_SESSION["domain"])
{
	$_SESSION["domain"] = "electronic";
}
?>
