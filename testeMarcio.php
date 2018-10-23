
<!-- saved from url=(0039)https://sismaxi.com.br/localizacao.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head><body onload="getLocation()">


	<script>
	var longitude=0;
	var latitude=0;
		var x = document.getElementById("demo");

		function getLocation() {
		    if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		    } else { 
		        x.innerHTML = "Geolocation is not supported by this browser.";
		    }
		}

		function showPosition(position) {
			/*var $latitude = position.coords.latitude;
			var $longitude = position.coords.longitude;

	        var $url = "localizacao.php?pLatitude=" + $latitude + "&pLongitude=" + $longitude;
	        $.get($url, function( data ){
	        });  */
		    x.innerHTML = "Latitude: " + position.coords.latitude +
    		"<br>Longitude: " + position.coords.longitude;

		    /*x.innerHTML = '{ "employees" : [{"Latitude":"' + position.coords.latitude +
    		'"},{"Longitude":"' + position.coords.longitude + '"}]}';  */
		}
		   	longitude=position.coords.longitude;
    		latitude=position.coords.latitude;
	</script>
<?php
	$variavelLONG="<script>document.write(longitude);</script>";
	echo "Longitude: ".$variavelLONG;
 ?>


</body></html>