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

		<!-- Google Map stuff -->
		function initMap() {
		  var myLatLng = {lat: -25.363, lng: 131.044};

		  var map = new google.maps.Map(document.getElementById('map'), {
		    zoom: 4,
		    center: myLatLng
		  });

		  var marker = new google.maps.Marker({
		    position: myLatLng,
		    map: map,
		    title: 'Hello World!'
		  });
		}
		<!--End of Google Map stuff -->
    </script>
  
</head>

<body>
		<!-- Facebook stuff -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		  <div id="main">
		<!-- End of Facebook stuff -->

    <header>
      <div id="logo">
        <div id="logo_text">
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li class="selected"><a href="index.html">Home</a></li>
            <li><a href='dyno.html'>Dyno</a></li>
            <li><a href="vapour.html">Vapour Blasting</a></li>
            <li><a href="ultrasoniccleaning.html">Ultrasonic Cleaning</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
<!--SLIDER SLIDER SLIDER-->
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 450px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('images/header/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                <!--IMAGES ON SLIDER-->
                    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 450px; overflow: hidden;">
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="images/header/img1.jpg" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="images/header/img2.jpg" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="images/header/img3.jpg" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="images/header/img4.jpg" />
                        </div>
                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="images/header/img5.jpg" />
                        </div>
<!--                        <div data-p="112.50" style="display: none;">
                            <img data-u="image" src="images/header/img6.png" />
                        </div>-->
                    </div>
                <!--/END OF IMAGES ON SLIDER-->
                <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                    <div data-u="prototype" style="width:16px;height:16px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
            </div>
<!--END OF SLIDER END OF SLIDER-->
      
      
      
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
        <h1>Contact Us</h1>
        <!--<form id="contact" action="contact.html" method="post">-->
                    <div class="form_settings">
                      <p><span>Name</span><input class="contact" type="text" name="your_name" value="" /></p>
                      <p><span>Telephone</span><input class="contact" type="text" name="telephone" value="" /></p>
                      <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="" /></p>
                      <p><span>Enquiry</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
                      <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
                    </div>
        <!--</form>-->

<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d19444.03760578268!2d-2.072617!3d52.469997!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d52.4711991!2d-2.0765651!5e0!3m2!1sen!2suk!4v1454332699333" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
        
        <div id="sidebar_container">
            <!--
            <div class="sidebar">
              <h3>Special Offers</h3>
              <h4>Special Offer title</h4>
              <p>Description of special offer here.</p>
            </div>
            -->
	    <div class="sidebar">
              <h3>Contact Us</h3>
              <p>If you have a query.<br/> Call us on <strong>01384 633759</strong><br/> 
                                           Email us at <a href="#">kevprojex@yahoo.co.uk</a><br/> 
                                           Complete our <a href="contact.html">contact form</a>.</p>
            </div>

		<div class="fb-page" data-href="https://www.facebook.com/projecmotorcycleengineers/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/projecmotorcycleengineers/"><a href="https://www.facebook.com/projecmotorcycleengineers/">Projex Motorcycle Engineers</a></blockquote></div></div>
      
	</div>
    </div>



    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
        <div id="imageBar">
        </div>
        
        <p><a href="index.html">Home</a> | <a href="dyno.html">Dyno</a> | <a href="vapour.html">Vapour Blasting</a> | <a href="ultrasoniccleaning.html">Ultrasonic Cleaning</a> | <a href="gallery.html">Gallery</a> | <a href="contact.php">Contact Us</a></p>
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
