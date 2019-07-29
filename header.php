<?php
/**
 * @package our
 **/?>
 <!DOCTYPE html>
 <html "<?php language_attributes(); ?>">

 <head>
 	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107491827-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-107491827-1');
	</script>
 	<meta charset="<?php bloginfo( 'charset' ); ?>">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="profile" href="http://gmpg.org/xfn/11">
 	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 	<!-- Custom CDN(s) -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 	<!-- Adds .box for same height columns -->
 	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
 	<!-- Adds CSS for slick slider -->
 	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
 	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
 	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
 	<!-- Bootstrap Dropdown Hover CSS -->
 	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
 	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
 	<!-- Adds CSS for fancybox -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
 	<!-- Adds CSS for animate -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
 	<!-- Custom Font(s) -->
 	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
 	<!-- Custom Script(s) -->
 	<script src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/noframework.waypoints.min.js"></script>
 	<!-- Bootstrap Dropdown Hover JS -->
 	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdownhover.min.js"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
 	<script>
    	new WOW().init();
    </script>
 	<!-- Adds JS for slick slider -->
 	<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
 	<!-- Adds JS for fancybox -->
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
 	<script type='text/javascript'>
	(function (d, t) {
	 var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	 bh.type = 'text/javascript';
	 bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=wftzdxumkyxdsds2xzad7g';
	 s.parentNode.insertBefore(bh, s);
	 })(document, 'script');
	</script>
 	<?php wp_head(); ?>
 	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/9c475d488eefdae5d8942cf9b/9e7c6eab3df38d144e9b16145.js");</script>
 </head>

 <body <?php body_class(); ?>>
 	<a href="#0" class="btt-top">Top</a>
 	<div class="navigation-section">
 		<div class="top-bar">
 			<div class="inner-container">
 				<div class="logo item">
 					<a href="<?php echo get_home_url(); ?>"><img src="/wp-content/uploads/2019/02/header-logo.png"></a>
 					<h2>Proudly serving the citizens of Charlotte, Collier, Glades, Hendry and Lee Counties</h2>
 				</div>
 				<div class="item-2">
 					<h4 class="white">OFFICE OF THE STATE ATTORNEY</h4>
 					<h6 class="white">TWENTIETH JUDICIAL CIRCUIT</h6>
 					<h5 class="white">AMIRA D. FOX | STATE ATTORNEY</h5>
 				</div>
 			</div>
 		</div>
 		<div class="container-fluid nav-menu">
 				<div class="inner-container">
 					<div class="row">
 						<div class="col-xs-12 desktop-navbar">
 							<div class="toggle-section hidden-lg">
 								<button type="button" class="navbar-toggle collapsed">
 									<span class="sr-only">Toggle navigation</span>
 									<span class="icon-bar top-bar"></span>
 									<span class="icon-bar middle-bar"></span>
 									<span class="icon-bar bottom-bar"></span>
 								</button>
 							</div>
 							<nav id="primary-bootstrap-menu" class="navbar navbar-default navbar-desktop" data-hover="dropdown" data-animations="" role="navigation">
 								<?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 3, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
 							</nav>
 						</div>
 						<div class="col-xs-12 mobile-navbar">
 							<nav id="primary-bootstrap-menu" class="navbar navbar-default navbar-mobile" role="navigation">
 								<?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 3, 'container' => 'div', 'container_class' => 'navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
 							</nav>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>