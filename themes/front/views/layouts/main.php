<!DOCTYPE html>
 <html class="no-js"> 
    <head>
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <title>Harxa Fashion Stylelist</title>
      <meta name="description" content=""/>
      <meta name="viewport" content="width=device-width"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/normalize.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/main.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/table.css"/> 
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/style.css"/>   
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/media-queries.css"/>   
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/bootstrap.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/ui.totop.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/colorbox/colorbox.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>css/prettyPhoto.css" type="text/css" media="screen"/>
     <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/favicons/logo32.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/favicons/logo114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/favicons/logo.png"/>
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/favicons/logo57.png"/>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/vendor/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/jquery.easing.1.3.js" ></script>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/vendor/modernizr-2.6.1.min.js"></script>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/jquery.jcarousel.min.js"></script>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/colorbox/jquery.colorbox-min.js"></script>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/cloud_zoom.js"></script>
      <script src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/jquery.prettyPhoto.js" type="text/javascript"></script>
      <script src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/hover-image.js" type="text/javascript"></script>    
      <script src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/jquery.bxSlider.js" type="text/javascript"></script>
      <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/custom.js"></script>
         <script type="text/javascript">
        $(document).ready(function () {
            $("a[data-gal^='prettyPhoto']").prettyPhoto({
                theme: 'facebook'
            });
        });

        function onYouTubePlayerReady(playerId) { 
          ytplayer = document.getElementById("video_overlay"); 
          ytplayer.setVolume(100); 
        } 
      </script> 
    </head>
    <body>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="span3 shipping">
            </div>
            <div class="span9 menu clearfix">
              <ul class="clearfix rr">
                <li>
                  <a href="#">
                    <span class="ir icon my-account"></span>
                    <span>My account</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="ir icon my-wishlist"></span>
                    <span>My wishlist</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'checkout')); ?>">
                    <span class="ir icon checkout"></span>
                    <span>Checkout</span>
                  </a>
                </li>
                <?php
                  if(Yii::app()->user->isGuest):
                  ?>
                  <li>
                    <a href="<?php echo Yii::app()->createUrl('site/login'); ?>">
                      <span class="ir icon log-in"></span>
                      <span>Log in</span>
                    </a>
                  </li>
                  <?php
                  else:
                  ?>
                  <li>
                    <a href="<?php echo Yii::app()->createUrl('user/logout'); ?>">
                      <span class="ir icon log-in"></span>
                      <span>Log Out</span>
                    </a>
                  </li>
                  <?php
                  endif;
                ?>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
      <header class="container">      
        <div class="row">
          <div class="span3 logo-wrapper">
            <a href="index.php" class="logo">
              <span class="icon ir">HARXA FASHION STYLELIST</span>
              <h1>HARXA FASHION STYLELIST</h1>
            </a>
          </div>
          <div class="span5 collections">
            <!--<div><span class="ir arrow up">Up</span></div>
            <div>
              <ul class="content rr">
                <li class="current"><a href="4-product-list.html">Fashion Collection for September 2012</a></li>
                <li><a href="4-product-list.html">Fashion Collection for August 2012</a></li>
                <li><a href="4-product-list.html">Fashion Collection for July 2012</a></li>
              </ul>
            </div>
            <div><span class="ir arrow down">Down</span></div>
            -->
          </div>
          
          <div class="span4">
            <div class="shopping-cart">
              <span class="icon ir">Cart</span>
              <span class="text"><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'cart')); ?>"><span class="title">Shopping Cart</span></a> (<span>0</span> items) - </span>
              <span class="price"><span>$</span><span>0.00</span></span>
            </div>
          </div>
        </div>  

        <div class="row main-menu-wrapper">
          
          <div class="row">
            <ul class="main-menu clearfix rr" id="main-menu">
              <li style="border-left: 1px solid #d6d6d6;"><a href="index.php" class="current">Home</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'profile')); ?>">About Us</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'product')); ?>">Products</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'truckshow')); ?>">Truck Show</a></li>
              <li><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'gallery')); ?>">Gallery</a></li>
              <li style="border-right: 1px solid #d6d6d6;"><a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'contact')); ?>">Contact Us</a></li>
            </ul>
          </div>         
          <!--<div class="span3">
            <input type="text" class="search-box" placeholder="Search..." value=""/>
          </div>
          -->
        </div>
      </header>
    <div style="border-top: 1px solid #ccc; padding-bottom: 5px;"></div>
      <?php
        echo $content;
      ?>
      <footer>
        <div class="top">
          <div class="container">
            <div class="row">
            
              <div class="span6">
                <div class="row-fluid">
                  <form action="#" method="post" class="subscribe-form">
                    <input type="text" class="span4" placeholder="Enter your email for exclusive offers" value=""/>
                    <input type="submit" class="span2" value="Subscribe"/>
                  </form>
                </div>
              </div>
              
              <div class="span6 clearfix social-wrapper">
                   <div class="social"> 
                   <a target="_blank" href="http://facebook.com/harnishdesign">
                        <img title="Facebook" alt="Facebook" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/social/facebook.png"/>
                   </a>
                   <a target="_blank" href="https://twitter.com/#!/harnishdesign">
                        <img title="Twitter" alt="Twitter" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/social/twitter.png"/>
                   </a>
                   <a target="_blank" href="#"> 
                        <img title="Google+" alt="Google+" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/social/googleplus.png"> 
                   </a> 
                   <a target="_blank" href="#"> 
                        <img title="Pinterest" alt="Pinterest" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/social/pinterest.png">
                   </a> 
                    <a target="_blank" href="http://www.vimeo.com/#"> 
                        <img title="Instagram" alt="Instagram" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/social/instagram.png"> 
                   </a> 
                   <a target="_blank" href="#"> 
                        <img title="RSS" alt="RSS" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>img/social/rss.png"> 
                   </a> 
                  
                   </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="middle">
          <div class="container">
            <div class="row footer-menu">
            
              <div class="span3">
                <h2>Customer Service</h2>
                <ul class="rr">
                  <li><a href="#">Help &amp; contact details</a></li>
                  <li><a href="#">Customer FAQ</a></li>
                  <li><a href="#">Privacy &amp; Cookies Policy</a></li>
                  <li><a href="#">Size guides</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
              </div>
              
              <div class="span3">
                <h2>My Account</h2>
                <ul class="rr">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Delivery Information</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
              <div class="span3">
                <h2>Company Info</h2>
                <ul class="rr">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Delivery Information</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
              <div class="span3">
                <h2>Connect with Us</h2>
                <ul class="connect rr">
                  <li>
                    <a href="#" class="clearfix">
                      <span class="ir icon phone">Phone</span>
                      <span class="phone-no">(+84) 123 456 789</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="clearfix">
                      <span class="ir icon mobile">Mobile</span>
                      <span class="phone-no">(+84) 123 456 789</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="clearfix">
                      <span class="ir icon mail">Mail</span>
                      <span>support@menshop.com</span>
                    </a>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="bottom">
          Copyright &copy; 2014. Created by Harxa Fashion Stylelist
        </div>
      </footer>
    
        <script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/plugins.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/main.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl.'/assets/'; ?>js/jquery.ui.totop.js" ></script>
        <script type="text/javascript">
            $(document).ready(function() {
             $().UItoTop({ easingType: 'easeOutQuart' });
          });
        </script>
    </body>
</html>
