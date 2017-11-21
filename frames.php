<?php include 'd_header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home" data-toggle="tab" role="tab">NWS Twin Cities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#story" data-toggle="tab" role="tab">NWS Weather Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#local" data-toggle="tab" role="tab">Mankato Weather</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#spc" data-toggle="tab" role="tab">Storm Prection Center</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hurricane" data-toggle="tab" role="tab">Hurricanes</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <iframe src="https://www.weather.gov/MPX/" class="iframe" id="frame-home"></iframe>
                </div>
                <div class="tab-pane" id="story" role="tabpanel">
                    <iframe src="https://www.weather.gov/mpx/weatherstory" class="iframe" id="frame-story"></iframe>
                </div>
                <div class="tab-pane" id="local" role="tabpanel">
                    <iframe src="https://forecast.weather.gov/MapClick.php?lon=-94.03013530355703&lat=44.12654887275326#.WhOl6bQ-clI" class="iframe" id="frame-local"></iframe>
                </div>
                <div class="tab-pane" id="spc" role="tabpanel">
                    <iframe src="http://www.spc.noaa.gov/" class="iframe" id="frame-spc"></iframe>
                </div>
                <div class="tab-pane" id="hurricane" role="tabpanel">
                    <iframe src="http://www.nhc.noaa.gov/" class="iframe" id="frame-hurricane"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'd_javascript.php' ?>
<script type="text/javascript">
    function windowDimensions() { // prototype/jQuery compatible
        var myWidth = 0,
            myHeight = 0;
        if (typeof (window.innerWidth) == 'number') {
            //Non-IE or IE 9+ non-quirks
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
            //IE 6+ in 'standards compliant mode'
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
            //IE 5- (lol) compatible
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
        if (myWidth < 1) myWidth = screen.width; // emergency fallback to prevent division by zero
        if (myHeight < 1) myHeight = screen.height;
        return [myWidth, myHeight];
    }
    var dim = windowDimensions();
    myIframe = $('.iframe'); // changed the code to use jQuery
    myIframe.height((dim[1] - 200) + "px");

    window.setInterval(function () {
        reloadIFrame()
    }, 1800000); // 30 minutes

    function reloadIFrame() {
        console.log('reloading..');
        document.getElementById('frame-home').contentWindow.location.reload();
        document.getElementById('frame-story').contentWindow.location.reload();
        document.getElementById('frame-local').contentWindow.location.reload();
        document.getElementById('frame-spc').contentWindow.location.reload();
        document.getElementById('frame-hurricane').contentWindow.location.reload();
    }
</script>
<?php include 'd_footer.php' ?>