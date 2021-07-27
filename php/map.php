<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" href="../css/index1.css">
<script type="text/javascript" src="speedtest.js"></script>
<script type="text/javascript" src="speedtest1.js"></script>

<title>GRP_26 SPEED TEST</title>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=ENTER YOUR API KEY HERE"></script>


<link rel="stylesheet" href="../css/map.css">
<script type="text/javascript" src="../js/connections.js"></script>

<script type="text/javascript">

  var marker;
  function initialize() {
    var infoWindow = new google.maps.InfoWindow;

    var mapOptions = {
      mapTypeId: google.maps.MapTypeId.ROADMAP
    } 

    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5,
      center: { lat: 7.5554942, lng: 80.7137847 },
    });;
    var bounds = new google.maps.LatLngBounds();

    // Retrieve data from database
    <?php

      if(isset($_POST['submit'])){
        if (!empty($_POST['ISP'])) {

          foreach ($_POST['ISP'] as $ispVal) {

      $query = mysqli_query($con,"select round(avg(dl),2) as dl,round(avg(ul),2) as ul,latitude,longitude from `speedtest_users` where ispinfo like '%$ispVal%' group by latitude,longitude;");

      while ($data = mysqli_fetch_array($query))
      {
        $desc = "Download: ".$data['dl']."Mbps, Upload: ".$data['ul']."Mbps";
        $lat = $data['latitude'];
        $lon = $data['longitude'];

        if($lat==null||$lon==null){
          continue;
        }

        echo ("addMarker($lat, $lon, '$desc');\n");                        
      }

              
            
          }
        }
      }

    ?>
    
    // Proses of making marker 
    function addMarker(lat, lng, info) {
      var lokasi = new google.maps.LatLng(lat, lng);
      bounds.extend(lokasi);
      var marker = new google.maps.Marker({
        map: map,
        position: lokasi,
        title: info,
      });       
      map.fitBounds(bounds);
      bindInfoWindow(marker, map, infoWindow, info);
    }

    // Displays information on markers that are clicked
    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }
  }
  google.maps.event.addDomListener(window, 'load', initialize);


</script>

</head>
<body>
  <!-- page header -->
  <h1>GRP_26 SPEED TEST</h1>

  
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

    <form method="post" action="">
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
    
      <input type="checkbox" onClick="selectAllISP(this)"> Select all ISPs<br><br>
      <input id="submitDistrictISP" type="submit" name="submit" value="Submit">
      <br><br>
  </form>

<div id="map"></div>

</body>
</html>
