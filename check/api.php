<?php 


$host = "localhost";
$user = "root";
$pass = "mysql123";


 
$databaseName = "mark2";
$tableName = "author";

$con = mysql_connect($host,$user,$pass);
$dbs = mysql_select_db($databaseName, $con);


$result = mysql_query("INSERT INTO author values(13,'Thirteen')");
$flag = 0;
if ($result)
{
  $flag=1;
}

echo $flag;
?>
                                                                                                                                               
~                                                                                                                                                              
~                                                                                                                                                              
~                 
