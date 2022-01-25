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
        <span class="anchor" onclick="showdrop1()">Select City</span>
        <ul class="items" style="text-align: left;">
          <label style="font-size: 18px; font-weight: bold;">Ampara</label>
          <li><input type="checkbox" id="district" name="district[]" value="Addalachchenai"> Addalachchenai</li>
          <li><input type="checkbox" id="district" name="district[]" value="Akkaraipattu"> Akkaraipattu</li>
          <li><input type="checkbox" id="district" name="district[]" value="Alayadiwembu"> Alayadiwembu</li>
          <li><input type="checkbox" id="district" name="district[]" value="Ampara">Ampara </li>
          <li><input type="checkbox" id="district" name="district[]" value="Damana"> Damana</li>
          <li><input type="checkbox" id="district" name="district[]" value="Dehiattakandiya">Dehiattakandiya </li>
          <li><input type="checkbox" id="district" name="district[]" value="Eragama"> Eragama </li>
          <li><input type="checkbox" id="district" name="district[]" value="Kalmunai"> Kalmunai</li>
          <li><input type="checkbox" id="district" name="district[]" value="Karativu"> Karativu</li>
          <li><input type="checkbox" id="district" name="district[]" value="Lahugala"> Lahugala</li>
          <li><input type="checkbox" id="district" name="district[]" value="Mahaoya"> Mahaoya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Navithanveli"> Navithanveli</li>
          <li><input type="checkbox" id="district" name="district[]" value="Ninthavur"> Ninthavur</li>
          <li><input type="checkbox" id="district" name="district[]" value="Padiyathalawa"> Padiyathalawa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Pothuvil"> Pothuvil</li>
          <li><input type="checkbox" id="district" name="district[]" value="Sainthamarathu"> Sainthamarathu</li>
          <li><input type="checkbox" id="district" name="district[]" value="Sammanthurai"> Sammanthurai</li>
          <li><input type="checkbox" id="district" name="district[]" value="Thirukkovil"> Thirukkovil</li>
          <li><input type="checkbox" id="district" name="district[]" value="Uhana"> Uhana</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Anuradhapura</label>
          <li><input type="checkbox" id="district" name="district[]" value="Galenbindunuwewa"> Galenbindunuwewa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Galnewa"> Galnewa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Horowpothana"> Horowpothana</li>
          <li><input type="checkbox" id="district" name="district[]" value="Ipalogama"> Ipalogama</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kahatagasdigiliya"> Kahatagasdigiliya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kebithigollewa"> Kebithigollewa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kekirawa"> Kekirawa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Mahavilachchiya"> Mahavilachchiya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Medawachchiya"> Medawachchiya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Mihinthale"> Mihinthale</li>
          <li><input type="checkbox" id="district" name="district[]" value="Nachchadoowa"> Nachchadoowa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Nochchiyagama"> Nochchiyagama</li>
          <li><input type="checkbox" id="district" name="district[]" value="Nuwaragam Palatha Central"> Nuwaragam Palatha Central</li>
          <li><input type="checkbox" id="district" name="district[]" value="Nuwaragam Palatha East"> Nuwaragam Palatha East</li>
          <li><input type="checkbox" id="district" name="district[]" value="Padaviya"> Padaviya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Palagala"> Palagala</li>
          <li><input type="checkbox" id="district" name="district[]" value="Palugaswewa"> Palugaswewa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Rajanganaya"> Rajanganaya</li>
          <li><input type="checkbox" id="district" name="district[]" value="Rambewa"> Rambewa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Thalawa"> Thalawa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Thambuttegama"> Thambuttegama</li>
          <li><input type="checkbox" id="district" name="district[]" value="Thirappane"> Thirappane</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Batticaloa</label>
          <li><input type="checkbox" id="district" name="district[]" value="Eravur Pattu"> Eravur Pattu</li>
          <li><input type="checkbox" id="district" name="district[]" value="Eravur Town"> Eravur Town</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kattankudy"> Kattankudy</li>
          <li><input type="checkbox" id="district" name="district[]" value="Koralai Pattu"> Koralai Pattu</li>
          <li><input type="checkbox" id="district" name="district[]" value="Koralai Pattu Central"> Koralai Pattu Central</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Koralai Pattu North"> Koralai Pattu North</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Koralai Pattu South"> Koralai Pattu South</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Koralai Pattu West"> Koralai Pattu West</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Manmunai North"> Manmunai North</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Manmunai Pattu"> Manmunai Pattu</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Manmunai South & Eruvil Pattu"> Manmunai South & Eruvil Pattu</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Manmunai South West"> Manmunai South West</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Manmunai West"> Manmunai West</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Porativu Pattu"> Porativu Pattu</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Colombo</label>
          <li><input type="checkbox" id="district" name="district[]" value="Colombo"> Colombo</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dehiwala"> Dehiwala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Homagama"> Homagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kaduwela"> Kaduwela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kesbewa"> Kesbewa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kolonnawa"> Kolonnawa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Maharagama"> Maharagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Moratuwa"> Moratuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Padukka"> Padukka</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ratmalana"> Ratmalana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Seethawaka"> Seethawaka</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Sri Jayawardanapura Kotte"> Sri Jayawardanapura Kotte</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thimbirigasyaya"> Thimbirigasyaya</li> 

          <br>
          <label style="font-size: 18px; font-weight: bold;">Galle</label>
          <li><input type="checkbox" id="district" name="district[]" value="Akmeemana"> Akmeemana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ambalangoda"> Ambalangoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Baddegama"> Baddegama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Balapitiya"> Balapitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Benthota"> Benthota </li> 
          <li><input type="checkbox" id="district" name="district[]" value="Bope-Poddala"> Bope-Poddala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Elpitiya"> Elpitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Galle Four Gravets"> Galle Four Gravets</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Gonapinuwala"> Gonapinuwala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Habaraduwa"> Habaraduwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Hikkaduwa"> Hikkaduwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Imaduwa"> Imaduwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Karandeniya"> Karandeniya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nagoda"> Nagoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Neluwa"> Neluwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Niyagama"> Niyagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thawalama"> Thawalama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Welivitiya-Divithura"> Welivitiya-Divithura</li>
          <li><input type="checkbox" id="district" name="district[]" value="Yakkalamulla"> Yakkalamulla</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Gampaha</label>
          <li><input type="checkbox" id="district" name="district[]" value="Attanagalla"> Attanagalla</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Biyagama"> Biyagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Divulapitiya"> Divulapitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dompe"> Dompe</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Gampaha"> Gampaha</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ja-Ela"> Ja-Ela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Katana"> Katana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kelaniya"> Kelaniya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mahara"> Mahara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Minuwangoda"> Minuwangoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mirigama"> Mirigama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Negombo"> Negombo</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Wattala"> Wattala</li> 

          <br>
          <label style="font-size: 18px; font-weight: bold;">Hambantota</label>
          <li><input type="checkbox" id="district" name="district[]" value="Ambalantota"> Ambalantota</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Angunakolapelessa"> Angunakolapelessa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Beliatta"> Beliatta</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Hambantota"> Hambantota</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Katuwana"> Katuwana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Lunugamvehera"> Lunugamvehera</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Okewela"> Okewela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Sooriyawewa"> Sooriyawewa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Tangalle"> Tangalle</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thissamaharama"> Thissamaharama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Walasmulla"> Walasmulla</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Weerakatiya"> Weerakatiya</li> 

          <br>
          <label style="font-size: 18px; font-weight: bold;">Jaffna</label>
          <li><input type="checkbox" id="district" name="district[]" value="Delft"> Delft</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Island North (Kayts)"> Island North (Kayts)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Island South (Velanai)"> Island South (Velanai)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Jaffna"> Jaffna</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Karainagar"> Karainagar </li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nallur"> Nallur</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thenmaradchi (Chavakachcheri)"> Thenmaradchi (Chavakachcheri)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vadamaradchi East (Maruthnkerny)"> Vadamaradchi East (Maruthnkerny)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vadamaradchi North (Point Pedro)"> Vadamaradchi North (Point Pedro)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vadamaradchi South-West (Karaveddy)"> Vadamaradchi South-West (Karaveddy)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Valikamam East (Kopay)"> Valikamam East (Kopay)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Valikamam North (Tellippalai)"> Valikamam North (Tellippalai)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Valikamam South (Uduvil)"> Valikamam South (Uduvil)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Valikamam South-West (Sandilipay)"> Valikamam South-West (Sandilipay)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Valikamam West (Chankanai)"> Valikamam West (Chankanai)</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Kalutara</label>
          <li><input type="checkbox" id="district" name="district[]" value="Agalawatta"> Agalawatta</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Bandaragama"> Bandaragama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Beruwala"> Beruwala </li> 
          <li><input type="checkbox" id="district" name="district[]" value="Bulathsinhala"> Bulathsinhala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dodangoda"> Dodangoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Horana"> Horana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ingiriya"> Ingiriya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kalutara"> Kalutara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Madurawela"> Madurawela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mathugama"> Mathugama </li> 
          <li><input type="checkbox" id="district" name="district[]" value="Millaniya"> Millaniya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Palindanuwara"> Palindanuwara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Panadura"> Panadura</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Walallavita"> Walallavita</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Kandy</label>
          <li><input type="checkbox" id="district" name="district[]" value="Akurana"> Akurana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Delthota"> Delthota</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Doluwa"> Doluwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ganga Ihala Korale"> Ganga Ihala Korale</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Harispattuwa"> Harispattuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Hatharaliyadda"> Hatharaliyadda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kandy Four Gravets & Gangawata Korale"> Kandy Four Gravets & Gangawata Korale</li>
          <li><input type="checkbox" id="district" name="district[]" value="Kundasale"> Kundasale</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Medadumbara"> Medadumbara </li> 
          <li><input type="checkbox" id="district" name="district[]" value="Minipe"> Minipe</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Panvila"> Panvila</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pasbage Korale"> Pasbage Korale</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pathadumbara"> Pathadumbara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pathahewaheta"> Pathahewaheta</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Poojapitiya"> Poojapitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thumpane"> Thumpane</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Udadumbara"> Udadumbara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Udapalatha"> Udapalatha</li>
          <li><input type="checkbox" id="district" name="district[]" value="Udunuwara"> Udunuwara</li>
          <li><input type="checkbox" id="district" name="district[]" value="Yatinuwara"> Yatinuwara</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Kegalle</label>
          <li><input type="checkbox" id="district" name="district[]" value="Aranayaka"> Aranayaka</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Bulathkohupitiya"> Bulathkohupitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dehiovita"> Dehiovita</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Deraniyagala"> Deraniyagala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Galigamuwa"> Galigamuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kegalle"> Kegalle</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mawanella"> Mawanella</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Rambukkana"> Rambukkana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ruwanwella"> Ruwanwella</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Warakapola"> Warakapola</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Yatiyanthota"> Yatiyanthota</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Kilinochchi</label>
          <li><input type="checkbox" id="district" name="district[]" value="Kandavalai"> Kandavalai</li>
          <li><input type="checkbox" id="district" name="district[]" value="Karachchi"> Karachchi</li>
          <li><input type="checkbox" id="district" name="district[]" value="Pachchilaipalli"> Pachchilaipalli</li>
          <li><input type="checkbox" id="district" name="district[]" value="Poonakary"> Poonakary</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Kurunegala</label>
           <li><input type="checkbox" id="district" name="district[]" value="Alawwa"> Alawwa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Ambanpola"> Ambanpola</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Bamunakotuwa"> Bamunakotuwa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Bingiriya"> Bingiriya</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Ehetuwewa"> Ehetuwewa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Galgamuwa"> Galgamuwa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Ganewatta"> Ganewatta</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Giribawa"> Giribawa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Ibbagamuwa"> Ibbagamuwa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Kobeigane"> Kobeigane</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Kotavehera"> Kotavehera</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Kuliyapitiya East"> Kuliyapitiya East</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Kuliyapitiya West"> Kuliyapitiya West</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Kurunegala"> Kurunegala</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Mahawa"> Mahawa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Mallawapitiya"> Mallawapitiya</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Maspotha"> Maspotha</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Mawathagama"> Mawathagama</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Narammala"> Narammala</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Nikaweratiya"> Nikaweratiya</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Panduwasnuwara East (Katupotha)"> Panduwasnuwara East (Katupotha)</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Panduwasnuwara West"> Panduwasnuwara West</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Pannala"> Pannala</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Polgahawela"> Polgahawela</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Polpithigama"> Polpithigama</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Rasnayakapura"> Rasnayakapura</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Rideegama"> Rideegama</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Udubaddawa"> Udubaddawa</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Wariyapola"> Wariyapola</li> 
           <li><input type="checkbox" id="district" name="district[]" value="Weerambugedara"> Weerambugedara </li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Mannar</label>
          <li><input type="checkbox" id="district" name="district[]" value="Madhu"> Madhu</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mannar Town"> Mannar Town</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Manthai West"> Manthai West</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Musalai"> Musalai</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nanaddan"> Nanaddan</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Matale</label>
          <li><input type="checkbox" id="district" name="district[]" value="Ambanganga Korale"> Ambanganga Korale</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dambulla"> Dambulla</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Galewela"> Galewela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Laggala-Pallegama"> Laggala-Pallegama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Matale"> Matale</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Naula"> Naula</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pallepola"> Pallepola</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Rattota"> Rattota</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ukuwela"> Ukuwela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Wilgamuwa"> Wilgamuwa</li>
          <li><input type="checkbox" id="district" name="district[]" value="Yatawatta"> Yatawatta</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Matara</label>
          <li><input type="checkbox" id="district" name="district[]" value="Akuressa"> Akuressa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Athuraliya"> Athuraliya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Devinuwara"> Devinuwara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dickwella"> Dickwella</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Hakmana"> Hakmana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kamburupitiya"> Kamburupitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kirinda Puhulwella"> Kirinda Puhulwella</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kotapola"> Kotapola</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Malimbada"> Malimbada</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Matara Four Gravets"> Matara Four Gravets</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mulatiyana"> Mulatiyana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pasgoda"> Pasgoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pitabeddara"> Pitabeddara</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thihagoda"> Thihagoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Weligama"> Weligama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Welipitiya"> Welipitiya</li> 

          <br>
          <label style="font-size: 18px; font-weight: bold;">Monaragala</label> 
          <li><input type="checkbox" id="district" name="district[]" value="Badalkumbura"> Badalkumbura</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Bibile"> Bibile</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Buttala"> Buttala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Katharagama"> Katharagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Madulla"> Madulla</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Medagama"> Medagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Moneragala"> Moneragala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Sevanagala"> Sevanagala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Siyambalanduwa"> Siyambalanduwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thanamalvila"> Thanamalvila</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Wellawaya"> Wellawaya</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Mullaitivu</label>
          <li><input type="checkbox" id="district" name="district[]" value="Manthai East (Pandiyankulam)"> Manthai East (Pandiyankulam)</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Maritimepattu"> Maritimepattu</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Oddusuddan"> Oddusuddan</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Puthukudiyiruppu"> Puthukudiyiruppu</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thunukkai"> Thunukkai</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Welioya"> Welioya</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Nuwara Eliya</label>
          <li><input type="checkbox" id="district" name="district[]" value="Ambagamuwa"> Ambagamuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Hanguranketha"> Hanguranketha</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kothmale"> Kothmale</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nuwara Eliya"> Nuwara Eliya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Walapane"> Walapane</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Polonnaruwa</label>
          <li><input type="checkbox" id="district" name="district[]" value="Dimbulagala"> Dimbulagala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Elahera"> Elahera</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Hingurakgoda"> Hingurakgoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Lankapura"> Lankapura</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Medirigiriya"> Medirigiriya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thamankaduwa"> Thamankaduwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Welikanda"> Welikanda</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Puttalam</label>
          <li><input type="checkbox" id="district" name="district[]" value="Anamaduwa"> Anamaduwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Arachchikattuwa"> Arachchikattuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Chilaw"> Chilaw</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Dankotuwa"> Dankotuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kalpitiya"> Kalpitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Karuwalagaswewa"> Karuwalagaswewa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Madampe"> Madampe</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mahakumbukkadawala"> Mahakumbukkadawala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mahawewa"> Mahawewa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Mundalama"> Mundalama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nattandiya"> Nattandiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nawagattegama"> Nawagattegama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pallama"> Pallama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Puttalam"> Puttalam</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vanathavilluwa"> Vanathavilluwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Wennappuwa"> Wennappuwa</li>

          <br>
          <label style="font-size: 18px; font-weight: bold;">Ratnapura</label>
          <li><input type="checkbox" id="district" name="district[]" value="Ayagama"> Ayagama</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Balangoda"> Balangoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Eheliyagoda"> Eheliyagoda</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Elapattha"> Elapattha</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Embilipitiya"> Embilipitiya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Godakawela"> Godakawela</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Imbulpe"> Imbulpe</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kahawatta"> Kahawatta</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kalawana"> Kalawana</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kiriella"> Kiriella</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kolonna"> Kolonna</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kuruvita"> Kuruvita</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Nivithigala"> Nivithigala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Opanayaka"> Opanayaka</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Pelmadulla"> Pelmadulla</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Ratnapura"> Ratnapura</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Weligepola"> Weligepola</li> 

          <br>
          <label style="font-size: 18px; font-weight: bold;">Trincomalee</label>
          <li><input type="checkbox" id="district" name="district[]" value="Gomarankadawala"> Gomarankadawala</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kantalai"> Kantalai</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kinniya"> Kinniya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Kuchchaveli"> Kuchchaveli</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Morawewa"> Morawewa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Muttur"> Muttur</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Padavi Sri Pura"> Padavi Sri Pura</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Seruvila"> Seruvila</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Thambalagamuwa"> Thambalagamuwa</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Trincomalee Town and Gravets"> Trincomalee Town and Gravets</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Verugal (Echchilampattai)"> Verugal (Echchilampattai)</li> 

          <br>
          <label style="font-size: 18px; font-weight: bold;">Vavuniya</label>
          <li><input type="checkbox" id="district" name="district[]" value="Vavuniya"> Vavuniya</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vavuniya North"> Vavuniya North</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vavuniya South"> Vavuniya South</li> 
          <li><input type="checkbox" id="district" name="district[]" value="Vengalacheddikulam"> Vengalacheddikulam</li>

        </ul>
      </div>
      <br><br>


      <input type="checkbox" onClick="selectAllISP(this)"> Select all ISPs<br>
      <input type="checkbox" onClick="selectAllDistricts(this)"> Select all Cities<br><br>
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
