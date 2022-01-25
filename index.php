<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />

<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="css/index1.css">
<script type="text/javascript" src="speedtest.js"></script>
<script type="text/javascript" src="speedtest1.js"></script>

<title>GRP_26 SPEED TEST</title>


<style type="text/css">
 #districts{
 	padding: 5px;
 	border-radius: 5px;
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
	    <li><a href="index.php">TestSpeed</a></li>
	    <li><a href="php/connections.php">Connections</a></li>
	    <li><a href="php/map.php">Map</a></li>
	    <li><a href="php/activities.php">Activities</a></li>
	    <li><a href="php/userProfile.php">Account</a></li>
	  </ul>
	</nav>
	</center><br><br>

	<div id="testWrapper">
		
		<label for="districts">Choose your city:</label>
		<select name="districts" id="districts">
			<option class="disSelect" value="" selected disabled>-Select-</option>
		  	<optgroup label="Ampara">
				<option class="disSelect" value="Addalachchenai"> Addalachchenai </option>
				<option class="disSelect" value="Akkaraipattu"> Akkaraipattu</option>
				<option class="disSelect" value="Alayadiwembu"> Alayadiwembu</option>
				<option class="disSelect" value="Ampara">Ampara</option>
				<option class="disSelect" value="Damana"> Damana </option>
				<option class="disSelect" value="Dehiattakandiya"> Dehiattakandiya </option>
				<option class="disSelect" value="Eragama"> Eragama </option>
				<option class="disSelect" value="Kalmunai"> Kalmunai</option>
				<option class="disSelect" value="Karativu"> Karativu</option>
				<option class="disSelect" value="Lahugala"> Lahugala</option>
				<option class="disSelect" value="Mahaoya"> Mahaoya</option>
				<option class="disSelect" value="Navithanveli"> Navithanveli</option>
				<option class="disSelect" value="Ninthavur"> Ninthavur</option>
				<option class="disSelect" value="Padiyathalawa"> Padiyathalawa</option>
				<option class="disSelect" value="Pothuvil"> Pothuvil</option>
				<option class="disSelect" value="Sainthamarathu"> Sainthamarathu</option>
				<option class="disSelect" value="Sammanthurai"> Sammanthurai</option>
				<option class="disSelect" value="Thirukkovil"> Thirukkovil</option>
				<option class="disSelect" value="Ampara">Ampara</option>
			</optgroup>
			<optgroup label="Anuradhapura">
				<option class="disSelect" value="Galenbindunuwewa"> Galenbindunuwewa</option>
				<option class="disSelect" value="Galnewa"> Galnewa</option>
				<option class="disSelect" value="Horowpothana"> Horowpothana</option>
				<option class="disSelect" value="Ipalogama"> Ipalogama</option>
				<option class="disSelect" value="Kahatagasdigiliya"> Kahatagasdigiliya</option>
				<option class="disSelect" value="Kebithigollewa"> Kebithigollewa</option>
				<option class="disSelect" value="Kekirawa"> Kekirawa</option>
				<option class="disSelect" value="Mahavilachchiya"> Mahavilachchiya</option>
				<option class="disSelect" value="Medawachchiya"> Medawachchiya</option>
				<option class="disSelect" value="Mihinthale"> Mihinthale</option>
				<option class="disSelect" value="Nachchadoowa"> Nachchadoowa</option>
				<option class="disSelect" value="Nochchiyagama"> Nochchiyagama</option>
				<option class="disSelect" value="Nuwaragam Palatha Central"> Nuwaragam Palatha Central</option>
				<option class="disSelect" value="Nuwaragam Palatha East"> Nuwaragam Palatha East</option>
				<option class="disSelect" value="Padaviya"> Padaviya</option>
				<option class="disSelect" value="Palagala"> Palagala</option>
				<option class="disSelect" value="Palugaswewa"> Palugaswewa</option>
				<option class="disSelect" value="Rajanganaya"> Rajanganaya</option>
				<option class="disSelect" value="Rambewa"> Rambewa</option>
				<option class="disSelect" value="Thalawa"> Thalawa</option>
				<option class="disSelect" value="Thambuttegama"> Thambuttegama</option>
				<option class="disSelect" value="Thirappane"> Thirappane</option>
			</optgroup>
			<optgroup label="Batticaloa">
				<option class="disSelect" value="Eravur Pattu"> Eravur Pattu</option> 
				<option class="disSelect" value="Eravur Town"> Eravur Town</option> 
				<option class="disSelect" value="Kattankudy"> Kattankudy</option> 
				<option class="disSelect" value="Koralai Pattu"> Koralai Pattu</option> 
				<option class="disSelect" value="Koralai Pattu Central"> Koralai Pattu Central</option> 
				<option class="disSelect" value="Koralai Pattu North"> Koralai Pattu North</option> 
				<option class="disSelect" value="Koralai Pattu South"> Koralai Pattu South</option> 
				<option class="disSelect" value="Koralai Pattu West"> Koralai Pattu West</option> 
				<option class="disSelect" value="Manmunai North"> Manmunai North</option> 
				<option class="disSelect" value="Manmunai Pattu"> Manmunai Pattu</option> 
				<option class="disSelect" value="Manmunai South & Eruvil Pattu"> Manmunai South & Eruvil Pattu</option> 
				<option class="disSelect" value="Manmunai South West"> Manmunai South West</option> 
				<option class="disSelect" value="Manmunai West"> Manmunai West</option> 
				<option class="disSelect" value="Porativu Pattu"> Porativu Pattu</option>
			</optgroup>
			<optgroup label="Colombo">
				<option class="disSelect" value="Colombo"> Colombo</option> 
				<option class="disSelect" value="Dehiwala"> Dehiwala</option> 
				<option class="disSelect" value="Homagama"> Homagama</option> 
				<option class="disSelect" value="Kaduwela"> Kaduwela</option> 
				<option class="disSelect" value="Kesbewa"> Kesbewa</option>
				<option class="disSelect" value="Kolonnawa"> Kolonnawa</option> 
				<option class="disSelect" value="Maharagama"> Maharagama</option> 
				<option class="disSelect" value="Moratuwa"> Moratuwa</option> 
				<option class="disSelect" value="Padukka"> Padukka</option> 
				<option class="disSelect" value="Ratmalana"> Ratmalana</option> 
				<option class="disSelect" value="Seethawaka"> Seethawaka</option> 
				<option class="disSelect" value="Sri Jayawardanapura Kotte"> Sri Jayawardanapura Kotte</option> 
				<option class="disSelect" value="Thimbirigasyaya"> Thimbirigasyaya</option> 
			</optgroup>
			<optgroup label="Galle">
				<option class="disSelect" value="Akmeemana"> Akmeemana</option> 
				<option class="disSelect" value="Ambalangoda"> Ambalangoda</option> 
				<option class="disSelect" value="Baddegama"> Baddegama</option> 
				<option class="disSelect" value="Balapitiya"> Balapitiya</option> 
				<option class="disSelect" value="Benthota"> Benthota </option> 
				<option class="disSelect" value="Bope-Poddala"> Bope-Poddala</option> 
				<option class="disSelect" value="Elpitiya"> Elpitiya</option> 
				<option class="disSelect" value="Galle Four Gravets"> Galle Four Gravets</option> 
				<option class="disSelect" value="Gonapinuwala"> Gonapinuwala</option> 
				<option class="disSelect" value="Habaraduwa"> Habaraduwa</option> 
				<option class="disSelect" value="Hikkaduwa"> Hikkaduwa</option> 
				<option class="disSelect" value="Imaduwa"> Imaduwa</option> 
				<option class="disSelect" value="Karandeniya"> Karandeniya</option> 
				<option class="disSelect" value="Nagoda"> Nagoda</option> 
				<option class="disSelect" value="Neluwa"> Neluwa</option> 
				<option class="disSelect" value="Niyagama"> Niyagama</option> 
				<option class="disSelect" value="Thawalama"> Thawalama</option> 
				<option class="disSelect" value="Welivitiya-Divithura"> Welivitiya-Divithura</option> 
				<option class="disSelect" value="Yakkalamulla"> Yakkalamulla</option>
			</optgroup>
			<optgroup label="Gampaha">
				<option class="disSelect" value="Attanagalla"> Attanagalla</option> 
				<option class="disSelect" value="Biyagama"> Biyagama</option> 
				<option class="disSelect" value="Divulapitiya"> Divulapitiya</option> 
				<option class="disSelect" value="Dompe"> Dompe</option> 
				<option class="disSelect" value="Gampaha"> Gampaha</option> 
				<option class="disSelect" value="Ja-Ela"> Ja-Ela</option> 
				<option class="disSelect" value="Katana"> Katana</option> 
				<option class="disSelect" value="Kelaniya"> Kelaniya</option> 
				<option class="disSelect" value="Mahara"> Mahara</option> 
				<option class="disSelect" value="Minuwangoda"> Minuwangoda</option> 
				<option class="disSelect" value="Mirigama"> Mirigama</option> 
				<option class="disSelect" value="Negombo"> Negombo</option> 
				<option class="disSelect" value="Wattala"> Wattala</option>
			</optgroup>
			<optgroup label="Hambantota">
				<option class="disSelect" value="Ambalantota"> Ambalantota</option> 
				<option class="disSelect" value="Angunakolapelessa"> Angunakolapelessa</option> 
				<option class="disSelect" value="Beliatta"> Beliatta</option> 
				<option class="disSelect" value="Hambantota"> Hambantota</option> 
				<option class="disSelect" value="Katuwana"> Katuwana</option> 
				<option class="disSelect" value="Lunugamvehera"> Lunugamvehera</option> 
				<option class="disSelect" value="Okewela"> Okewela</option> 
				<option class="disSelect" value="Sooriyawewa"> Sooriyawewa</option> 
				<option class="disSelect" value="Tangalle"> Tangalle</option> 
				<option class="disSelect" value="Thissamaharama"> Thissamaharama</option> 
				<option class="disSelect" value="Walasmulla"> Walasmulla</option> 
				<option class="disSelect" value="Weerakatiya"> Weerakatiya</option>
			</optgroup>
			<optgroup label="Jaffna">
				<option class="disSelect" value="Delft"> Delft</option> 
				<option class="disSelect" value="Island North (Kayts)"> Island North (Kayts)</option> 
				<option class="disSelect" value="Island South (Velanai)"> Island South (Velanai)</option> 
				<option class="disSelect" value="Jaffna"> Jaffna</option> 
				<option class="disSelect" value="Karainagar"> Karainagar</option> 
				<option class="disSelect" value="Nallur"> Nallur</option> 
				<option class="disSelect" value="Thenmaradchi (Chavakachcheri)"> Thenmaradchi (Chavakachcheri)</option> 
				<option class="disSelect" value="Vadamaradchi East (Maruthnkerny)"> Vadamaradchi East (Maruthnkerny)</option> 
				<option class="disSelect" value="Vadamaradchi North (Point Pedro)"> Vadamaradchi North (Point Pedro)</option> 
				<option class="disSelect" value="Vadamaradchi South-West (Karaveddy)"> Vadamaradchi South-West (Karaveddy)</option> 
				<option class="disSelect" value="Valikamam East (Kopay)"> Valikamam East (Kopay)</option> 
				<option class="disSelect" value="Valikamam North (Tellippalai)"> Valikamam North (Tellippalai)</option> 
				<option class="disSelect" value="Valikamam South (Uduvil)"> Valikamam South (Uduvil)</option>
				<option class="disSelect" value="Valikamam South-West (Sandilipay)"> Valikamam South-West (Sandilipay)</option> 
				<option class="disSelect" value="Valikamam West (Chankanai)"> Valikamam West (Chankanai)</option> 
			</optgroup>
			<optgroup label="Kalutara">
				<option class="disSelect" value="Agalawatta"> Agalawatta</option> 
				<option class="disSelect" value="Bandaragama"> Bandaragama</option> 
				<option class="disSelect" value="Beruwala"> Beruwala </option> 
				<option class="disSelect" value="Bulathsinhala"> Bulathsinhala</option> 
				<option class="disSelect" value="Dodangoda"> Dodangoda</option> 
				<option class="disSelect" value="Horana"> Horana</option> 
				<option class="disSelect" value="Ingiriya"> Ingiriya</option> 
				<option class="disSelect" value="Kalutara"> Kalutara</option> 
				<option class="disSelect" value="Madurawela"> Madurawela</option> 
				<option class="disSelect" value="Mathugama"> Mathugama</option> 
				<option class="disSelect" value="Millaniya"> Millaniya</option> 
				<option class="disSelect" value="Palindanuwara"> Palindanuwara</option> 
				<option class="disSelect" value="Panadura"> Panadura</option> 
				<option class="disSelect" value="Walallavita"> Walallavita</option>
			</optgroup>
			<optgroup label="Kandy">
				<option class="disSelect" value="Akurana"> Akurana</option> 
				<option class="disSelect" value="Delthota"> Delthota</option> 
				<option class="disSelect" value="Doluwa"> Doluwa</option> 
				<option class="disSelect" value="Ganga Ihala Korale"> Ganga Ihala Korale</option> 
				<option class="disSelect" value="Harispattuwa"> Harispattuwa</option> 
				<option class="disSelect" value="Hatharaliyadda"> Hatharaliyadda</option> 
				<option class="disSelect" value="Kandy Four Gravets & Gangawata Korale"> Kandy Four Gravets & Gangawata Korale </option> 
				<option class="disSelect" value="Kundasale"> Kundasale</option> 
				<option class="disSelect" value="Medadumbara"> Medadumbara</option> 
				<option class="disSelect" value="Minipe"> Minipe</option> 
				<option class="disSelect" value="Panvila"> Panvila</option> 
				<option class="disSelect" value="Pasbage Korale"> Pasbage Korale</option> 
				<option class="disSelect" value="Pathadumbara"> Pathadumbara</option> 
				<option class="disSelect" value="Pathahewaheta"> Pathahewaheta</option> 
				<option class="disSelect" value="Poojapitiya"> Poojapitiya</option> 
				<option class="disSelect" value="Thumpane"> Thumpane</option> 
				<option class="disSelect" value="Udadumbara"> Udadumbara</option> 
				<option class="disSelect" value="Udapalatha"> Udapalatha</option> 
				<option class="disSelect" value="Udunuwara"> Udunuwara</option>
				<option class="disSelect" value="Yatinuwara"> Yatinuwara</option>
			</optgroup>
			<optgroup label="Kegalle">
				<option class="disSelect" value="Aranayaka"> Aranayaka</option> 
				<option class="disSelect" value="Bulathkohupitiya"> Bulathkohupitiya</option> 
				<option class="disSelect" value="Dehiovita"> Dehiovita</option> 
				<option class="disSelect" value="Deraniyagala"> Deraniyagala</option> 
				<option class="disSelect" value="Galigamuwa"> Galigamuwa</option> 
				<option class="disSelect" value="Kegalle"> Kegalle</option> 
				<option class="disSelect" value="Mawanella"> Mawanella</option> 
				<option class="disSelect" value="Rambukkana"> Rambukkana</option> 
				<option class="disSelect" value="Ruwanwella"> Ruwanwella</option> 
				<option class="disSelect" value="Warakapola"> Warakapola</option> 
				<option class="disSelect" value="Yatiyanthota"> Yatiyanthota</option>
			</optgroup>
			<optgroup label="Kilinochchi">
				<option class="disSelect" value="Kandavalai"> Kandavalai</option>
				<option class="disSelect" value="Karachchi"> Karachchi</option>
				<option class="disSelect" value="Pachchilaipalli"> Pachchilaipalli</option>
				<option class="disSelect" value="Poonakary"> Poonakary</option>
			</optgroup>
			<optgroup label="Kurunegala">
				<option class="disSelect" value="Alawwa"> Alawwa</option> 
				<option class="disSelect" value="Ambanpola"> Ambanpola</option> 
				<option class="disSelect" value="Bamunakotuwa"> Bamunakotuwa</option> 
				<option class="disSelect" value="Bingiriya"> Bingiriya</option> 
				<option class="disSelect" value="Ehetuwewa"> Ehetuwewa</option> 
				<option class="disSelect" value="Galgamuwa"> Galgamuwa</option>
				<option class="disSelect" value="Ganewatta"> Ganewatta </option> 
				<option class="disSelect" value="Giribawa"> Giribawa</option> 
				<option class="disSelect" value="Ibbagamuwa"> Ibbagamuwa</option> 
				<option class="disSelect" value="Kobeigane"> Kobeigane</option>
				<option class="disSelect" value="Kotavehera">Kotavehera</option> 
				<option class="disSelect" value="Kuliyapitiya East"> Kuliyapitiya East</option> 
				<option class="disSelect" value="Kuliyapitiya West"> Kuliyapitiya West</option>
				<option class="disSelect" value="Kurunegala"> Kurunegala</option> 
				<option class="disSelect" value="Mahawa"> Mahawa</option> 
				<option class="disSelect" value="Mallawapitiya"> Mallawapitiya</option> 
				<option class="disSelect" value="Maspotha"> Maspotha</option> 
				<option class="disSelect" value="Mawathagama"> Mawathagama</option> 
				<option class="disSelect" value="Narammala"> Narammala</option> 
				<option class="disSelect" value="Nikaweratiya"> Nikaweratiya</option> 
				<option class="disSelect" value="Panduwasnuwara East (Katupotha)"> Panduwasnuwara East (Katupotha)</option> 
				<option class="disSelect" value="Panduwasnuwara West"> Panduwasnuwara West</option> 
				<option class="disSelect" value="Pannala"> Pannala</option> 
				<option class="disSelect" value="Polgahawela"> Polgahawela</option> 
				<option class="disSelect" value="Polpithigama"> Polpithigama</option> 
				<option class="disSelect" value="Rasnayakapura"> Rasnayakapura</option> 
				<option class="disSelect" value="Rideegama"> Rideegama</option> 
				<option class="disSelect" value="Udubaddawa"> Udubaddawa</option> 
				<option class="disSelect" value="Wariyapola"> Wariyapola</option> 
				<option class="disSelect" value="Weerambugedara"> Weerambugedara </option>
			</optgroup>
			<optgroup label="Mannar">
				<option class="disSelect" value="Madhu"> Madhu</option> 
				<option class="disSelect" value="Mannar Town"> Mannar Town</option> 
				<option class="disSelect" value="Manthai West"> Manthai West</option> 
				<option class="disSelect" value="Musalai"> Musalai</option> 
				<option class="disSelect" value="Nanaddan"> Nanaddan</option>
			</optgroup>
			<optgroup label="Matale">
				<option class="disSelect" value="Ambanganga Korale"> Ambanganga Korale</option> 
				<option class="disSelect" value="Dambulla"> Dambulla</option> 
				<option class="disSelect" value="Galewela"> Galewela</option> 
				<option class="disSelect" value="Laggala-Pallegama"> Laggala-Pallegama</option> 
				<option class="disSelect" value="Matale"> Matale</option> 
				<option class="disSelect" value="Naula"> Naula</option> 
				<option class="disSelect" value="Pallepola"> Pallepola</option> 
				<option class="disSelect" value="Rattota"> Rattota</option> 
				<option class="disSelect" value="Ukuwela"> Ukuwela</option> 
				<option class="disSelect" value="Wilgamuwa"> Wilgamuwa</option> 
				<option class="disSelect" value="Yatawatta"> Yatawatta</option> 
			</optgroup>
			<optgroup label="Matara">
				<option class="disSelect" value="Akuressa"> Akuressa</option> 
				<option class="disSelect" value="Athuraliya"> Athuraliya</option> 
				<option class="disSelect" value="Devinuwara"> Devinuwara</option> 
				<option class="disSelect" value="Dickwella"> Dickwella</option> 
				<option class="disSelect" value="Hakmana"> Hakmana</option> 
				<option class="disSelect" value="Kamburupitiya"> Kamburupitiya</option> 
				<option class="disSelect" value="Kirinda Puhulwella"> Kirinda Puhulwella</option> 
				<option class="disSelect" value="Kotapola"> Kotapola</option> 
				<option class="disSelect" value="Malimbada"> Malimbada</option> 
				<option class="disSelect" value="Matara Four Gravets"> Matara Four Gravets</option> 
				<option class="disSelect" value="Mulatiyana"> Mulatiyana</option> 
				<option class="disSelect" value="Pasgoda"> Pasgoda</option> 
				<option class="disSelect" value="Pitabeddara"> Pitabeddara</option> 
				<option class="disSelect" value="Thihagoda"> Thihagoda</option> 
				<option class="disSelect" value="Weligama"> Weligama</option> 
				<option class="disSelect" value="Welipitiya"> Welipitiya</option>
			</optgroup>
			<optgroup label="Monaragala">
				<option class="disSelect" value="Badalkumbura"> Badalkumbura</option> 
				<option class="disSelect" value="Bibile"> Bibile</option> 
				<option class="disSelect" value="Buttala"> Buttala</option> 
				<option class="disSelect" value="Katharagama"> Katharagama</option> 
				<option class="disSelect" value="Madulla"> Madulla</option> 
				<option class="disSelect" value="Medagama"> Medagama</option> 
				<option class="disSelect" value="Moneragala"> Moneragala</option> 
				<option class="disSelect" value="Sevanagala"> Sevanagala</option> 
				<option class="disSelect" value="Siyambalanduwa"> Siyambalanduwa</option> 
				<option class="disSelect" value="Thanamalvila"> Thanamalvila</option> 
				<option class="disSelect" value="Wellawaya"> Wellawaya</option>
			</optgroup>
			<optgroup label="Mullaitivu">
				<option class="disSelect" value="Manthai East (Pandiyankulam)"> Manthai East (Pandiyankulam)</option> 
				<option class="disSelect" value="Maritimepattu"> Maritimepattu</option> 
				<option class="disSelect" value="Oddusuddan"> Oddusuddan</option> 
				<option class="disSelect" value="Puthukudiyiruppu"> Puthukudiyiruppu</option> 
				<option class="disSelect" value="Thunukkai"> Thunukkai</option> 
				<option class="disSelect" value="Welioya"> Welioya</option>
			</optgroup>
			<optgroup label="Nuwara Eliya">
				<option class="disSelect" value="Ambagamuwa"> Ambagamuwa</option> 
				<option class="disSelect" value="Hanguranketha"> Hanguranketha</option> 
				<option class="disSelect" value="Kothmale"> Kothmale</option> 
				<option class="disSelect" value="Nuwara Eliya"> Nuwara Eliya</option> 
				<option class="disSelect" value="Walapane"> Walapane</option>
			</optgroup>
			<optgroup label="Polonnaruwa">
				<option class="disSelect" value="Dimbulagala"> Dimbulagala</option> 
				<option class="disSelect" value="Elahera"> Elahera</option> 
				<option class="disSelect" value="Hingurakgoda"> Hingurakgoda</option> 
				<option class="disSelect" value="Lankapura"> Lankapura</option> 
				<option class="disSelect" value="Medirigiriya"> Medirigiriya</option> 
				<option class="disSelect" value="Thamankaduwa"> Thamankaduwa</option> 
				<option class="disSelect" value="Welikanda"> Welikanda</option>
			</optgroup>
			<optgroup label="Puttalam">
				<option class="disSelect" value="Anamaduwa"> Anamaduwa</option> 
				<option class="disSelect" value="Arachchikattuwa"> Arachchikattuwa</option> 
				<option class="disSelect" value="Chilaw"> Chilaw</option> 
				<option class="disSelect" value="Dankotuwa"> Dankotuwa</option> 
				<option class="disSelect" value="Kalpitiya"> Kalpitiya</option> 
				<option class="disSelect" value="Karuwalagaswewa"> Karuwalagaswewa</option> 
				<option class="disSelect" value="Madampe"> Madampe</option> 
				<option class="disSelect" value="Mahakumbukkadawala"> Mahakumbukkadawala</option> 
				<option class="disSelect" value="Mahawewa"> Mahawewa</option> 
				<option class="disSelect" value="Mundalama"> Mundalama</option> 
				<option class="disSelect" value="Nattandiya"> Nattandiya</option> 
				<option class="disSelect" value="Nawagattegama"> Nawagattegama</option> 
				<option class="disSelect" value="Pallama"> Pallama</option> 
				<option class="disSelect" value="Puttalam"> Puttalam</option> 
				<option class="disSelect" value="Vanathavilluwa"> Vanathavilluwa</option> 
				<option class="disSelect" value="Wennappuwa"> Wennappuwa</option>
			</optgroup>
			<optgroup label="Ratnapura">
				<option class="disSelect" value="Ayagama"> Ayagama</option> 
				<option class="disSelect" value="Balangoda"> Balangoda</option> 
				<option class="disSelect" value="Eheliyagoda"> Eheliyagoda</option> 
				<option class="disSelect" value="Elapattha"> Elapattha</option> 
				<option class="disSelect" value="Embilipitiya"> Embilipitiya</option> 
				<option class="disSelect" value="Godakawela"> Godakawela</option> 
				<option class="disSelect" value="Imbulpe"> Imbulpe</option> 
				<option class="disSelect" value="Kahawatta"> Kahawatta</option> 
				<option class="disSelect" value="Kalawana"> Kalawana</option> 
				<option class="disSelect" value="Kiriella"> Kiriella</option> 
				<option class="disSelect" value="Kolonna"> Kolonna</option> 
				<option class="disSelect" value="Kuruvita"> Kuruvita</option> 
				<option class="disSelect" value="Nivithigala"> Nivithigala</option> 
				<option class="disSelect" value="Opanayaka"> Opanayaka</option> 
				<option class="disSelect" value="Pelmadulla"> Pelmadulla</option> 
				<option class="disSelect" value="Ratnapura"> Ratnapura</option> 
				<option class="disSelect" value="Weligepola"> Weligepola</option> 
			</optgroup>
			<optgroup label="Trincomalee">
				<option class="disSelect" value="Gomarankadawala"> Gomarankadawala</option> 
				<option class="disSelect" value="Kantalai"> Kantalai</option> 
				<option class="disSelect" value="Kinniya"> Kinniya</option> 
				<option class="disSelect" value="Kuchchaveli"> Kuchchaveli</option> 
				<option class="disSelect" value="Morawewa"> Morawewa</option> 
				<option class="disSelect" value="Muttur"> Muttur</option> 
				<option class="disSelect" value="Padavi Sri Pura"> Padavi Sri Pura</option> 
				<option class="disSelect" value="Seruvila"> Seruvila</option> 
				<option class="disSelect" value="Thambalagamuwa"> Thambalagamuwa</option> 
				<option class="disSelect" value="Trincomalee Town and Gravets"> Trincomalee Town and Gravets</option> 
				<option class="disSelect" value="Verugal (Echchilampattai)"> Verugal (Echchilampattai)</option>
			</optgroup>
			<optgroup label="Vavuniya">
				<option class="disSelect" value="Vavuniya"> Vavuniya</option> 
				<option class="disSelect" value="Vavuniya North"> Vavuniya North</option> 
				<option class="disSelect" value="Vavuniya South"> Vavuniya South</option> 
				<option class="disSelect" value="Vengalacheddikulam"> Vengalacheddikulam</option>
			</optgroup>
		</select>
		<br><br>
		<div id="resText"></div>
		<br>

		<div id="startStopBtn" onclick="Dropdown_Validation('districts')"></div><br/>

		<script>
	    function Dropdown_Validation(districts) {
	        var ddl = document.getElementById(districts);
	        var ddlText = ddl.options[ddl.selectedIndex].text;

	        if (ddlText == "-Select-") {
	            alert('Please select your city');
	        } else {
	        	getLocation();
	        }
	    }

			var x = document.getElementById("resText");

			function getLocation() {
			  if (navigator.geolocation) {
			    navigator.geolocation.getCurrentPosition(showPosition, showError);
			  } else { 
			    x.innerHTML = "Geolocation is not supported by this browser.";
			  }
			}

			function showPosition(position) {
				var locationLAT = position.coords.latitude;
				var locationLON = position.coords.longitude;
			  x.innerHTML = "Location Latitude: " + locationLAT.toFixed(4) + 
			  "<br>Location Longitude: " + locationLON.toFixed(4);

			  //create cookies to store latitude and long tude
			  createCookie("latitude", locationLAT, 1);
			  createCookie("longitude", locationLON, 1);
			  startStop();
			}
			function showError(error) {
			  switch(error.code) {
			    case error.PERMISSION_DENIED:
			      alert('User denied the request for Geolocation. Please enable Geolocation for the browser.')
			      break;
			    case error.POSITION_UNAVAILABLE:
			      x.innerHTML = "Location information is unavailable."
			      break;
			    case error.TIMEOUT:
			      x.innerHTML = "The request to get user location timed out."
			      break;
			    case error.UNKNOWN_ERROR:
			      x.innerHTML = "An unknown error occurred."
			      break;
			  }
			}
		</script>
		<a class="privacy" href="#" onclick="I('privacyPolicy').style.display=''">Privacy</a>
		<div id="test">
			<div class="testGroup">
				<div class="testArea2">
					<div class="testName">Ping</div>
					<div id="pingText" class="meterText" style="color:#AA6060"></div>
					<div class="unit">ms</div>
				</div>
				<div class="testArea2">
					<div class="testName">Jitter</div>
					<div id="jitText" class="meterText" style="color:#AA6060"></div>
					<div class="unit">ms</div>
				</div>
			</div>
			<div class="testGroup">
				<div class="testArea">
					<div class="testName">Download</div>
					<canvas id="dlMeter" class="meter"></canvas>
					<div id="dlText" class="meterText"></div>
					<div class="unit">Mbps</div>
				</div>
				<div class="testArea">
					<div class="testName">Upload</div>
					<canvas id="ulMeter" class="meter"></canvas>
					<div id="ulText" class="meterText"></div>
					<div class="unit">Mbps</div>
				</div>
			</div>
			<div id="ipArea">
				<span id="ip"></span>
			</div>
			<div id="shareArea" style="display:none">
				<h3>Share results</h3>
				<p>Test ID: <span id="testId"></span></p>
				<input type="text" value="" id="resultsURL" readonly="readonly" onclick="this.select();this.focus();this.select();document.execCommand('copy');alert('Link copied')"/>
				<img src="" id="resultsImg" />
			</div>
		</div>
	</div>

	<div id="privacyPolicy" style="display:none">
	    <h2>Privacy Policy</h2>
	    <h4>What data we collect</h4>
	    <p>
	        At the end of the test, the following data is collected and stored:
	        <ul>
	            <li>Test ID</li>
	            <li>Time of testing</li>
	            <li>Test results (download and upload speed, ping and jitter)</li>
	            <li>IP address</li>
	            <li>ISP information</li>
	            <li>Approximate location (inferred from IP address, not GPS)</li>
	            <li>User agent and browser locale</li>
	            <li>Test log (contains no personal information)</li>
	        </ul>
	    </p>
	    <h4>How we use the data</h4>
	    <p>
	        Data collected through this service is used to:
	        <ul>
	            <li>Allow sharing of test results (sharable image for forums, etc.)</li>
	            <li>To improve the service offered to you (for instance, to detect problems on our side)</li>
	        </ul>
	        No personal information is disclosed to third parties.
	    </p>
	    <h4>Your consent</h4>
	    <p>
	        By starting the test, you consent to the terms of this privacy policy.
	    </p>
	    <br/><br/>
	    <div class="closePrivacyPolicy">
	        <a class="privacy" href="#" onclick="I('privacyPolicy').style.display='none'">Close</a>
	    </div>
	    <br/>
	</div>
	<script type="text/javascript">setTimeout(function(){initUI()},100);</script>
</body>
</html>
