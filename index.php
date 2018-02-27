<?php
// root website folder with clock, map, and navigation bar
require_once 'util.php';
require_once 'jquery.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>The world is Yours</title>
    <?php
    if(isMobile()!==1) {
        require_once 'mobile.php';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="styleDesktop.css">';
        //require_once 'head3.php';
    }
    ?>
<script>
/*
    Multi-line comment
    Purpose: Illustrate basic JavaScript commands
    Date: February 14, 2018
    Version 1.0.0
*/
function printToday(){
    var today = new Date();
    document.write('<h2 class="center">' + today.toDateString() + '</h2>');
}
</script>
<script type="text/javascript"src="http://www.google.com/jsapi?key=AIzaSyATB2C726oPKkTfJd9MAnlEhglyvKe9Oaw">
<script type="text/javascript"charset="utf-8">google.load("maps","2.x"); google.load("jquery","1.3.1");</script>
</head>
<body>
<div id="top_left">
All you need in this life is ignorance and confidence,
and then success is sure. - Mark Twain
</div>
<div id="top_right">
Great minds discuss ideas; average minds discuss events;
small minds discuss people. - Eleanor Roosevelt
</div>
<div id="main">
<!--<div id="a">-->
<h2 class="center">Chicago, Illinois</h2>
<script>
printToday();
var months = ['January','February','March','April','May','June',
              'July','August','September','October','November','December'];
var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
              'Saturday','Sunday'];
document.write('<p class="center double-space"><span class="clock clock-border" id="time_span"> </span></p>');
var el = document.getElementById('time_span');
setInterval(function(){
     var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                                 'Saturday','Sunday'];
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var ampm = hours > 11 ? 'PM' : 'AM';
    hours = hours > 12 ? hours - 12 : hours;
    hours = hours === 0 ? 12 : hours;
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    el.innerHTML =  hours + ' : ' + minutes + ' : ' + seconds + ' ' + ampm
}, 1000);   // end of set setInterval

var uluru =  {lat: 41.8892, lng: -87.618};
//var uluru = {lat: -25.363, lng: 131.044};
var locations = [
          //['V', 41.8892, -87.618, 2],
          ['Navy Pier', 41.8915, -87.606 , 1],
          //['Gramps', 41.9945, -87.6551 , 1]
          ['Gramps', 41.9912, -87.6541 , 1]
];
</script>
<p class="center quad-space"><a class="anchor-button" href="crudBasic/">Go to database</a></p>
</div> <!-- end of main -->
<div id="map" class="map_canvas"></div>
<script>
function initMap(){
      var map = new google.maps.Map(document.getElementById('map'), {zoom: 15,
          center: uluru,
          scaleControl: true,
          mapTypeControl: true,
          mapTypeControlOptions: {
              position: google.maps.ControlPosition.TOP_CENTER,
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
          },
          zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_CENTER,
              style: google.maps.ZoomControlStyle.DEFAULT
          }
      });  // end of new google map
      loc = locations;
      for (var i = 0; i < locations.length; i++) {
              var contentString = '<div id="content">' + loc[i][0] + '</div>';
              var infowindow = new google.maps.InfoWindow({
                content : contentString
              });
              var latLng = {lat : loc[i][1], lng : loc[i][2]};
              var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    title : loc[i][0]
              });
     } // end of for loop
    //google.maps.event.addDomListener(window, 'load', initMap);
}  // end of initMap
//</div> // end of (b) (map)
// end of main
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIdZ1N_gJxdRMudEwSbK6Dd4qrG6zgS3o&callback=initMap">
</script>
<script>
$(document).ready(function() {
      window.console && console.log('Document ready called');
      $('#a').insertBefore('#map');

      //$(function() {
      //    $('body').hide().fadeIn(3000);
      //});
});

</script>
</body>
</html>
