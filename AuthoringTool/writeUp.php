<?php
session_start();
	$main = $_SESSION["present"];
	echo $main;
 	exec('javac authoring_tool/AuthoringTool.java');
	exec('java authoring_tool.AuthoringTool '.$main,$result, $status);

	if ($status === 0)
	{
		echo implode('<br/>',$result);//all output is assigned to this array, line per line
	}
	else
	{
		echo 'Failed to exec programme, status code: '.$status;
	}

	header("Location:../dokuwiki-2012-10-13/doku.php?id=".$main);
?>
