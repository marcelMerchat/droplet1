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
      /*nav {
          background-color: #CCFFEE;
          border: 2px solid #004400;
          height : 3em;
          font-family: arial, sans-serif;
      }
      nav ul {
          display: inline-block;
          list-style-type: none;
          vertical-align: middle;
          background-color: #f1f1f1;
          background-color: #dec9a2;
          border: 2px green solid;
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
      }*/
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
      .sidebar {
        float: left;
        padding: 0px;
        background-color: #dec9a2;
        border: 2px green solid;
        color: #004400;
      }
      ul {
          list-style-type: none;
          margin: 6px;
          padding: 0;
          /*position: fixed;*/
      }
      li {
          margin: 6px;
          padding: 2px;
          /*position: fixed;*/
      }
      .square-bullet {
          list-style-type: square;
      }
      .inside-bullets {
          list-style-position: inside;
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
<ul class="sidebar">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="crudBasic/">Website Database</a></li>
  <li><a href="rf-tools.php">RF Engineering Tools</a></li>
  <li><a href="machine-learning.php">Machine Learning</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
</ul>
<!--<p class="center quad-space"><a class="anchor-button" href="crudBasic/">Go to database</a></p>-->
<!-- end of a -->
<div id="main">
  <div id="section1">

  <h2 class="center">Machine-Learning and other Data Products</h2>

<h3>Introduction</h3>
<p>Modern computers and software programs are powerful tools for analyzing
   data and making machine-learning possible. With machine learning, we can
   make useful predictions or even make prudent automated decisions provided
   we understand the statistical accuracy of the estimates that the prediction
   is based on. An important measure of accuracy is the expected range and
   variation for likely outcomes of statistical variables. Estimates are
   provided by the data but probability theory of standard random variables
   informs us about the accuracy of these estimates.</p>
 <h3>Accuracy of Estimations and Predictions</h3>
 <p>Knowledge about the thing being estimated is needed to select an
   appropriate probability distribution. If a statistical outcome varies for
    many complex reasons such as a person's height, the bell-shaped normal
    distribution is usually a good choice. If the outcome is limited by
    filtering such as manufactured parts that have been sorted into bins, the
    distribution of parts within a bin may be uniform, the bell-shaped
    distribution would not be a good assumption and a uniform distribution
    would be a better choice.  If a variable is similar to the
    number of phone calls received by a call center per hour, the Poisson
    distribution is usually a good choice.
  </p>
<h3>Principal Components Analysis (PCA)</h3>
<p>
 One of the basic ideas of machine learning is that including multiple
 correlated variables in an algorithm increases variability and reduces
 accuracy. Thus one attempts to build algorithms using uncorrelated variables;
 PCA is an automated way to help accomplish this in an unsupevised manner by
 using linear algebra to transform data into a matrix with independent columns.
 While this eliminates the noise of correlated variables, it's inherently
 difficult to interpret transformed variables that are linear combinations
 of other variables.
</p>


<h3>Predicting a Dry June in Illinois</h3>
<p>It might seem foolhardy to try to predict anything about weather, but this
   investigation applies machine-learning to weather data records from
   O’Hare Airport at Chicago, Illinois. This analysis certainly shows the
   difficulties in weather prediction, but perhaps it shows that the likelihood
   or probability of a wet June appears to be weakly correlated with snow in
   February and cold weather in early spring and other variables over
   the previous months of a yearly weather record.</p>

<p>For unsupervised learning, we first explore the relationship between June
   rainfall and other weather data by computing the correlations between weather
   variables and performing cluster analysis. Based on the correlation results,
   a preliminary ordinary-least-squares analysis is performed for every
   possible combination of a reduced set of six column variables which have
   relatively high correlation with June rain. This was followed by
   principal components analysis for the same reduced set of six variables.</p>

<p>For supervised machine-learning, we develop models for four algorithms that
   predict the amount of June rain and compare the mean-squared error for these
   models using cross-validation. Finally, we perform final tests for which the
   bias, variance, and mean-square-error is presented for each method. The
   low correlation of June rain with February snow and cold weather in March
   and April changes the probability of a dry June a small but statistically
   significant amount, particularly for wet cluster years with a predicted
   rain level exceeds 100-mm. The years in the dry cluster seem to have a
   constant rain level, independent of the amount of predicted rainfall. None
   of the dry cluster years have June rain predictions above 100-mm while
   the three wettest years have predictions above 100-mm. The report is
    available <a href="https://rpubs.com/marcelMerchat/719630" target="_blank">
    at this Rpubs address </a>. The reproducible code for
    this project and report is shared at GitHub
<a href="https://github.com/marcelMerchat/dry_june_in_illinois" target="_blank">
         at this address</a>.
</p>

<p>Cross-validation was performed to compare the performance of four models.
   There were 10-folds. </p>
<h4>Regression Algorithms</h4>
<ul class="square-bullet inside-bullets">
  <li>Partial Least Squares (PLS)</li>
  <li>Ordinary-Least-Squares (OLS)</li>
  <li>Preprocessing with Principal Components Analysis (PCA) followed by PLS</li>
  <li>Ridge regression</li>
</ul>
<p>Ridge regression was included as a model instead of LASSO regression because
   the later did not perform well for this rather unpredictable weather problem
   with many weakly correlated variables. LASSO causes an underfitting problem
   with little predictive power for cases at a distance from the expected
   mean value. Increasing the hyperparameter λ until the model was simplified
   caused underfitting and loss of sensitivity where the predicted variation
   from the average response was filtered too much. The underfitting problem
   is reduced For ridge regression and at least some predictive power is
   obtained.</p>

<h3>Malignant Tumor Detection with University of Wisconsin Dataset:</h3>
<p>This illustrates a machine learning tool called Principal Components
   Analysis (PCA).</p>
<a href="http://rpubs.com/marcelMerchat/244844" target="_blank">
http://rpubs.com/marcelMerchat/244844</a>

<h3>Electric Power Reliability</h3>
<p>This illustrates a
  <a href="http://www.rpubs.com/marcelMerchat/304554" target="_blank"> machine-learning
      study of SAIDI and SAIFI Figures of Merit</a>.</p>

 Github Repository: https://github.com/marcelMerchat/electricPowerReliability1

<p> To better understand the correlation between the raw variables, we construct
 a heat map that shows the level of correlations amongst the variables.
 The heat map clearly shows the likely more independent variables to include
 in the model.
 Figure 2-A and Figure 2-B in the link below show the relationship
 between the two most important PCA variables computed from patient data. Table-4 describes the
 accuracy for the algorithm. The program code that implements
 this study is at this
<a href="https://github.com/marcelMerchat/breastCancer_WI" target="_blank">
Github repository</a>.
</p>
<h3>Electric Power Reliability</h3>
<p>SAIDI and SAIFI Figures of Merit:</P>
<a href="http://www.rpubs.com/marcelMerchat/304554" target="_blank">
    http://www.rpubs.com/marcelMerchat/304554</a>
<p>The program code and raw data that generates this study is at this
  <a href="https://github.com/marcelMerchat/electricPowerReliability1" target="_blank">
  Github Repository:</a>
</p>
<h3>Risk and Decisions Based on Machine Learning</h3>
<p>We need to understand the nature of data and business risk factors
  for loss as well as for opportunities. In order to exploit machine-learning,
  risk is managed using a mathematical tool with a seemingly odd name called
  the receiver operating characteristic (ROC), a name taken from an early case
  where a radar receiver system had to decide whether or not something
  was an enemy plane. It's called the ROC even when the problem
 has nothing to do with radar such as detecting cancer or predicting which
 product will be purchased. It's just the name of a general method.
 </p>
<p>
 A machine learning algorithm may predict who we may target for
 advertising but sometimes it can be a bigger decision. In the case of a
 military radar system, the probability of detecting an enemy plane must be
 balanced against the probability of shooting down one of your own
 planes. Radar manufacturers do everything possible to avoid friendly planes
 but the decision must ultimately be made with a limited amount of noisy data
 subject to risk. The unavoidable noise and the laws of probability require
 letting at least a few unfriendly planes pass in order to shoot down
 fewer of our own friendly planes. The best we can do is achieve
 a balance between undesired outcomes. Fortunately, many business decisions
 are less grave. Perhaps advertising dollars could be directed to more likely
 buyers and so on, but there are still plenty of safety matters
 such as accidents and if a
 decision costs the company money or there are lost opportunities,
 the weight of a decision is not without consequences.
</p>
<h3>Receiver Operating Characteristic (ROC)</h3>
<p>
The graphical tool called the ROC curve can be used with machine learning
to make informed decisions. Like common quality control tools,
the tool permits balancing a tradeoff between detecting something and
ignoring or missing it. It is a plot of the
probability of deciding there is an unfriendly plane versus the probability
that there is one. The probability of a false alarm can be read from the
same plot.
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
