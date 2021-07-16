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
	    <li><a href="#">Activities</a></li>
	    <li><a href="#">Account</a></li>
	  </ul>
	</nav>
	</center><br><br>

	<div id="testWrapper">
		
		<label for="districts">Choose your district:</label>
		<select name="districts" id="districts">
			<option class="disSelect" value="" selected disabled>-Select-</option>
		  <option class="disSelect" value="Ampara">Ampara</option>
		  <option value="Anuradhapura">Anuradhapura</option>
		  <option value="Badulla">Badulla</option>
		  <option value="Batticaloa">Batticaloa</option>
		  <option value="Colombo">Colombo</option>
		  <option value="Galle">Galle</option>
		  <option value="Gampaha">Gampaha</option>
		  <option value="Hambantota">Hambantota</option>
		  <option value="Jaffna">Jaffna</option>
		  <option value="Kalutara">Kalutara</option>
		  <option value="Kandy">Kandy</option>
		  <option value="Kegalle">Kegalle</option>
		  <option value="Kilinochchi">Kilinochchi</option>
		  <option value="Kurunegala">Kurunegala</option>
		  <option value="Mannar">Mannar</option>
		  <option value="Matale">Matale</option>
		  <option value="Matara">Matara</option>
		  <option value="Monaragala">Monaragala</option>
		  <option value="Mullaitivu">Mullaitivu</option>
		  <option value="Nuwara Eliya">Nuwara Eliya</option>
		  <option value="Polonnaruwa">Polonnaruwa</option>
		  <option value="Puttalam">Puttalam</option>
		  <option value="Ratnapura">Ratnapura</option>
		  <option value="Trincomalee">Trincomalee</option>
		  <option value="Vavuniya">Vavuniya</option>
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
	            alert('Please select your district');
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
