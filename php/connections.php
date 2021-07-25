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
<link rel="stylesheet" href="../css/connections.css">
<script type="text/javascript" src="../connections.js"></script>

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
      <li><a href="#">Activities</a></li>
      <li><a href="#">Account</a></li>
    </ul>
  </nav>
  <br><br>
</center>

  <form method="post" action="">
    <div>
      <div id="list1" class="dropdown-check-list" tabindex="100">
        <span class="anchor" onclick="showdrop()">Select ISP</span>
        <ul class="items" style="text-align: left;">
          <li><input type="checkbox" id="ISP" name="ISP[]" value="Airtel">Airtel </li>
          <li><input type="checkbox" id="ISP" name="ISP[]" value="Dialog">Dialog</li>
          <li><input type="checkbox" id="ISP" name="ISP[]" value="Hutch">Hutch </li>
          <li><input type="checkbox" id="ISP" name="ISP[]" value="Mobitel">Mobitel </li>
          <li><input type="checkbox" id="ISP" name="ISP[]" value="Sri Lanka Telecom">SLT </li>
        </ul>
      </div>
      <br><br>
      <div id="list2" class="dropdown-check-list" tabindex="100">
        <span class="anchor" onclick="showdrop1()">Select District</span>
        <ul class="items" style="text-align: left;">
          <li><input type="checkbox" id="district" name="district[]" value="Ampara">Ampara </li>
          <li><input type="checkbox" id="district" name="district[]" value="Anuradhapura">Anuradhapura</li>
          <li><input type="checkbox" id="district" name="district[]" value="Badulla">Badulla </li>
          <li><input type="checkbox" id="district" name="district[]" value="Batticaloa">Batticaloa </li>
          <li><input type="checkbox" id="district" name="district[]" value="Colombo">Colombo</li>
          <li><input type="checkbox" id="district" name="district[]" value="Galle">Galle </li>
          <li><input type="checkbox" id="district" name="district[]" value="Gampaha">Gampaha</li>
          <li><input type="checkbox" id="district" name="district[]" value="Hambantota">Hambantota </li>
          <li><input type="checkbox" id="district" name="district[]" value="Jaffna">Jaffna </li>
          <li><input type="checkbox" id="district" name="district[]" value="Kalutara">Kalutara</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kandy">Kandy </li>
          <li><input type="checkbox" id="district" name="district[]" value="Kegalle">Kegalle</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kilinochchi">Kilinochchi </li>
          <li><input type="checkbox" id="district" name="district[]" value="Kurunegala">Kurunegala </li>
          <li><input type="checkbox" id="district" name="district[]" value="Mannar">Mannar</li>
          <li><input type="checkbox" id="district" name="district[]" value="Matale">Matale </li>
          <li><input type="checkbox" id="district" name="district[]" value="Matara">Matara</li>
          <li><input type="checkbox" id="district" name="district[]" value="Monaragala">Monaragala </li>
          <li><input type="checkbox" id="district" name="district[]" value="Mullaitivu">Mullaitivu </li>
          <li><input type="checkbox" id="district" name="district[]" value="Nuwara Eliya">Nuwara Eliya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Polonnaruwa">Polonnaruwa </li>
          <li><input type="checkbox" id="district" name="district[]" value="Puttalam">Puttalam</li>
          <li><input type="checkbox" id="district" name="district[]" value="Ratnapura">Ratnapura </li>
          <li><input type="checkbox" id="district" name="district[]" value="Trincomalee">Trincomalee </li>
          <li><input type="checkbox" id="district" name="district[]" value="Vavuniya">Vavuniya</li>
        </ul>
      <br><br>
    </div>


      <input type="checkbox" onClick="selectAllISP(this)"> Select all ISPs<br>
      <input type="checkbox" onClick="selectAllDistricts(this)"> Select all Districts<br><br>
      <input id="submitDistrictISP" type="submit" name="submit" value="Submit">
      <br><br>
  </form>

  <center>
    
      <?php
      require 'config.php';

      if(isset($_POST['submit'])){
        if (!empty($_POST['ISP']) && !empty($_POST['district'])) {

              $chkHead = 0;
              $n=1;
          foreach ($_POST['ISP'] as $ispVal) {
            foreach ($_POST['district'] as $districtVal) {

              $sql="SELECT ispinfo,ROUND(AVG(dl),2)as dlSpeed,ROUND(AVG(ul),2) as ulSpeed,district from `speedtest_users` where ispinfo like '%$ispVal%' and district='$districtVal' group by district,ispinfo order by ispinfo,district";
              $result=$con->query($sql);

              if($result == nul) {
                echo '<table style="display:none;">';

              } else if(!empty($result) && $chkHead==0) {

                echo '<table>
                <tr>
                  <th style="width:20px"></th>
                  <th>ISP</th>
                  <th style="padding-top: 5px; padding-bottom: 5px;">Average<br>Download Speed<br>(Mbps)</th>
                  <th>Average<br>Upload Speed<br>(Mbps)</th>
                  <th>District</th>
                </tr>';
                $chkHead = 1;
              }

              while ($row=$result->fetch_assoc()) {
              
              ?>

              <tr>
                <td><?php echo $n; $n++; ?></td>
                <td style="padding-top: 20px; padding-bottom: 20px; max-width: 300px"><?php echo $row["ispinfo"]; ?></td>
                <td style="text-align: center;"><?php echo $row["dlSpeed"]; ?></td>
                <td style="text-align: center;"><?php echo $row["ulSpeed"]; ?></td>
                <td><?php echo $row["district"]; ?></td>
              </tr>

              <?php

              }
            }
          }
        }
      }

      $con->close();
    ?>
  </table>
  </center>

  </body>
</html>
