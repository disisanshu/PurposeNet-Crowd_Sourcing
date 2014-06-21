<?php session_start();
include('./db_connection.php');

$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$salt = sha1(md5($password));
$password = md5($salt.$password);


//print_r($_POST);


$result = mysql_query("select * from user where email='$email'");
if (!$result)
{
header("Location:./main_login.php");
//  echo "Sorry!! I screwed up with the database".mysql_error();
  exit;
}
$number_rows = mysql_num_rows($result);
$row = mysql_fetch_assoc($result);
$stored_password = $row['password'];
$email = $row['email'];
$id= $row['uid'];
if ($number_rows == 0)
{
  header("Location:./main_login.php");
  echo "You haven't been registered";
}

if ($number_rows == 1 and $stored_password == $password)
{
//  echo "The credentials you provided are authentic .. but still I don't trust you !!";
  $_SESSION['uid'] = $id;
  $_SESSION['email']=$email;
//  print_r($_SESSION);
  if($_POST['remember'] == 'remember')
  {
     // issue an additional cookie 
     $token = md5(rand());
     setcookie("pnet",$email.'#'.$token,time()+60*60*24*30);
     
     $res3 = mysql_query("insert into tokens(uid,token) values('$id','$token')");
     if (!$res3)
     {
	header("Location:./main_login.php");
      // echo "Sorry!! I screwed up with the database".mysql_error();

     }
  }
  header("Location:./home.php");
}

if ($number_rows == 1 and $stored_password != $password)
{
 echo "Password incorrect";
header("Location:./main_login.php");
}


?>
