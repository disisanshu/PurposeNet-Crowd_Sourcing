<?php session_start();


//when a user visits any part of website .. the checking part , where cookies are checked and corresponding updates are done 
// kind of header for every page 
// if cookie says it's allowed then proceed 
// otherwise , let's re-direct them to login page

include('db_connection.php');

if (isset($_COOKIE['pnet']))
{
  $value = $_COOKIE['pnet'];
  $pieces = explode('#',$value);
  //  print_r($pieces);
  $res2 = mysql_query("select * from user where email='$pieces[0]'");
  $row2 = mysql_fetch_assoc($res2);
  $uid = $row2['uid'];
  $res = mysql_query("select * from tokens where uid='$uid' and token='$piece[1]'");
  if (!$res)
  {
    die(mysql_error());
  }
  $new_token =  md5(rand());
  $res4 = mysql_query("update tokens set token='$new_token' where uid='$uid'");
  setcookie("pnet",$email.'#'.$token,time()+60*60*24*30);
  
  
  
}
if (isset($_SESSION['uid']))
{
 header('Location:home.php');
}

?>
