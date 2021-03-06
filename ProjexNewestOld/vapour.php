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
            <li class="selected"><a href="vapour.php">Vapour Blasting</a></li>
            <li><a href="ultrasoniccleaning.php">Ultrasonic Cleaning</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
                <!--IMAGES ON SLIDER-->
                    <?php include('imageSlider.php'); ?>    
                <!--/END OF IMAGES ON SLIDER-->
             
    <div id="site_content">
      
        
        <div id="welcome">
            <h1>Vapour Blasting</h1> 
        </div>
        <div id="facebook_logo">
            <a target="_blank" href="https://www.facebook.com/kevin.ashton.1293?fref=ts"><img src="images/facebook.png" /></a>
        </div>
       
        <div class="clear"></div>

        <hr><br>
      
    <div id="content-extended">
        <p>Vapour blasting or other wise known as aqua blasting is the best surface finishing process known to achieve that factory as new clean finish to your aluminium or non ferrous motorcycle parts.</p>
        <p>The process is performed in our newly refurbished abrasive developments vaqua processing cabinet. The superior results are achieved by mixing the fine glass media with water in a continuous closed loop cycle within the machine which in turn feeds the blasting gun, the mixed water and media called slurry is then accelerated at the nozzle end by compressed air to perform the cleaning process.</p>
        <p>Vapour blasting gently cleans away all the years of grime, dirt and oxidization from component surface without any damage to the gasket faces or by eroding any metal away. Also the fine glass bead gently peens the surface which in turn seals the surface and produces a satin sheen finish to the component making it easy to clean and handle without picking up finger marks like dry blasting.</p>
        <p>After blasting the components are cold water rinsed and blown with compressed air.</p>
        <p>All components must be free from heavy grease and dirt deposits. Engine cases and engine parts have to be stripped of all bearings, gaskets and separate parts unbolted.</p>
        <p>To see our vapour blasting gallery please click <span style="font-weight:bold; font-size: 25px; text-decoration: none;"><a href="vapourGallery.php"> HERE</a></span></p>

        <h2>Vapour Blasting price guide</h2>
        <p>All parts must be de greased and paint free. It is difficult to list every individual combination of engines or customers requirements as the component size and shape can vary, listed below is a guide to pricing with popular models listed. If you want a exact price just drop me an email.</p>
        
        <div id="column1">
                        <h2>Single cylinder price guide</h2>
                           <ul>
                               <li>Air cooled head: £25</li>
                               <li>Water cooled head: £10</li>
                               <li>Air cooled barrel: £25</li>
                               <li>Water cooled barrel: £20</li>
                               <li>Crank cases: pair £50</li>
                           </ul>
            
                        <h2>Twin cylinder price guide</h2>
                            <ul>
                                <li>Air cooled head: £40</li>
                                <li>Water cooled head: £25</li>
                                <li>Air cooled barrels: £45</li>
                                <li>Water cooled barrels: £35</li>
                                <li>Crank cases: pair £60</li>
                            </ul>
                        <h2>Triple cylinder price guider</h2>
                            <ul>
                                <li>Air cooled head: £45</li>
                                <li>Water cooled head: £30</li>
                                <li>Air cooled barrel £50</li>
                                <li>Water cooled barrel £40</li>
                                <li>Crank cases: pair £80</li>
                            </ul>
            
                        <h2>Four cylinder price list</h2>
                            <ul>
                                <li>Air cooled head: £55</li>
                                <li>Water cooled head: £40</li>
                                <li>Air cooled barrels: £55</li>
                                <li>Water cooled barrels: £45</li>
                                <li>Crank cases: pair £100</li>
                            </ul>
            
               </div>
               <div id="column2">
                        <h2>Miscellaneous items price guide</h2>
                            <ul>
                                <li>Carburettors from £10 each</li>
                                <li>Fork lowers £15 each</li>
                                <li>pet cocks £10 callipers from £10 each</li>
                                <li>pet cocks £10</li>
                                <li>wheel hubs from £15</li>
                                <li>Sprocket carriers from £15</li>
                                <li>Rocker covers from £10</li>
                                <li>yokes from £10 each</li>
                            </ul>
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
