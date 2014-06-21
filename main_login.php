<!DOCTYPE html>

<html lang="en">
<head>
  <link rel="shortcut icon" href="iiitfavicon.jpg" type="image/jpeg" >
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="main.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="bootstrap/js/jquery.js" type="text/javascript"></script>  
  <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>  
  <script src="main.js" type="text/javascript"></script>  
  <title>LOGIN</title>
</head>  

<body style="background:url(./gradient.png) repeat-x scroll left top rgb(251,250,249);font:16px Droid Sans">

<?php

include('check.php');

if (isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $result = mysql_query("select * from user where email='$email'");
  $num_rows = mysql_num_rows($result);
  if ($num_rows > 0)
  {
?>
    <div class='alert alert-danger'> You have been already registered!!
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
<?php    
  }
  else
  {
 	 $password = mysql_real_escape_string($_POST['password']);
	  $salt = sha1(md5($password));
	  $password = md5($salt.$password);
	  $res = mysql_query("insert into user(fname,lname,email,password) values('$fname','$lname','$email','$password')"); 
	  if (!$res)
	  {
	    echo mysql_error();
	  }
    	echo '<div class="alert alert-success"><b>Registered Successfully!!</b> you can now login.<button type="button" class="close" data-dismiss="alert">&times;</button></div>';
  }
}
?>

  <div>
   <a href="./main_login.php" ><img src="bootstrap/img/iiith.png"> </a>
  <form  id="login-form" class="inline-form" action="login_process.php" method="POST">
  <span style="font:bold 26px Droid Sans">LOGIN</span>&nbsp;&nbsp;
  <input type="email" name="email"  class="input-medium" placeholder="Email">
  <input type="password"  name="password" class="input-medium" placeholder="Password">
  <button type="submit" class="btn btn-primary" id="login_submit">Sign in</button>
  <label class="checkbox">
    <input type="checkbox" name="remember" value="remember" > <small>Keep me logged in</small>
  </label>
  </form>
  </div>
  <hr width="100%">

  <div class="container">
    <div class="container" id="name">
  <a href='dokuwiki-2012-10-13/doku.php' target='_blank'>PURPOSENET<br>CROWD SOURCING<br></a>
    </div>
    <div class="container" id="register">
    <form  id="register_form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
    <span style="font:bold 26px Droid Sans">Register</span><br><br>
      <div class="control-group">
        <div class="controls">
          <input type="text" name="fname" id="fname" class="input-small" placeholder="First name">
          <input type="text" name="lname" class="input-small" placeholder="Last name">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
         <input type="email" name="email" class="input-large" placeholder="Email">
         </div>
       </div>
        <div class="control-group">
           <div class="controls">
          <input type="password" name="password" class="input-large" placeholder="Password">
           </div>
        </div>
      <span class="help-block muted" id="tc">By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href='#'>Data Use Policy</a>, including our <a href='#'>Cookie Use.</a></span>
      <div class="control-group">
       <div class="controls">
        <input type="submit" name="submit" value="Sign up"class="btn btn-primary btn-large" id="register_submit">
       </div>
       </div>
      </div>
   </form>
  </div>
  
</body>


</html>
