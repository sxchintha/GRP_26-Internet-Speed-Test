<?php
error_reporting(0);

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

<title>GRP_26 SPEED TEST</title>


<style type="text/css">

  table{
      width:80%;
      margin: 10px;
  }
  table, tr, th, td {
      border: 1px solid #AAAAAA;
  }
  th {
  }
  td {
      text-align: left;
  }
</style>

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
      <li><a href="#">Activities</a></li>
      <li><a href="#">Account</a></li>
    </ul>
  </nav>
  <br><br>




  <form>
    <div align="left";>
      <input type="checkbox" id="ISP" name="ISP" value="Airtel">
      <label for="ISP">Airtel</label><br>
      <input type="checkbox" id="ISP" name="ISP" value="Dialog">
      <label for="ISP">Dialog</label><br>
      <input type="checkbox" id="ISP" name="ISP" value="Etisalat">
      <label for="ISP">Etisalat</label><br>
      <input type="checkbox" id="ISP" name="ISP" value="Hutch">
      <label for="ISP">Hutch</label><br>
      <input type="checkbox" id="ISP" name="ISP" value="Mobitel">
      <label for="ISP">Mobitel</label><br>
      <input type="checkbox" id="ISP" name="ISP" value="Sri Lanka Telecom">
      <label for="ISP">Sri Lanka Telecom</label><br>

    </div>

  </form>















    <table>
      <tr>
        <th style="width:20px"></th>
        <th>ISP</th>
        <th>Average<br>Download Speed<br>(Mbps)</th>
        <th>Average<br>Upload Speed<br>(Mbps)</th>
        <th>District</th>
      </tr>

      <?php
      require 'config.php';

      $sql="SELECT ispinfo,ROUND(AVG(dl),2)as dlSpeed,ROUND(AVG(ul),2) as ulSpeed,district from `speedtest_users` group by district,ispinfo order by ispinfo,district";
      $result=$con->query($sql);
      $n=1;

      while ($row=$result->fetch_assoc()) {
      
      ?>

      <tr>
        <td style="padding-left: 10px; padding-right: 10px;"><?php echo $n; $n++; ?></td>
        <td style="padding-left: 10px; padding-top: 20px; padding-bottom: 20px;"><?php echo $row["ispinfo"]; ?></td>
        <td style="padding-left: 10px;"><?php echo $row["dlSpeed"]; ?></td>
        <td style="padding-left: 10px;"><?php echo $row["ulSpeed"]; ?></td>
        <td style="padding-left: 10px;"><?php echo $row["district"]; ?></td>
      </tr>

      <?php

        }
        $con->close();

      ?>

  </table>
  </center>

  </body>
</html>
