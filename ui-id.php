<?php 
  
  /** Template Name: ID-UI-1 */
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
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/nexus/component.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/nexus/demo.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/swiper/swiper.css">
<link rel="stylesheet" type="text/css" href="<?php echo $plugin_url  ?>/nexus/nexus.css">
<script src="<?php echo $plugin_url  ?>/js/modernizr.custom.js"></script>
</head>

<body <?php body_class('id-ui'); ?>>






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




  
  
            <div class="gn-scroller">















  <?php //include 'template-sitenav.php'; ?>






  <?php //include 'template-tagcloud.php'; ?>




  <ul id="cat_filters" class="gn-menu">
 
   <li><a href="#" class='gn-icon gn-icon-archive' data-filter="*">View Everything</a></li>
           
              
 <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-meat">Meat</a></li>

              <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-dairy">Dairy</a></li>
            
            <ul class="gn-submenu">
						
									
             
             <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-bakery">Bakery</a></li>
           
             <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-chefs-tools">Chefs Tools</a></li>
        
 <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-dry">Dry</a></li>      
       
     <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-fish">Fish</a>
             
   

  <li><a href="#" class='gn-icon gn-icon-article' data-filter=".category-fruit-and-veg">Fruit and Veg</a></li>

 

  
  </ul>
  
  
</ul>
              
              
             
             
              





  
  
  
    



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
 
  



      </ul>

<!-- header>
				<h1>Harrington Prototype <span>The next version of <a href="http://www.google.com/nexus/index.html">The Harringtons</a> website</span>We are a group of creative web designers and web developers. We make unique web pages and brilliant web apps. We are expert in CSS3, HTML5, jQuery & WordPress. We love clear, modern & fancy web design.</h1>	
			</header -->
            
            

            
      <?php include 'ui-id-3dgrid.php'; ?>
     




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