<?php
include('db_connection.php');
//get the q parameter from URL
$q=$_GET["q"];


$arr =array();
$result = mysql_query("SELECT * FROM temp");
$l = 0 ;
while($row = mysql_fetch_array($result))
{
	$arr[$l] = $row["artifacts"];
	$l = $l + 1;
}
//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
	$hint="";
	for($i=0; $i<$l; $i++)
	{
		$y=$arr[$i];
		if ($y)
		{
		      //find a link matching the search text
		      if (stristr($y,$q))
		      {
		            if ($hint=="")
		            {
		        	    $hint=$y;
			    }
			    else
			    {
				    $hint=$hint . "<br />".$y;
			    }
		       }
		 }
	}
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
	    $response="no suggestion";
	      }
else
  {
	    $response=$hint;
	      }

//output the response
echo $response;
?> 
