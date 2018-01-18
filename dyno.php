<!DOCTYPE HTML>
<html>

<head>
  <title>PROJEX</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
   
  <!--SLIDER JQUERY-->
      <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
  
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.php">Home</a></li>
            <li class="selected"><a href='dyno.php'>Dyno</a></li>
            <li><a href="vapour.php">Vapour Blasting</a></li>
            <li><a href="ultrasoniccleaning.php">Ultrasonic Cleaning</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
      
      
                <!--IMAGES SLIDER-->
                    <?php include('imageSlider.php'); ?>    
                <!--/END OF IMAGES SLIDER-->
      
      
    <div id="site_content">
      
        
        <div id="welcome">
            <h1>Dyno Testing</h1> 
        </div>
        <div id="facebook_logo">
            <a target="_blank" href="https://www.facebook.com/kevin.ashton.1293?fref=ts"><img src="images/facebook.png" /></a>
        </div>
       
        <div class="clear"></div>

        <hr><br>
      
    <div id="content-extended">
        <div id="leftColumnText">
            <p>It doesn’t matter weather you have a 70s classic or a modern superbike dyno tuning is the best and safest way to get your pride and joy running the way it should.</p>
            <p>If you have modified or altered your motorcycles exhaust or intake system it may benefit from having the fuelling re set or adjusted to suit the engines new demands. Depending on the type of fuel delivery system fitted to the motorcycle weather its carburettors or fuel injection there are various ways of adjusting the fuel mixture either by good old fashioned re jetting for the carbs or add-on programmable units or tuning software used for fuel injection systems.</p>
        </div>
        <div id="rightColumnPicture">
            <img src="images/dyno1.png" />
        </div>
        
          <div class="clear"></div>
        <p>A dyno has many uses and functions it is also used as a diagnostic tool for fault finding, so if you have a 70s 80s or 90s classic fitted with carburettors due to the age and mileage you wouldn’t believe how bad, or by how much some of these carburettors are out of tune, a simple dyno test can pinpoint any areas that need attention or adjustment.</p>
        <p>Many of these early bikes are transformed by having the carburettors ultrasonic cleaned and reset to the factory specifications. See ultrasonic cleaning page.</p>
        <p>Power and fuelling checks also available, a simple dyno test with gas analysis will provide you with a health report on your motorcycle, tests will be performed at various throttle openings including loaded tests and full throttle power runs to give you the maximum BHP achieved.</p>
        
        
        <h2>Tuning options</h2>
        <ul>
            <li>Most makes and models fitted with fuel injection = power commanders</li>
            <li>Suzuki models = bike tech tuning software (direct to Ecu)</li>
            <li>Early Suzuki models = Nikko racing adjuster ( same as yoshi box)</li>
            <li>KTM = tune Ecu direct Ecu mapping</li>
            <li>Triumph = tune Ecu direct Ecu mapping</li>
            <li>Carburettors = re jet and set up to suit new fuel demands</li>
        </ul>
        
        <p>Projex dyno testing facility’s are carried out on our state of the art dyna pro s125lc load control dynamometer, producing unrivalled accurate power and torque figures. Incorporating the latest technology for optimizing your motorcycles air to fuel ratio to get maximum benefit from your engine, whatever bike you ride you could have added responsiveness and performance or save your engine from premature ware or irreversible damage.</p>
        <p>Tests are performed in our purpose built sound booth with outside air feed and auto climate analysis to record climate conditions including temperature, humidity, and air density on the day of testing.</p>
 
        <h2>Other services</h2>
        <p>Motorcycle diagnostics and fault finding service available using gas analysis and on board diagnostic and dater logging system reduce fault finding time and potentially hazardous road testing.</p>
        
        
        <h2>Suzuki Direct Ecu Mapping</h2>
        <div id="leftColumnText">
            <p>Using the pro bike Suzuki bike tech direct Ecu mapping system no need for a add on fuel controller doesn’t stay on the bike no wiring ,flashes settings into existing denso Ecu, adjusts idle settings and five throttle positions most Suzuki models from 2003 onwards. Phone for details. Setup on the Dyno. £80</p>
        </div>
        <div id="rightColumnPicture">
            <img src="images/dyno2.png" />
        </div>
        
          <div class="clear"></div>
        
        <h2>Nikko Racing Suzuki Fi Adjuster</h2>
        <p>For most Suzuki models 16 and 32 bit denso processors, idle adjustment and three throttle positions. Setup on the Dyno. £60</p>   
        
        <h2>Prices</h2>
        <p>Dyno hire for one hour with diagnostics and multiple tests £50 1 hour</p>
        <p>Half day dyno hire if you wish to perform your own carburettor removal and jetting maximum of two bikes 9am to 1pm or 1pm to 5pm £125 four hours</p>
        
        <p>Open dyno day bookings welcome for your forum or club any makes or models. Great for meets and banter free butties and refreshments for numbers over 15.</p>
        
        <div id="leftColumnText">
            <ul>
                <li>Power commander custom map: £100</li>
                <li>Tune Ecu custom mapped: £120</li>
                <li>Carburettor setup 4cyl from: £150</li>
                <li>Fuel check and three power runs: £25</li>
            </ul>
        </div>
        <div id="rightColumnPicture">
            <img src="images/dyno3.png" />
        </div>
        <div class="clear"></div>
        
    </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
        <div id="imageBar">
        </div>
        
        <p><a href="index.php">Home</a> | <a href="dyno.php">Dyno</a> | <a href="vapour.php">Vapour Blasting</a> | <a href="ultrasoniccleaning.php">Ultrasonic Cleaning</a> | <a href="gallery.php">Gallery</a> | <a href="contact.php">Contact Us</a></p>
      <p>2012 Projex Ltd &copy;</p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

