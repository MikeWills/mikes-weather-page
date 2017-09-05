var coordinates = window.location.hash.substr(1);

// For todays date;
Date.prototype.today = function () { 
	return (((this.getMonth()+1) < 10)?"0":"") + (this.getMonth()+1) +"/"+ ((this.getDate() < 10)?"0":"") + this.getDate() +"/"+this.getFullYear();
}
							
// For the time now
Date.prototype.timeNow = function () {
	return ((this.getHours() < 10)?"0":"") + this.getHours() +":"+ ((this.getMinutes() < 10)?"0":"") + this.getMinutes();
}

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
	
	//console.log("URL: " + json.properties.forecast);
	
	$.get(json.properties.forecast, function(forecastJson){
		//console.log("Call 2: " + JSON.stringify(forecastJson));
		weatherViewModel.periods(forecastJson.properties.periods);
	});
});

ko.applyBindings(weatherViewModel, document.getElementById('future-weather'));


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
}

//ko.applyBindings(weatherViewModel, document.getElementById('current-weather'));