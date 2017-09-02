<?php include 'd_header.php' ?>
<div class="row">
	<div class="col">
		<h3>
			Local Weather Maps
		</h3>
	</div>
	<div class="col">
		<p class="text-right" id="refreshDateTime">
			Last Updated: <span data-bind="text: timestamp"></span>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr /> 
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<h3>
				Local Area 
			</h3>
			<p>
				<a href="https://www.weather.gov/mpx/" target="_blank">
					<img class="img-fluid" src="https://www.weather.gov/wwamap/png/mpx.png" alt="Weather map" /> 
				</a>
			</p>
			<p>
				<a href="http://forecast.weather.gov/wwamap/wwatxtget.php?cwa=mpx&amp;wwa=hazardous%20weather%20outlook" target="_blank">
					HWO 
				</a>
			</p>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<h3>
				Local Radar 
			</h3>
			<p>
				<a href="http://radar.weather.gov/lite/N0R/MPX_0.png" target="_blank">
					<img class="img-fluid" src="https://radar.weather.gov/lite/N0R/MPX_0.png" alt="Weather radar" /> 
				</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p>&nbsp</p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p>&nbsp</p>
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
				<a href="http://www.spc.noaa.gov/products/" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/products/activity_loop.gif" alt="Weather map - day 1" /> 
				</a>
			</p>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<h4>
				Severe Weather Outlook - Today 
			</h4>
			<p>
				<a href="http://www.spc.noaa.gov/products/outlook/day1otlk.html" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day1otlk.gif" alt="Weather map - day 1" /> 
				</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h5>
				Severe Weather Outlook - Day 2 
			</h5>
			<p>
				<a href="http://www.spc.noaa.gov/products/outlook/day2otlk.html" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day2otlk.gif" alt="Weather map - day 2" /> 
				</a>
			</p>
		</div>
		<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h5>
				Severe Weather Outlook - Day 3 
			</h5>
			<p>
				<a href="http://www.spc.noaa.gov/products/outlook/day3otlk.html" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/products/outlook/day3otlk.gif" alt="Weather map - day 3" /> 
				</a>
			</p>
		</div>
		<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<h5>
				Severe Weather Outlook - Day 4+ 
			</h5>
			<p>
				<a href="http://www.spc.noaa.gov/products/exper/day4-8/" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/products/exper/day4-8/day48prob.gif" alt="Weather map - day 3" /> 
				</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
			<h3>
				Weather Map - Day 1 
			</h3>
			<p>
				<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank">
					<img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad1.gif" alt="Weather map - day 1" /> 
				</a>
			</p>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
			<h3>
				Weather Map - Day 2 
			</h3>
			<p>
				<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank">
					<img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad2.gif" alt="Weather map - day 2" /> 
				</a>
			</p>
		</div>
		<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
			<h3>
				Weather Map - Day 3 
			</h3>
			<p>
				<a href="http://www.wpc.ncep.noaa.gov/national_forecast/natfcst.php" target="_blank">
					<img class="img-fluid" src="http://www.wpc.ncep.noaa.gov/noaa/noaad3.gif" alt="Weather map - day 3" /> 
				</a>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<h3>
				Watches 
			</h3>
			<p>
				<a href="http://www.spc.noaa.gov/products/watch/" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/products/watch/validww.png" alt="Weather map - day 2" /> 
				</a>
			</p>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<h3>
				Storm Reports 
			</h3>
			<p>
				<a href="http://www.spc.noaa.gov/climo/online/" target="_blank">
					<img class="img-fluid" src="http://www.spc.noaa.gov/climo/reports/today.gif" alt="Weather map - day 3" /> 
				</a>
			</p>
		</div>
<?php include 'd_javascript.php' ?>
<script>
// For todays date;
Date.prototype.today = function () { 
	return (((this.getMonth()+1) < 10)?"0":"") + (this.getMonth()+1) +"/"+ ((this.getDate() < 10)?"0":"") + this.getDate() +"/"+this.getFullYear();
}
							
// For the time now
Date.prototype.timeNow = function () {
	return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes();
}

var refreshViewModel = {
    timestamp: new Date().today() + " @ " + new Date().timeNow()
};

ko.applyBindings(refreshViewModel, document.getElementById('refreshDateTime'))

var weatherViewModel = {
	office: "",
	station: "",
	gridX: 0,
	gridY: 0,
	radarStation: "",
	currentForecast = new forecastPeriod(),
	periods: ko.observableArray([])
};

var forecastPeriod = {
	number: 0,
	name: "",
	startTime: "",
    endTime: "",
    isDaytime: false,
    temperature: 0,
    temperatureUnit: "F",
    temperatureTrend: null,
	windSpeed: "",
    windDirection: "",
    icon: "",
    shortForecast: "",
    detailedForecast: ""
}

</script>
<?php include 'd_footer.php' ?>
