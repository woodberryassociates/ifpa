<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>
	<script>
		var opened = false;
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
    </script>
    <!-- custom JS scripts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/nav.js"></script>
</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div id="main" class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">
			
			<!--sidebar menu-->
			<!--div id="mySidebar" class="sidebar">
				<a title="Cost Sharing" href="./cost-sharing"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wallet.png"></a>
				<a title="Coverage Design" href="./coverage-design"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/checklist.png"></a>
				<a title="Value Propositions" href="./value-propositions"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/arrow.png"></a>
			</div-->

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->

			<!-- nav -->
			<!--nav class="nav" role="navigation" id="by-issue"><a onclick="animNav()">&#8644; BY ISSUE</a></nav-->
			<nav role="navigation"><?php wp_nav_menu(array('theme_location' => 'header-menu')); ?></nav>
			<!-- /nav -->

		</header>
		<!-- /header -->