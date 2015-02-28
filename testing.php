<?php
	echo "Loaded...</br>";
	session_start();
	$con= mysql_connect("127.0.0.1", 'root', "disisanshu");
	mysql_select_db("pnet", $con);
	$main= mysql_query("select main from objects_fwdc limit 1");
	$_SESSION["mainCheck"]= $main;
	echo $main."</br>";
	echo "Checking Again...</br>";
	session_destroy();
	session_start();
	if(isset($_SESSION["mainCheck"]))
	{
		$main= $_SESSION["mainCheck"];
		echo "Already Present- ".$main."</br>";
	}
	//else
	//{
		$main= mysql_query("select main from objects_fwdc order by rand() limit 1");
		$_SESSION["mainCheck"]= $main;
		echo "Not present- ". $_SESSION["mainCheck"]."</br>";
	//}
?>
<!--<html>
<head>
<title>
Testing...
</title>
</head>
<body>
<p>
	<form action="./testing.php?id=checking" method="GET">
		<input type="submit"><!--name="var" value="Check Value!">

	</form>
</p>
</body>
</html>-->