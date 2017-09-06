<?php include 'd_header.php' ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Mike's Hurricane Page</h1>
		</div>
		<div class="col">
			<p class="text-right" id="refreshDateTime">Last Updated: <span data-bind="text: timestamp"></span></p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr /> 
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
			
		</div>
		<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
			<h3>Links</h3>
			<ul class="list-unstyled">
				<li><a href="http://www.weather.gov/" target="_blank">National Weather Service</a></li>
				<li><a href="http://mobile.weather.gov/" target="_blank">Mobile NWS</a></li>
				<li><a href="http://www.spc.noaa.gov/" target="_blank">Storm Prediction Center</a></li>
			</ul>
		</div>
	</div>
</div>
<?php include 'd_javascript.php' ?>
<script>
	$(document).ready(function() {
    	$('#li-nav-hurricane').addClass('active');
    	var navText = $('#nav-hurricane').text();
    	$('#nav-hurricane').html(navText + ' <span class="sr-only">(current)</span>');
	});
</script>
<?php include 'd_footer.php' ?>