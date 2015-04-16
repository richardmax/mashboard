<?php 
  
  /** Template Name: Nexus */
  $plugin_url = site_url() . '/wp-content/plugins/mashboard/'; 
  
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> class=" js no-touch">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<meta name="generator" content="Bootply">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo $plugin_url  ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo $plugin_url  ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $plugin_url  ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $plugin_url  ?>/images/apple-touch-icon-114x114.png">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/css/normalize.css">
<link href="<?php echo $plugin_url  ?>/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/css/bootstrap-switch.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/css/max.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/css/item.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/nexus/component.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/nexus/demo.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/swiper/swiper.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/nexus/nexus.css">
<script src="<?php echo $plugin_url  ?>/js/modernizr.custom.js"></script>
</head>

<body <?php body_class(); ?>>






  <div class="container nexus">




      <ul id="gn-menu" class="gn-menu-main">



        <li class="gn-trigger">
          <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
          <nav class="gn-menu-wrapper">










     
      <?php //include 'template-swiper.php'; ?>

<!--button id='testbut'> dhsjashjsad</button>
<button id='testbut'> dhsjashjsad</button>
<button id='testbut'> dhsjashjsad</button>
<button id='testbut'> dhsjashjsad</button>
<button id='testbut'> dhsjashjsad</button -->

    
                 

           <li id="form-uiA" class="top-nav-ui">
     

        <div class="btn-group item-sizes-toggle" data-toggle="buttons-radio" data-toggle-name="itemSize">
                  <button class="btn thumbnail-button active" value="default"><i class="icon-ellipsis-horizontal icon-2x"></i><br>Default</button>
                  
                   <button class="btn thumbnail-button" value="thumbnail"><i class="icon-ellipsis-horizontal icon-2x"></i><br>Thumb</button>
                  <button class="btn small-button" value="small"><i class="icon-th icon-2x"></i><br>Small</button>
                  <button class="btn medium-button" value="medium"><i class="icon-th-large icon-2x"></i><br>Medium</button>
                  <button class="btn large-button" value="large"><i class="icon-sign-blank icon-2x"></i><br>Large</button>  
                </div>
 
     

          <label class='switch switch-twitter'>
            <input type="checkbox" checked="" value=".twitter">
            <span></span>
          </label>
         
          <label class='switch switch-wordpress'>
            <input type="checkbox" checked="" value=".wordpress">
            <span></span>
          </label>
          <label class="switch switch-instagram">
            <input type="checkbox" checked="" value=".instagram">
            <span></span>
          </label>
          <!-- span class="help-block"></span> 
          <p id="output"></p -->
        
     
  </li>
  
  
            <div class="gn-scroller">















  <?php //include 'template-sitenav.php'; ?>






  <?php //include 'template-tagcloud.php'; ?>



              <!-- ul class="gn-menu">
              
              
              
             
             
              
                <li class="gn-search-item">
                  <input placeholder="Search" type="search" class="gn-search">
                  <a class="gn-icon gn-icon-search"><span>Search</span></a>
                </li>
                <li>
                  <a class="gn-icon gn-icon-download">Downloads</a>
                  <ul class="gn-submenu">
                    <li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
                    <li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
                  </ul>
                </li>
                <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                <li><a class="gn-icon gn-icon-help">Help</a></li>
                <li>
                  <a class="gn-icon gn-icon-archive">Archives</a>
                  <ul class="gn-submenu">
                    <li><a class="gn-icon gn-icon-article">Articles</a></li>
                    <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                    <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                  </ul>
                </li>
              </ul -->



  <?php include 'template-catfilters.php'; ?>


    



            </div><!-- /gn-scroller -->
          </nav>
        </li>
        <li class='rm-logo'><a href="http://ricmax.com">Richard Max</a></li>
     
		
   
     <!-- li><a class="codrops-icon codrops-icon-drop"><span></span></a></li -->
        
        <div class="pull-right author-main"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="author-button" data-toggle="dropdown">
              <h2><!--i class="glyphicon glyphicon-cog"></i -->Return to
                <?php bloginfo( 'name' ); ?>
              </h2>
              </a> 
            </div>
 
  
           <li id="form-ui" class="top-nav-ui">
     
<!-- button class="shuffle-button">Shuffle</button -->
        
                  <div class="btn-group item-sizes-toggle" data-toggle="buttons-radio" data-toggle-name="itemSize">
                  <button class="btn thumbnail-button active" value="default"><i class="icon-ellipsis-horizontal icon-2x"></i><br>Default</button>
                  
                   <button class="btn thumbnail-button" value="thumbnail"><i class="icon-ellipsis-horizontal icon-2x"></i><br>Thumb</button>
                  <button class="btn small-button" value="small"><i class="icon-th icon-2x"></i><br>Small</button>
                  <button class="btn medium-button" value="medium"><i class="icon-th-large icon-2x"></i><br>Medium</button>
                  <button class="btn large-button" value="large"><i class="icon-sign-blank icon-2x"></i><br>Large</button>  
                </div>

 
     

          <label class='switch switch-twitter'>
            <input type="checkbox" checked="" value=".twitter">
            <span></span>
          </label>
         
          <label class='switch switch-wordpress'>
            <input type="checkbox" checked="" value=".wordpress">
            <span></span>
          </label>
          <label class="switch switch-instagram">
            <input type="checkbox" checked="" value=".instagram">
            <span></span>
          </label>
          <!-- span class="help-block"></span> 
          <p id="output"></p -->
        
     
  </li>

<div class="ls-shadow nexus-shadow"><img src="<?php echo $plugin_url; ?>/images/shadow.png"></div>

      </ul>

<!-- header>
				<h1>Harrington Prototype <span>The next version of <a href="http://www.google.com/nexus/index.html">The Harringtons</a> website</span>We are a group of creative web designers and web developers. We make unique web pages and brilliant web apps. We are expert in CSS3, HTML5, jQuery & WordPress. We love clear, modern & fancy web design.</h1>	
			</header -->
            
            
                  
      <?php include 'template-animation.php'; ?>
            
      <?php include 'template-3dgrid.php'; ?>
     




    </div><!-- /container -->




    

 
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/bootstrap-switch.min.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/classie.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/helper.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/grid3d.js"></script> 
  	<script src="<?php echo $plugin_url  ?>/js/isotope.pkgd.js"></script> 
	<script src="<?php echo $plugin_url  ?>/js/packery-mode.pkgd.min.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/init.js"></script> 
    <script src="<?php echo $plugin_url  ?>/swiper/idangerous.swiper.min.js"></script> 
    <!-- script src="<?php echo $plugin_url  ?>/swiper/idangerous.swiper.scrollbar-2.1.js"></script --> 
    
  
    
  </div>
</div>





    <script src="<?php echo $plugin_url  ?>/nexus/gnmenu.js"></script>
    <script>
      new gnMenu( document.getElementById( 'gn-menu' ) );



     
  var swiperParent = new Swiper('.swiper-parent',{
    pagination: '.pagination-parent',
    paginationClickable: true,
    loop: true,
    slidesPerView: 3
  })
  var swiperNested1 = new Swiper('.swiper-nested',{
    mode: 'vertical',
    pagination: '.pagination-nested',
    paginationClickable: true,
    slidesPerView: 2
  })
 
    </script>


    
</body>
</html>