<?php include 'd_header.php' ?>
<div id="weather-alerts">
	<div class="row">
		<div data-bind="foreach: alertsViewModel.features">
			<div class="col-12">
				<div class="alert alert-danger" role="alert">
					<h4 data-bind="text: properties.headline">
					</h4>
					<p data-bind="lineBreaks: properties.description">
					</p>
					<h5>
						Instructions 
					</h5>
					<p data-bind="lineBreaks: properties.instruction" 
				</p>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="alert alert-warning" role="alert">
			<a href="http://forecast.weather.gov/wwamap/wwatxtget.php?cwa=mpx&amp;wwa=hazardous%20weather%20outlook" class="alert-link" target="_blank"> Hazardous Weather Outlook </a> 
		</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col">
		<h3>
			Local Weather 
		</h3>
	</div>
	<div class="col">
		<p class="text-right" id="refreshDateTime">
			Last Updated: <span data-bind="text: timestamp"> </span> 
		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr />
		</div>
	</div>
	<div class="row">
		<div class="col" id="current-weather">
		</div>
	</div>
	<div id="future-weather">
		<div>
			<h5 data-bind="text: locationName">
			</h5>
			<div class="row" data-bind="foreach: weatherViewModel.periods.slice(0, 6)">
				<div class="col-2">
					<h6 data-bind="text: name">
					</h6>
					<img data-bind="attr: { src: icon }" /> 
					<p data-bind="text: detailedForecast">
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<a target="_blank" data-bind="attr: {href : stationUrl }"> <img class="img-fluid" data-bind="attr: {src: stationImg}" /> </a> 
				</div>
				<div class="col-6">
					<a target="_blank" data-bind="attr: {href : radarUrl }"> <img class="img-fluid" data-bind="attr: {src: radarImg }"> </a> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>
					&nbsp 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>
					&nbsp 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h3>
					National Weather Maps 
				</h3>
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<h4>
					SPC Overview 
				</h4>
				<p>
					<a href="http://www.spc.noaa.gov/products/" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/products/activity_loop.gif" alt="Weather map - day 1" /> </a> 
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<h4>
					Severe Weather Outlook - Today 
				</h4>
				<p>
					<a href="http://www.spc.noaa.gov/products/outlook/day1otlk.html" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day1otlk.gif" alt="Weather map - day 1" /> </a> 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<h5>
					Severe Weather Outlook - Day 2 
				</h5>
				<p>
					<a href="http://www.spc.noaa.gov/products/outlook/day2otlk.html" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day2otlk.gif" alt="Weather map - day 2" /> </a> 
				</p>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<h5>
					Severe Weather Outlook - Day 3 
				</h5>
				<p>
					<a href="http://www.spc.noaa.gov/products/outlook/day3otlk.html" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day3otlk.gif" alt="Weather map - day 3" /> </a> 
				</p>
			</div>
			<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
				<h5>
					Severe Weather Outlook - Day 4+ 
				</h5>
				<p>
					<a href="http://www.spc.noaa.gov/products/exper/day4-8/" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/products/exper/day4-8/day48prob.gif" alt="Weather map - day 3" /> </a> 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
				<h3>
					Weather Map - Day 1 
				</h3>
				<p>
					<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank"> <img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad1.gif" alt="Weather map - day 1" /> </a> 
				</p>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<h3>
					Weather Map - Day 2 
				</h3>
				<p>
					<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank"> <img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad2.gif" alt="Weather map - day 2" /> </a> 
				</p>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<h3>
					Weather Map - Day 3 
				</h3>
				<p>
					<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank"> <img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad3.gif" alt="Weather map - day 3" /> </a> 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<h3>
					Watches 
				</h3>
				<p>
					<a href="http://www.spc.noaa.gov/products/watch/" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/products/watch/validww.png" alt="Weather map - day 2" /> </a> 
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<h3>
					Storm Reports 
				</h3>
				<p>
					<a href="http://www.spc.noaa.gov/climo/online/" target="_blank"> <img class="img-fluid" src="http://www.spc.noaa.gov/climo/reports/today.gif" alt="Weather map - day 3" /> </a> 
				</p>
			</div>
<?php include 'd_javascript.php' ?>
			<script src="/js/index.js">


			
			</script>
<?php include 'd_footer.php' ?>
