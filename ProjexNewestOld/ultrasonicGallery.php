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
            <h1>Ultrasonic Cleaning Gallery</h1> 
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
                <img src="images/ultrasonicGallery/1.jpg"> <!-- Add this to add a caption to the image -->
		<img src="images/ultrasonicGallery/2.jpg">                
		<img src="images/ultrasonicGallery/3.jpg">
		<img src="images/ultrasonicGallery/4.jpg">
		<img src="images/ultrasonicGallery/5.jpg">
		<img src="images/ultrasonicGallery/6.jpg">
		<img src="images/ultrasonicGallery/7.jpg">
		<img src="images/ultrasonicGallery/8.jpg">
		<img src="images/ultrasonicGallery/9.jpg">
		<img src="images/ultrasonicGallery/10.jpg">
		<img src="images/ultrasonicGallery/11.jpg">
		<img src="images/ultrasonicGallery/12.jpg">
		<img src="images/ultrasonicGallery/13.jpg">
		<img src="images/ultrasonicGallery/14.jpg">
		<img src="images/ultrasonicGallery/15.jpg">
		<img src="images/ultrasonicGallery/16.jpg">
		<img src="images/ultrasonicGallery/17.jpg">
		<img src="images/ultrasonicGallery/18.jpg">
		<img src="images/ultrasonicGallery/19.jpg">
		<img src="images/ultrasonicGallery/20.jpg">
		<img src="images/ultrasonicGallery/21.jpg">
		<img src="images/ultrasonicGallery/22.jpg">
		<img src="images/ultrasonicGallery/23.jpg">
		<img src="images/ultrasonicGallery/24.jpg">
		<img src="images/ultrasonicGallery/25.jpg">
		<img src="images/ultrasonicGallery/26.jpg">
		<img src="images/ultrasonicGallery/27.jpg">
		<img src="images/ultrasonicGallery/28.jpg">
		<img src="images/ultrasonicGallery/29.jpg">
		<img src="images/ultrasonicGallery/30.jpg">
		<img src="images/ultrasonicGallery/31.jpg">
		<img src="images/ultrasonicGallery/32.jpg">
		<img src="images/ultrasonicGallery/33.jpg">
		<img src="images/ultrasonicGallery/34.jpg">
		<img src="images/ultrasonicGallery/35.jpg">
		<img src="images/ultrasonicGallery/36.jpg">
		<img src="images/ultrasonicGallery/37.jpg">
            </div>        <!-- END OF IMAGE GALLERY -->
                
        
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
