<?php
include("header.php");
	$conn = new mysqli("localhost", "root", "", "hospital");
	
	$register_table = "INSERT INTO register_form(first_name,last_name,age,gender,email_id,phone_number,city,district,state,pin_code)
	   VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[age]','$_POST[gender]','$_POST[email_id]','$_POST[m_number]','$_POST[city]','$_POST[district]','$_POST[state]','$_POST[pin_code]')";
	
	if (mysqli_query($conn, $register_table)) {
	echo "<center>Data saved succesfully</center>";	    
	}
	else {
	    return "Error: " . $register_table . "<br>" . $conn->error;
	}

?>

<html>
<body>

<p>Click for emergency !!!!.</p>


<button onclick="getLocation()"><u>HELP ME!!</u></button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;


  var latlon = position.coords.latitude + "," + position.coords.longitude;
}
</script>

</body>
</html>
