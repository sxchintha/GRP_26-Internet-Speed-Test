<?php
error_reporting(0);

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0, s-maxage=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/index1.css">
<link rel="stylesheet" href="../css/userProfile.css">
<script type="text/javascript" src="../js/connections.js"></script>

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

<div class="login"> 
<table id="all">
<tr>
  <td><table id="profile">

  <tr>
  <th><h1>My Profile</h1></th>
  </tr>
  <tr>
    <td><h3>Username </h3></td>
    <td><?php echo $_SESSION["user_name"];?></td>
  </tr>

  <tr>
    <td><h3>E-mail </h3></td>
    <td><?php echo $_SESSION["user_email"]; ?></td>
  </tr>
  
</table></td>

<td >

<a href ="activities.php">
<input type ="button" name="activities" value="Activities" id="button1" >
</a>

<a href="updateProfile">
<input type="submit" name="updateProfile" value="Update Profile" id="button1">
</a>

<a href ="deleteProfile">
<input type ="button" name="delete" value="Delete Profile" id="button2" >
</a>

<a href ="logout.php">
<input type ="button" name="logout" value="Logout" id="button1" >
</a>

</td>
</tr>
</table>
</div>

</body>
</html>
