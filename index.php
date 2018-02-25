<?php
// map.php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>The world is Yours</title>
    <?php
      require_once 'head3.php';
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
    document.write('<h2>' + today.toDateString() + '</h2><br>');
}
</script>
<script type="text/javascript"src="http://www.google.com/jsapi?key=AIzaSyATB2C726oPKkTfJd9MAnlEhglyvKe9Oaw">
<script type="text/javascript"charset="utf-8">google.load("maps","2.x"); google.load("jquery","1.3.1");</script>
<!--<meta name="viewport" content="initial-scale=1.0", user-scalable=no>-->
</head>
<body>
<div id="one">
All you need in this life is ignorance and confidence,
and then success is sure. - Mark Twain
</div>

<div id="four">
Great minds discuss ideas; average minds discuss events;
small minds discuss people. - Eleanor Roosevelt
</div>
<div id="two" class="center">
  <h1>Chicago, Illinois</h1>
  <script>
  printToday();
  var months = ['January','February','March','April','May','June',
                'July','August','September','October','November','December'];
  var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                              'Saturday','Sunday'];
  document.write('<p><span class="h2 clock" id="time_span"></span></p>');
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
    el.innerHTML =  hours + ' : ' + minutes + ' : ' + seconds + ' ' + ampm}, 1000);

var uluru =  {lat: 41.8892, lng: -87.618};
//var uluru = {lat: -25.363, lng: 131.044};
var locations = [
                    ['V', 41.8892, -87.618, 2],
                    ['Navy Pier', 41.8915, -87.606 , 1],
                    ['Gramps', 41.9945, -87.6551 , 1]
];
document.write('</div>');
document.write('<div id="map" class="map_canvas"></div>');
function initMap(){
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
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
    });
    loc = locations;
    for (var i = 0; i < locations.length; i++) {
              //placeMarker(i, locations[i]);
              // var contentString = '<div id="content' + i + '">' +
              // ' <div id="siteNotice"></div><h1 id="firstHeading" class = \
              // "firstHeading">Uluru</h1>' + '<div id="bodyContent">' +
              // '<p>Uluru, also referred to as Ayers Rock</p>'+
              // loc[i][0] + '</div></div>';
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
              //marker.data  = loc[i];
    }
    //google.maps.event.addDomListener(window, 'load', initMap);
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIdZ1N_gJxdRMudEwSbK6Dd4qrG6zgS3o&callback=initMap">
</script>
</div>
<script>
$(document).ready(function() {
      window.console && console.log('Document ready called');

      //$(function() {
      //    $('body').hide().fadeIn(3000);
      //});
});
     
</script>
</body>
</html>
