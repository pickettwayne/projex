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
  
  
        <link rel="stylesheet" type="text/css" href="jqueryGallery/zoomwall.css" />
        <script type="text/javascript" src="jqueryGallery/zoomwall.js"></script>
        
        
        
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
        
        
        


        window.onload = function() {
          zoomwall.create(document.getElementById('zoomwall'), true);
        };

    </script>
        <!-- IMAGE GALLERY STUFF -->
            <!-- 1. Link to jQuery (1.8 or later), -->
              <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

              <!-- fotorama.css & fotorama.js. -->
              <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
              <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
        <!-- END OF IMAGE GALLERY STUFF -->

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
      
                <!--IMAGES SLIDER-->
                    <?php include('imageSlider.php'); ?>    
                <!--/END OF IMAGES SLIDER-->
      
    <div id="site_content">
      
        
        <div id="welcome">
            <h1>Vapour Blasting Gallery</h1> 
        </div>
        
        <div id="facebook_logo">
            <a target="_blank" href="https://www.facebook.com/kevin.ashton.1293?fref=ts"><img src="images/facebook.png" /></a>
        </div>
       
        <div class="clear"></div>

        <hr><br>
      
    <div id="content-extended">
      
        <!-- JQUERY IMAGE GALLERY FOTORAMA JQUERY-->
            <div class="fotorama"
                    data-arrows="true"
                    data-click="true"
                    data-swipe="true"
                    data-keyboard="true"
                    data-nav="thumbs"
                    data-allowfullscreen="native"
                    data-width="1000"
                    data-height="600">
                <img src="images/vapourGallery/1.jpg"> <!-- ADD THE FOLLOWING FOR CAPTIONS ON THE IMAGES data-caption="" -->
		<img src="images/vapourGallery/2.jpg">
		<img src="images/vapourGallery/3.jpg">
		<img src="images/vapourGallery/4.jpg">
		<img src="images/vapourGallery/5.jpg">
		<img src="images/vapourGallery/6.jpg">
		<img src="images/vapourGallery/7.jpg">
		<img src="images/vapourGallery/8.jpg">
		<img src="images/vapourGallery/9.jpg">
		<img src="images/vapourGallery/10.jpg">
		<img src="images/vapourGallery/11.jpg">
		<img src="images/vapourGallery/12.jpg">
		<img src="images/vapourGallery/13.jpg">
		<img src="images/vapourGallery/14.jpg">
		<img src="images/vapourGallery/15.jpg">
		<img src="images/vapourGallery/16.jpg">
		<img src="images/vapourGallery/17.jpg">
		<img src="images/vapourGallery/18.jpg">
		<img src="images/vapourGallery/19.jpg">
		<img src="images/vapourGallery/20.jpg">
		<img src="images/vapourGallery/21.jpg">
		<img src="images/vapourGallery/22.jpg">
		<img src="images/vapourGallery/23.jpg">
		<img src="images/vapourGallery/24.jpg">
		<img src="images/vapourGallery/25.jpg">
		<img src="images/vapourGallery/26.jpg">
		<img src="images/vapourGallery/27.jpg">
		<img src="images/vapourGallery/28.jpg">
		<img src="images/vapourGallery/29.jpg">
		<img src="images/vapourGallery/30.jpg">
		<img src="images/vapourGallery/31.jpg">
		<img src="images/vapourGallery/32.jpg">
		<img src="images/vapourGallery/33.jpg">
		<img src="images/vapourGallery/34.jpg">
		<img src="images/vapourGallery/35.jpg">
		<img src="images/vapourGallery/36.jpg">
		<img src="images/vapourGallery/37.jpg">
		<img src="images/vapourGallery/38.jpg">
		<img src="images/vapourGallery/39.jpg">
		<img src="images/vapourGallery/40.jpg">
		<img src="images/vapourGallery/41.jpg">
		<img src="images/vapourGallery/42.jpg">
		<img src="images/vapourGallery/43.jpg">
		<img src="images/vapourGallery/44.jpg">
		<img src="images/vapourGallery/45.jpg">
		<img src="images/vapourGallery/46.jpg">
		<img src="images/vapourGallery/47.jpg">
		<img src="images/vapourGallery/48.jpg">
		<img src="images/vapourGallery/49.jpg">
		<img src="images/vapourGallery/50.jpg">
            </div>
        <!-- END OF IMAGE GALLERY -->
        
        
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
