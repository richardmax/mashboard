<?php 
  
  /** Template Name: Mashboard */
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
<html <?php language_attributes(); ?>>
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
<script src="<?php echo $plugin_url  ?>/js/modernizr.custom.js"></script>
</head>

<body <?php body_class(); ?>>

<!-- Wrap all page content here -->
  <div id="wrap">
    <header class="masthead">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 header-col">
            <h1>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php bloginfo( 'name' ); ?>
                </a>
                <p class="lead">
                  <?php bloginfo( 'description' ); ?>
                </p>
            </h1>
          </div>
          <div class="col-sm-6">
            <div class="pull-right author-main hidden-xs"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="author-button" data-toggle="dropdown">
              <h2><!--i class="glyphicon glyphicon-cog"></i -->Return to
                <?php bloginfo( 'name' ); ?>
              </h2>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-custom navbar-inverse navbar-static-top affix-top" id="nav">
        <div class="container-fluid">
          <div class="navbar-header"> 
            <!-- button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button --> 
            <p class="navbar-brand">
            <?php bloginfo( 'name' ); ?>
        
            
            </p>
          </div>
          
            <!-- ?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 3,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => '_bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav pull-right',
                // 'menu_class'        => 'nav nav-justified',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            ));
            ? -->
      
      <?php include 'template-filters.php'; ?>
     
	</nav><!-- end .navbar -->
    
    
   
      <?php include 'template-3dgrid.php'; ?>
     
    
      
    </div>
    <!--/wrap-->
    
    <div id="footer">
      <div class="container">
        <p class="text-muted">Built using <a href="#">Mashboard</a></p>
      </div>
    </div>
    <ul class="nav pull-right scroll-top">
      <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
    </ul>
    
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/bootstrap-switch.min.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/classie.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/helper.js"></script> 
    <script src="<?php echo $plugin_url  ?>/js/grid3d.js"></script> 
  	<script src="<?php echo $plugin_url  ?>/js/isotope.pkgd.js"></script> 
	<script src="<?php echo $plugin_url  ?>/js/packery-mode.pkgd.min.js"></script> 
    <script type="text/javascript" src="<?php echo $plugin_url  ?>/js/init.js"></script> 
  
    
  </div>
</div>


    
</body>
</html>