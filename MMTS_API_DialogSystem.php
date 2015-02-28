<!DOCTYPE HTML>
<?php
$result= "";
$query= $_POST["query"];
if($query)
{
	// write the Query Generation part here
	// Store it in the variable $result after =
	/*	Sample example of the code:
			$queryResult= ;
			$result= mysql_fetch_array($queryResult);
	*/
}
?>

<html>
<head>
	<title>MMTS Dialog System API</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="MMTS Dialog System, MMTS, MMTS Train timing, MMTS QA System, Purposenet, Purpose net, PurposeNet, Ontology, KnowledgeBase, Knowledgebase">
	<meta name="author" content="Anshu Shekhar and Rishabh Srivastav">
</head>
<body>

<style type="text/css">

</style>

<h1 align="center">MMTS Query System</h1>
<div class="container-fluid" style="border-radius:10px; box-shadow:10px 10px 10px 10px rgba(0,0,0,0.4); padding:20px; width:65%; margin:auto; ">
	<form action="" method="post" style="align:center">
		<div class="form-group">
			<label for="query" class="col-sm-2 control-label" style="float:left ">Ask your <i>Query</i> here : &nbsp;</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="query" style="width:600px;" placeholder="Enter your Hindi query in English here (query will be automatically transliterated to Hindi)" name="query" autocomplete="off" >
				&nbsp;
				<button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
			</div>
		</div>
		</br>
		<div class="container-fluid" style="border-radius:10px; box-shadow:5px 5px 6px 6px rgba(0,0,0,0.4); padding:20px; width:90%; margin:auto; ">
		<div class="form-group">
			<label for="query" class="col-sm-2 control-label" style="float:left "><b><i>Query</i></b> : &nbsp;</label>
			<div class="col-sm-10">
				<?php echo $query."</br>"; ?>
			</div>
		</div>
		</br>
		<div class="form-group">
			<label for="query" class="col-sm-2 control-label" style="float:left "><b><i>Result</i></b> : &nbsp;</label>
			<div class="col-sm-10">
				<?php echo $result."</br>"; ?>
			</div>
		</div>
		</div>
		</br>
		<div style="float:right;">
		<script>
			var s = document.createElement('script'); s.setAttribute('src','http://developer.quillpad.in/static/js/quill.js?lang=Hindi&key=1fda454ed642981b513705279fb626ee'); s.setAttribute('id','qpd_script'); document.head.appendChild(s);
		</script>
		<span id="qpd_banner">Hindi Typing On This Site Is Powered By <a href="http://www.quillpad.in/" target="_blank">Quillpad</a>.</span>
		</div>
	</form>
</div>
</body>
</html>