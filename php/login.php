<?php
error_reporting(0);

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0, s-maxage=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');


session_start();

require 'config.php';

$uname = "";
$pword = "";
$login_error="";
$signup_error=$_SESSION['signupError'];


//Process this if form submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  global $con;

  //for login form
  $x=0;
  $uname=$_POST["userName"];
  $pword=$_POST["pass"];

  $sql = "SELECT user_name, user_email, user_pass from `user_accounts`";
  $result = $con->query($sql); 

  if ($result->num_rows>0)
  {
    while($row = $result->fetch_assoc())
    {
      if($uname==$row["user_name"] && $pword==$row["user_pass"])
      {
        $x=1;
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["user_name"] = $row["user_name"];
        $_SESSION["user_email"] = $row["user_email"];

        //open home page
        header("location: userProfile.php");
      }     
    }

    if($x==0)
    {
      $login_error="Incorrect USERNAME or PASSWORD !";
    }


  }
  else
  {
    $login_error="User not REGISTERED";
  }

}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/index1.css">
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/login.js"></script>

<title>GRP_26 SPEED TEST</title>

</head>
<body>
<!-- page header -->
<h1>GRP_26 SPEED TEST</h1>

<!-- navbar -->
<center>
  <nav class="nav-horizontal">
    <ul class="list">
      <li><a href="../index.php">TestSpeed</a></li>
      <li><a href="connections.php">Connections</a></li>
      <li><a href="map.php">Map</a></li>
      <li><a href="activities.php">Activities</a></li>
      <li><a href="userProfile.php">Account</a></li>
    </ul>
  </nav>
  <br><br>
</center>

<span class="firstTitle">YOU NEED TO LOGIN OR SIGN UP FIRST</span>
<div id="login-box">
  <div class="left">
    <span class="signup">Sign up</span>
    <form action="accRegister.php" method="post" onsubmit ="return checkpassword()">
      <input type="text" name="regUsername" required placeholder="Username" />
      <input type="text" name="regEmail" required placeholder="E-mail" />
      <input type="password" id="regPass" required name="regPass" placeholder="Password" />
      <input type="password" id="regPass2" required name="regPass2" placeholder="Retype password" />
      <label style="padding: 20px;text-align: center;color: red;"><?php echo $signup_error; $signup_error=""; ?></label>

      <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Login</span>
    <form action="login.php" method="post">
      <input type="text" name="userName" placeholder="Username" />
      <input type="password" name="pass" placeholder="Password" />
      <label style="padding: 20px;text-align: center;color: red;"><?php echo $login_error; ?></label>
      
      <input type="submit" name="login_submit" value="LOG ME IN" />
    </form>
  </div>
  <div class="or">OR</div>
</div>

</body>
</html>
