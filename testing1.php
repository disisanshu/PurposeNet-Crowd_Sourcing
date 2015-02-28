<?php
	$post= $_POST["pass"];
	echo $post;
	$_POST["pass"]= "Value Passed!";
	header("Location:./testing.php");
?>
