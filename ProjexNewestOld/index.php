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
            <li class="selected"><a href="index.php">Home</a></li>
            <li><a href='dyno.php'>Dyno</a></li>
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
            <h1>WELCOME TO PROJEX</h1>
        </div>
        <div id="facebook_logo">
            <a target="_blank" href="https://www.facebook.com/kevin.ashton.1293?fref=ts"><img src="images/facebook.png" /></a>
        </div>
       
        <div class="clear"></div>

        <hr><br>
      
    <div id="content">
        <p>Projex motorcycle engineers are based in Cradley Heath West Midlands, and we can offer a variety of services for the motorcycle enthusiast from classic to modern superbike.</p>
        <p>On site we have one of the latest dyna pro s125lc load control dynamometers for diagnostic use or setting up carburettors or fuel injection motorcycles.</p>
        <p>On site services also include, servicing and repairs, tyre fitting, balancing, engineering, welding, electrical, machining, vapour blasting and ultrasonic carburettor cleaning for that classic or restoration project.</p>

        <p>Please see list of services to see if we can help or just send an email with your enquiry.</p>
        
                <div id="column1">
                           <ul>
                               <li>Carburettor jetting and set up</li>
                               <li>Suzuki Direct Ecu Mapping</li>
                               <li>Power and fuelling checks</li>
                               <li>Electrical and wiring</li>
                               <li>Dyno testing</li>
                               <li>Fuel injection mapping</li>
                               <li>Diagnostics</li>
                               <li>Powder coating</li>
                               <li>Restoration work</li>
                           </ul>
               </div>
               <div id="column2">
                           <ul>  
                               <li>Fabrication</li>
                               <li>Exhausts Supplied & Fitted</li>
                               <li>Power Commander Supplied & Fitted</li>
                               <li>Tyres Supplied & Fitted</li>
                               <li>Ultrasonic Carburettor Cleaning</li>
                               <li>Vapour blasting (aqua blasting)</li>
                               <li>Polishing</li>
                               <li>Chain and sprockets</li>
                               <li>Servicing and repairs</li>
                           </ul>
               </div>
        
        <div class="clear"></div>
        
    </div>
        
        <div id="sidebar_container">
            <div class="sidebar">
              <h3>Special Offers</h3>
              <h4>Special Offer title</h4>
              <p>Description of special offer here.</p>
            </div>
            <div class="sidebar">
              <h3>Contact Us</h3>
              <p>If you have a query.<br/> Call us on <strong>01384 633759</strong><br/> 
                                           Email us at <a href="#">kev@projexdyno.co.uk</a><br/> 
                                           Complete our <a href="contact.php">contact form</a>.</p>
            </div>
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
