<?php
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
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 25%;
          background-color: #f1f1f1;
          background-color: #dec9a2;
          border: 2px green solid;
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

  </head>
<body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="crudBasic/">Website Database</a></li>
  <li><a href="rf-tools.php">RF Engineering Tools</a></li>
  <li><a href="machine-learning.php">Machine Learning</a></li>
  <li><a href="about.html">About</a></li>
</ul>
<!--<p class="center quad-space"><a class="anchor-button" href="crudBasic/">Go to database</a></p>-->
<!-- end of a -->
<div id="main">
<div id="section1">

<h1 class="center">RF Engineering Tools</h1>
<h2>Power and Noise Figure Tools for Receiver Block Chain</h2>
<h4>RF Channel Loss and Receiver Noise Figure Dashboard</h4>
<p>This interactive tool is at
     <a href="https://marceljmerchatshinypubs.shinyapps.io/radioRange/" target="_blank">
              https://marceljmerchatshinypubs.shinyapps.io/radioRange/
     </a>. The program code for this dashboard is at this
     <a href="https://github.com/marcelMerchat/rf_block_chain1" target="_blank">
       Github repository</a>.
</p>
<h4>Channel Power Loss and Noise Figure Tool with Slideshow Report</h4>
<p> A tool that produces a slideshow report is available at
    <a href="https://marcelmerchat.github.io/rf_link_budget1/" target="_blank">
             https://marcelmerchat.github.io/rf_link_budget1/
    </a>. The program code for this is at this
    <a href="https://github.com/marcelMerchat/rf_link_budget1" target="_blank">
    this Github repository</a>.
</p>
<h4>Detailed Noise Figure Tool for Receiver Block Chain</h4>
<p>This tool produces a slideshow report. There is an example at
     <a href="https://marcelmerchat.github.io/rf_block_chain1" target="_blank">
       https://marcelmerchat.github.io/rf_block_chain1
     </a>. The program code for this is at this
     <a href="https://github.com/marcelMerchat/rf_block_chain1" target="_blank">
       Github repository</a>.
</p>
<h2>RF Impedance Transformer</h2>
<p>
The tool for matching components in an RF chain such as a power amplifier and
 an antenna is available at
<a href="https://marcelmerchat.github.io/impedanceTransformer1/" target="_blank">
  https://marcelmerchat.github.io/impedanceTransformer1/
</a>. The program code for this is at this

<a href="https://github.com/marcelMerchat/impedanceTransformer1" target="_blank">Github repository.</a>
 </p>

<h2>Data Science and Engineering Tools</h2>
<h3>Reproducibile Design</h3>
<p>The principal of data science is reproducibility. Applying this to
  engineering design or analysis requires that a single computer script program
  implements everything from initial design calculations to analyzing data and
  generating graphs and visualizations in an automated report.
  For an electrical design, calculations can include building a model such as
  a circuit netlist or IC layout. In the example above, the script sends the
  design parameters as a text netlist file to a Spice circuit program that
  simulates circuit perfomance. Once the perfomance data is generated,
  the data is imported by the script. Next it calls Python and R toolsets
  of data science in order to organize frequency response and Fourier analysis,
  power dissipation levels, and reliability data in database tables and data
  frames for further analysis.
</p>
<p>
  My communication work includes radio architecture, antennas, microwaves,
  noise figure and gain for receiver block chains, low noise amplifiers,
  digital signal processing and filter design, analog-to-digital converters, and
  error correction coding. In my most recent position, I performed radiated cell
  phone tests and wrote an R language program that parsed memory test data and
  generated a report with tables of statistical hypothesis tests and graphs.
  In another case, the report was an interactive webpage where users could
  zoom-in on data.
</p>
<p>
  I write LabVIEW programs for automated electronic or mechanical testing.
</p>
</div> <!-- section1 -->
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
</div> <!-- End of Main -->

</body>
</html>
