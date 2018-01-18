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
            <li><a href='dyno.php'>Dyno</a></li>
            <li><a href="vapour.php">Vapour Blasting</a></li>
            <li class="selected"><a href="ultrasoniccleaning.php">Ultrasonic Cleaning</a></li>
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
            <h1>Ultrasonic Carburettor Cleaning Service</h1> 
        </div>
        <div id="facebook_logo">
            <a target="_blank" href="https://www.facebook.com/kevin.ashton.1293?fref=ts"><img src="images/facebook.png" /></a>
        </div>
       
        <div class="clear"></div>

        <hr><br>
      
    <div id="content-extended">
        <p>Using ultrasonic sound waves to clean carburettors is a far superior method than using sprays or chemicals to remove old fuel deposits and ground in grime.</p>
        <p>The cleaning process is caused by microscopic air bubbles imploding on the surface of the component like tiny explosions caused by the high frequency sound waves in the ultrasonic bath. All the holes and passages in the carburettors or any ware the solution has contact with are cleaned.</p>
        <p>No harsh or corrosive chemicals are used, only a mild detergent is used to help breakdown the years of grime that has built up over the years. Most carburettor problems are down to dirt and grime or blocked passage ways, ultrasonic cleaning will restore your carburettors performance back to as when they were new. </p>
        <p>Ultrasonic cleaning cleans the whole carburettor inside and out and removes dirt oil and stains etc but it will not remove corrosion or restore the alloy to a as new appearance, basically it will clean and remove all the grime, so as long as the carburettors are in good serviceable condition they will perform as new.</p>
        <p>f the appearance of the carburettors is of importance the ultrasonic cleaning service used in conjunction with our vapour blasting service will restore the exterior aluminium to a better than new finish which is ideal for that classic restoration project see vapour blasting page.</p>
        <p>To see our ultrasonic gallery please click <span style="font-weight:bold; font-size: 25px; text-decoration: none;"><a href="ultrasonicGallery.php"> HERE</a></span></p>
<img src="images/ultrawave-ultrasonic-cleaner.png" />
        <h2>Price Guide for Ultrasonic cleaning</h2>
        
        <ul>
            <li>Single carburettor sent disassembled: £10</li>
            <li>Twin carburettor sent disassembled: £20</li>
            <li>Triple carburettor sent disassembled: £30</li>
            <li>Bank of four carburettors sent disassembled: £40</li>
        </ul>
        
        <p>If you want the carburettors stripped cleaned, checked and re assembled back to factory settings add £15 per carburettor provided the carburettors are in a serviceable condition. Worn or faulty parts can be replaced with genuine parts if available or for certain models Keyster carburettor rebuild kits.</p>
        
        <ul>
            <li>Single carburettor sent assembled: £25</li>
            <li>Twin carburettor sent assembled: £50</li>
            <li>Triple carburettor sent assembled: £75</li>
            <li>Bank of four carburettors sent assembled: £100</li>
        </ul>
        
        <h2>Ride In Ride Out Service</h2>
        <p>If you have a suspect carburettor problem we can perform a dyno test at a discounted £15 to diagnose or pinpoint the cause of the fault and offer a ride in ride out carburettor cleaning and setup service which includes removal of the carburettors, strip ,clean, refit, balance and set the idle mixture with a gas analyser. If remedial work is not carried out after the dyno test the price for the test will be charged at £25.00 (for more information see dyno page)</p>
        
        <h2>Price Guide</h2>
        <p>For removal, strip, clean, refit, balance and idle mixture set</p>
        <ul>
            <li>Single cylinder: £55</li>
            <li>Twin cylinder: £80</li>
            <li>Triple cylinder: £110</li>
            <li>Four cylinder: £150</li>
        </ul>
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
