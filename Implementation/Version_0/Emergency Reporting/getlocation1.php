<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 


<p>We Need your Location Details to proceed further.</p>

<button onclick=" alert('ss'); alert('ss');">Allow Location</button>
<script>


function getLocation() {
	
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(redirectToPosition);
    } else { 
        alert("sorry");
    }
}

function redirectToPosition(position) {
	alert('message2.php?lat='+position.coords.latitude+'&long='+position.coords.longitude);
	//window.location = 

	</script>

</body>
</html>