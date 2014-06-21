<!DOCTYPE html>
<html lang="en">
<head>
<title>SecondStep</title>
<link rel="stylesheet" src="../css/bootstrap.css">
</head>
<body>
<div id="container">
</div>
</div>
<?php
include('game.php');
?>
<?php
include('db_connection.php');
$result = mysql_query("SELECT * FROM class");
while($row=mysql_fetch_array$result()) {
	echo $row["artifacts"]+" "+$row["category"];
}
?>
</body>
</html>
