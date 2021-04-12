<?php
// root website folder with clock, map, and navigation bar
require_once 'util.php';
require_once 'jquery.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
      body {
          font-family: arial, sans-serif;
      }
      nav {
          background-color: #CCFFEE;
          border: 2px solid #004400;
          height : 3em;
          font-family: arial, sans-serif;
      }
      nav ul {
          display: inline-block;
          list-style-type: none;
          vertical-align: middle;
          color: #004400;
          padding-left: 4px;
          padding-right: 4px;
          padding-top: 2px;
          padding-bottom: 2px;
      }
      nav li {
        vertical-align: middle;
        padding-left: 0px;
        float: left;
        padding-right: 0px;
        padding-top: 2px;
        padding-bottom: 2px;
      }
      nav li a {
        color: #004400;
        text-decoration: none;
      }
      .back {
          left: 2px;
          color: #004400;
      }
      .back2 {
          left: 30%;
          color: #004400;
      }
      .forward {
          position: absolute;
          right: 10px;
      }
      .nav2 {
      }
      /* li.navdate {
        padding-top: 0px;
        padding-bottom: 0px;
        color: #004400;
      }
      .navtime {
        color: #004400;
      } */
      /* Vertical Navigation Bar */
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 25%;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
      }
      li a {
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
      }
      li a.active {
          background-color: #4CAF50;
          color: white;
      }
      li a:hover:not(.active) {
          background-color: #555;
          color: white;
      }
  </style>
    <title>Marcel Merchat</title>
    <?php
    if(isMobile()==1) {
        require_once 'mobile.php';
    } else {
        echo '<link rel="stylesheet" type="text/css" href="styleDesktop.css">';
    }
    ?>
    <link type="text/css" rel="stylesheet" href="navbar.css">
    <script>
    /*
        Multi-line comment
        Purpose: Illustrate basic JavaScript commands
        Date: February 14, 2018
        Version 1.0.0
    */
        function printToday(){
            var today = new Date();
            document.write(today.toDateString());
        }
    </script>
    <script type="text/javascript" src="http://www.google.com/jsapi?key=">
    <script type="text/javascript" charset="utf-8">google.load("maps","2.x"); google.load("jquery","1.3.1");</script>
</head>
<body>
<script>
    document.write('<nav id="nav1">');
        document.write('<ul>');
            document.write('<li><a href="crudBasic/" class="back">&#8656; Go to Database App</a></li>');
            document.write('<li <a href="links.html" class="back2">links.html</li>');

            document.write('<li><a href="crudBasic/" class="forward">Go to Database App &#8658;</a></li>');
        document.write('</ul>');
    document.write('</nav>');
</script>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<!--<p class="center quad-space"><a class="anchor-button" href="crudBasic/">Go to database</a></p>-->
<!-- end of a -->
<div id="main">
  <div id="top_right">
    <p>All you need in this life is ignorance and confidence,
    and then success is sure. - Mark Twain</p>

    <br>
      <p>

      When one door is closed, don't you know that many more are open.
           ― Bob Marley</p>
  </div>
  <h2 class="center">Welcome to Marcel Merchat's Website</h2>
  <h3 class="center">RF Electronic Engineer and Data Scientist</h3>
  <h4 class="center">Website and Database -- Development and Modeling</h4>
  <h4 class="center">Machine-Learning and other Data Products</h4>
  <h4 class="center">On-Line Analysis and Engineering Tools and Calculators</h4>
  <p class="center">Chicago, Illinois</p>
</div> <!-- end of main -->
<div id="inline-blocks">
    <div id="datblock">
        <script>
        var today = new Date();
        document.write(today.toDateString() + ' ');
        </script>
    </div>
    <div id="time_div"></div> <!-- end of time div-->
    <script>
        var months = ['January','February','March','April','May','June',
                'July','August','September','October','November','December'];
        var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                'Saturday','Sunday'];
        //document.write('<p class="center double-space"><span class="clock clock-border" id="time_span"> </span></p>');
        var el = document.getElementById('time_div');
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
      </script>
</div> <!-- end of inline blocks for date and time-->
<div id="map" class="map_canvas"></div>
<script>
var uluru =  {lat: 41.8892, lng: -87.618};
//var uluru = {lat: -25.363, lng: 131.044};
var locations = [
    //['V', 41.8892, -87.618, 2],
    ['Navy Pier', 41.8915, -87.606 , 1],
    //['Gramps', 41.9945, -87.6551 , 1]
    ['Gramps', 41.9912, -87.6541 , 1]
];
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
// end of main
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIdZ1N_gJxdRMudEwSbK6Dd4qrG6zgS3o&callback=initMap">
</script>
<script>
$(document).ready(function() {
      window.console && console.log('Document ready called');
      $('#nav1').insertBefore('#main');
      $('#main').insertBefore('#inline-blocks');
      $('#inline-blocks').insertBefore('#map');
      //$(function() {
      //    $('body').hide().fadeIn(3000);
      //});
});

</script>
</body>
</html>
