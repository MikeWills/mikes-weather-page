<?php include 'd_header.php' ?>
<div class="container-fluid">
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