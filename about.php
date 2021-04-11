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
  <li><a href="rf-tools.html">RF Engineering Tools</a></li>
  <li><a href="machine-learning.html">Machine Learning</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>
<!--<p class="center quad-space"><a class="anchor-button" href="crudBasic/">Go to database</a></p>-->
<!-- end of a -->
<div id="main">
  <div id="section1">

  <h2 class="center">Welcome to Marcel Merchat's Website</h2>
  <h3 class="center">RF Electronic Engineer and Data Scientist</h3>
  <p class="center">Chicago Metropolitan Area, Illinois</p>
  <h3>About Me</h3>
  <p>
I seek work as a data scientist and RF communication engineer. I
have worked in the two-way radio industry since 1997 as well as completing
programs in Data Science and Communication Systems to extend my MSEE degree.
In my most recent position, I performed radiated cell phone tests and wrote
an R language program that parsed memory test data and generated a report
with tables of statistical hypothesis tests and graphs. In another case,
the report was an interactive webpage where users could zoom-in on data.

While my machine-learning and data science work have predicted electric power
reliability and cancer health conditions, modeled SQL and MongoDB databases,
and built statistical data products, I also build RF engineering
dashboards and calculators such as RF power and noise budget tools for the
receiver block chain such as the link in the RF section below.
</p>
<p>You can see my resume <a href="crudBasic/portfolio.php?profile_id=26">here</a>.</p>
<h3>Communications and RF Electronics</h3>
<p>
My communication work includes radio architecture, antennas,
microwaves, noise figure and gain for receiver block chains,
low noise amplifiers, digital signal processing and filter design,
analog-to-digital converters, and error correction coding.
</p>
<h3>Engineering Design Projects &#8212; Reproducible Performance</h3>
<p>
I use a reproducible method for engineering design projects that is similar
to the data science method. The idea is that a
single computer script accomplishes everything from the
design calculations to analyzing the data and generating graphs and
visualizations in an automated report, nothing should be done manually. Even
to change the report, the changes should be made to the script as this insures
reproducibility. One way that engineering projects are a little different is
that they usually require extra process steps of initial design calculations,
and expressing a model such as a netlist or IC layout as a text file in order to
generate the raw data for the analysis using a simulation tool such as SPICE,
although sometimes I use general linear equation tools in Python or R
to achieve the same result.
</p>
<p>
After the simulated data is generated, Python and R toolsets of data science
organize power dissipation levels, frequency response and Fourier analysis,
and reliability data in data frames and tables for analysis.
</p>
<p>
 In the server testing environment on my own PC, I can use either the SPICE
 or the data science tools to solve the equations. For example, the following
 link describes a tool that designs an RF transformer to match components
 in an RF chain such as a power amplifier and an antenna.  I have two versions
 of the tool; one calls a SPICE program to solve the equations one the other
 version solves the equations with linear equation tools in R. I'm
 investigating the feasibility of installing a SPICE program
 in the cloud droplet for this website.
</p>
<h3>LabVIEW</h3>
<p>
I have written LabVIEW programs for automated control and electronic
measurements since 2014. I also write user instructions and guidelines for
these programs. At Motorola Mobile, I made a Windows LabVIEW
application for cellphone battery charging control and measurements.
An emulated battery supply was swept through a range of voltage levels as the
current was measured in a repeating process loop.
</p>
<p>
To provide flexibility, the LabVIEW program began by importing a row of
data from a spreadsheet file that determined voltages,
charging and charger-off times for current measurements, random number
seed values for some timing settings, and quality control limits.
Serial numbers of equipment and test samples were polled and recorded.
Measurements were repeated during each process loop and compared with
requirements as key graphs and results were displayed continuously by
the Windows program. Finally, all results and measurements were stored
in a spreadsheet data file in an open file format for easy analysis with Excel
spreadsheets and data science analysis and automated reports.

I have also written PLC structured data programs and communication with
Beckhoff Twincat-3 software. Serial Communication via RS-232 and RS-485
with Modbus Protocols

I design test fixtures with mechanical and electronic capability,
Python and R programs to mine test data, create and manage databases,
perform statistical analysis and  generate automated reports. I am a Registered
Professional Engineer in Illinois.
</p>
<p>
I have performed radiated LTE tests for RF cellular products,
measurements with triggered oscilloscopes, and performed micro-soldering
to 0.3-mm pads.
</p>
<p>
I write data science R programs and bash scripts that mine test data,
stored it in a data file, perform statistical
hypothesis tests, and generate reports with tables and graphs.
</p>
<p>
I have made interactive dashboards for independent user analysis
and plot adjustments.
</p>

</p>
<p>This webpage uses the nginx server in a cloud droplet at DigitalOcean.
     I perform testing using my computer at home using the Apache2 server
     running in Linux Ubuntu as provided by the Windows 10 development tools
     from Microsoft. I have not found any differences between the Ubuntu running
     in the cloud and the Ubuntu running in the Linux partition on my PC at
     home. I also have encountered any problems moving from the Apache2 server
     at home to the nginx one at the actual website.
</p>
<p>I had read about how Dean Attali had created his own shiny server using
     the nginx server at DigitalOcean. I initially sought to have my own
     interactive websites here too as I have a number of them already running
     on the RStudio shiny server. However, since I just completed the
     University of Michigan Web-Development Certificate by Coursera, this
     website is just a traditional one with an installed MySQL database based
     on the website for the final project, but it is changed a little so that
     it cannot be directly used for the course.
  </p>
  <p>I installed the R program in the cloud droplet for the website.
     Perhaps the next step might be to install the RStudio shiny server.
     However, I don't want to risk messing up the current website with such
     an experiment. I may try it on a new droplet. Since, the R program is
     running in the cloud droplet, I need to try generating some graphs using
     R programs called by the nginx server too.
  </p>


</div> <!-- section1 -->

</div> <!-- End of Main -->

</body>
</html>
