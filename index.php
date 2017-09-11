<?php include 'd_header.php' ?>
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Mike's Weather Page</h1>
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
		<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
			<div id="weather-alerts">
				<div class="row">
					<div data-bind="foreach: alertsViewModel.features">
						<div class="col-12">
							<div class="alert alert-danger" role="alert">
								<p>
									<strong data-bind="text: properties.headline"></strong>
 									<button type="button" class="btn btn-link" data-bind="click: $root.showHideAlert, attr: {id: 'button-' + properties.id}">Show</button>
 								</p>
								<div data-bind="attr: {id: properties.id}" style="display: none;">
									<p data-bind="lineBreaks: properties.description"></p>
									<p><strong>Instructions</strong></p>
									<p data-bind="lineBreaks: properties.instruction"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="alert alert-warning" role="alert">
							<p>
								<strong><a class="alert-link" target="_blank" data-bind="attr: {href : alertsViewModel.hwoUrl }">Hazardous Weather Outlook</a></strong>
								<button type="button" class="btn btn-link" id="showHwo">Show</button>
							</p>
							<div id="hwo">
								<p data-bind="lineBreaks: alertsViewModel.hwoText"></p>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2>Local Weather</h2>
					<hr /> 
				</div>
			</div>
			<div class="row">
				<div class="col" id="current-weather">
				</div>
			</div>
			<div id="future-weather">
				<div>
					<p><strong data-bind="text: locationName"></strong></p>
					<div class="row" data-bind="foreach: weatherViewModel.periods.slice(0, 6)">
						<div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-2">
							<p><strong data-bind="text: name"></strong></p>
							<img data-bind="attr: { src: icon }" /> 
							<p data-bind="text: detailedForecast"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<a target="_blank" data-bind="attr: {href : stationUrl }">
								<img class="img-fluid" data-bind="attr: {src: stationImg}" /> 
							</a>
						</div>
						<div class="col-6">
							<a target="_blank" data-bind="attr: {href : radarUrl }">
								<img class="img-fluid" data-bind="attr: {src: radarImg }"> 
							</a>
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
						<h2>National Weather Maps</h2>
						<hr /> 
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<h4>SPC Overview</h4>
						<p>
							<a href="http://www.spc.noaa.gov/products/" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/products/activity_loop.gif" alt="Weather map - day 1" /> 
							</a>
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<h4>Severe Weather Outlook - Today</h4>
						<p>
							<a href="http://www.spc.noaa.gov/products/outlook/day1otlk.html" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day1otlk.gif" alt="Weather map - day 1" /> 
							</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<h5>Severe Weather Outlook - Day 2</h5>
						<p>
							<a href="http://www.spc.noaa.gov/products/outlook/day2otlk.html" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day2otlk.gif" alt="Weather map - day 2" /> 
							</a>
						</p>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<h5>Severe Weather Outlook - Day 3</h5>
						<p>
							<a href="http://www.spc.noaa.gov/products/outlook/day3otlk.html" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day3otlk.gif" alt="Weather map - day 3" /> 
							</a>
						</p>
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
						<h5>Severe Weather Outlook - Day 4+</h5>
						<p>
							<a href="http://www.spc.noaa.gov/products/exper/day4-8/" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/products/exper/day4-8/day48prob.gif" alt="Weather map - day 3" /> 
							</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
						<h5>Weather Map - Day 1</h5>
						<p>
							<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank">
								<img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad1.gif" alt="Weather map - day 1" /> 
							</a>
						</p>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
						<h5>Weather Map - Day 2</h5>
						<p>
							<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank">
								<img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad2.gif" alt="Weather map - day 2" /> 
							</a>
						</p>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
						<h5>Weather Map - Day 3</h5>
						<p>
							<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank">
								<img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad3.gif" alt="Weather map - day 3" /> 
							</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<h4>Watches</h4>
						<p>
							<a href="http://www.spc.noaa.gov/products/watch/" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/products/watch/validww.png" alt="Weather map - day 2" /> 
							</a>
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<h4>Storm Reports</h4>
						<p>
							<a href="http://www.spc.noaa.gov/climo/online/" target="_blank">
								<img class="img-fluid" src="http://www.spc.noaa.gov/climo/reports/today.gif" alt="Weather map - day 3" /> 
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
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
<script src="/js/index.js"></script>
<?php include 'd_footer.php' ?>
