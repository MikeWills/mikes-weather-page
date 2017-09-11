$(document).ready(function() {
	$('#li-nav-home').addClass('active');
    var navText = $('#nav-home').text();
    $('#nav-home').html(navText + ' <span class="sr-only">(current)</span>');
    
    $('#hwo').hide();
    
    $('#showHwo').click(function(){
    	$('#hwo').toggle('slow',function(){
    		if ($('#showHwo').text() == "Show")
    		{
    			$('#showHwo').text("Hide");
    		} 
    		else 
    		{
    			$('#showHwo').text("Show");
    		}
    	});
    });
});

var coordinates = window.location.hash.substr(1);
//console.log("Coordinates: " + coordinates);

if (coordinates == null || coordinates == ""){
	if (confirm("It looks like you haven't setup you're location. Would you like to do that now?")){
		window.location.replace("https://weather.mikewills.me/setup.php");
	} else {
		// Do Nothing
	}
};

// For todays date;
Date.prototype.today = function () { 
	return (((this.getMonth()+1) < 10)?"0":"") + (this.getMonth()+1) +"/"+ ((this.getDate() < 10)?"0":"") + this.getDate() +"/"+this.getFullYear();
};
							
// For the time now
Date.prototype.timeNow = function () {
	return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes();
};

ko.bindingHandlers.lineBreaks = {
    init: function (element, valueAccessor, allBindings, data, context) {  
	    var value = valueAccessor();
        $(element).html(ko.unwrap(value).replace(/\n/g, '<br />'));
    },
    update: function (element, valueAccessor, allBindings, data, context) {
    	var value = valueAccessor();
        $(element).html(ko.unwrap(value).replace(/\n/g, '<br />'));
    }
};

// ==================
// Refresh DateTime View Model
// ==================
var refreshViewModel = {
    timestamp: new Date().today() + " @ " + new Date().timeNow()
};

ko.applyBindings(refreshViewModel, document.getElementById('refreshDateTime'));

// ==================
// Weather View Model
// ==================
var weatherViewModel = {
	office: ko.observable(""),
	station: ko.observable(""),
	gridX: ko.observable(0),
	gridY: ko.observable(0),
	locationName: ko.observable(""),
	radarStation: ko.observable(""),
	stationUrl: ko.observable(""),
	stationImg: ko.observable(""),
	radarUrl: ko.observable(""),
	radarImg: ko.observable(""),
	periods: ko.observableArray([])
};

$.get('https://api.weather.gov/points/' + coordinates, function(json) {
	//console.log("Call 1: " + JSON.stringify(json));
	weatherViewModel.office(json.properties.cwa);
	weatherViewModel.radarStation(json.properties.radarStation);
	weatherViewModel.gridX(json.properties.gridX);
	weatherViewModel.gridY(json.properties.gridY);
	var locationName = "Forecast for: " + json.properties.relativeLocation.properties.city + " " + json.properties.relativeLocation.properties.state
	weatherViewModel.locationName(locationName);
	weatherViewModel.stationUrl("https://www.weather.gov/" + json.properties.cwa + "/");
	weatherViewModel.stationImg("https://www.weather.gov/wwamap/png/" + json.properties.cwa.toLowerCase() + ".png");
	weatherViewModel.radarUrl("https://radar.weather.gov/radar.php?rid=" + json.properties.cwa + "&product=N0R&overlay=11101111&loop=no");
	weatherViewModel.radarImg("https://radar.weather.gov/lite/N0R/" + json.properties.cwa + "_0.png");
	alertsViewModel.hwoUrl("http://forecast.weather.gov/product.php?site=" + json.properties.cwa + "&product=HWO&issuedby=" + json.properties.cwa);
	
	//console.log("URL: " + json.properties.forecast);
	
	$.get(json.properties.forecast, function(forecastJson){
		//console.log("Call 2: " + JSON.stringify(forecastJson));
		weatherViewModel.periods(forecastJson.properties.periods);
	});
	
	$.get(json.properties.forecastZone, function(countyJson){
		var zone = countyJson.properties.id;
		
		$.get("https://api.weather.gov/alerts?active=1&zone=" + zone, function(alertsJson){
			//console.log(JSON.stringify(alertsJson));
			alertsViewModel.features(alertsJson.features);
		});
		
		$.get("https://api.weather.gov/products/types/HWO/locations/" + json.properties.cwa, function(hwoJson){
			var hwoDetailUrl = "https://api.weather.gov/products/" + hwoJson.features[0].id;
			
			$.get(hwoDetailUrl, function(hwoDetailJson){
				alertsViewModel.hwoText(hwoDetailJson.productText);
			});
		});
	});
});

ko.applyBindings(weatherViewModel, document.getElementById('future-weather'));


// ==================
// Alerts View Model
// ==================
var alertsViewModel = {

	features: ko.observableArray([]),
	hwoUrl: ko.observable(""),
	hwoText: ko.observable(""),
	showHideAlert: function(data, event){
		//alert('you clicked: ' + data.properties.id);
		$('#' + data.properties.id).toggle('slow',function(){
    		if ($('#button-' + data.properties.id).text() == "Show")
    		{
    			$('#button-' + data.properties.id).text("Hide");
    		} 
    		else 
    		{
    			$('#button-' + data.properties.id).text("Show");
    		}
    	});
	}
};

ko.applyBindings(alertsViewModel, document.getElementById('weather-alerts'));


// ==================
// Current Weather View Model
// ==================
var currentWeatherViewModel = {
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
};

//ko.applyBindings(weatherViewModel, document.getElementById('current-weather'));