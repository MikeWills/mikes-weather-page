<?php include 'd_header.php' ?>
<style>
	#map-canvas {
		width: 100%;
	  	height: 600px;
		margin-bottom: 15px;
	    border: 2px solid #fff;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col">
			<h4>Instructions</h4>
			<p>This site requires some coordinates added to the URL in order to work. Please find your location on the map and right-click on that location. You can then click on the URL generated below to view the page.</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div id="map-canvas"></div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p>The URL you should bookmark is: <a href='#' id='setup-url'></a></p>
		</div>
	</div>
</div>
<?php include 'd_javascript.php' ?>
<script>
	String.prototype.replaceAll = function (find, replace) {
	    	var str = this;
	    	return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
	};
	
	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map-canvas'), {
			center: {lat: 39.8283, lng: -98.5795},
	        zoom: 5
	    });
	        
	    map.addListener('rightclick', function(e) {
	    	placeMarkerAndPanTo(e.latLng, map);
	  	});
	};
	
	function placeMarkerAndPanTo(latLng, map) {
	  		var marker = new google.maps.Marker({
	    		position: latLng,
	    		map: map
	  		});
	  		map.panTo(latLng);
	  		
	  		strLatLng = latLng.toString();
	  		strLatLng = strLatLng.replaceAll(' ', '').replaceAll('(','').replaceAll(')','');
	  		
	  		fullUrl = 'https://weather.mikewills.me/index.php#'+ strLatLng
	  		document.getElementById('setup-url').href = fullUrl;
	  		document.getElementById('setup-url').innerHTML = fullUrl;
	};
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU2UtiMek1HzJhpOWBQUS8LSaZlzN7bxM&amp;callback=initMap" async defer></script>
<?php include 'd_footer.php' ?>
