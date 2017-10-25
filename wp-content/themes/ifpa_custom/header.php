<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
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
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });

        //sidebar animation
        function openNav() {
        	document.getElementById("mySidebar").style.width = "250px";
        	document.getElementById("main").style.marginLeft = "250px";
        	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
        	document.getElementById("mySidebar").style.width = "0";
        	document.getElementById("main").style.marginLeft= "0";
        	document.body.style.backgroundColor = "white";
        }
    </script>
</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div id="main" class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">
			
			<!--sidebar menu-->
			<div id="mySidebar" class="sidebar">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">About</a>
				<a href="#">Services</a>
				<a href="#">Clients</a>
				<a href="#">Contact</a>
			</div>

			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
				</a>
			</div>
			<!-- /logo -->

			<!-- nav -->
			<nav class="nav" role="navigation">
				<!--?php html5blank_nav(); ?-->
				<!--sidebar button-->
				<span style="font-size: 20px; cursor: pointer" onclick="openNav()">&#8644; BY ISSUE</span>
				<a href="#">POLICY PAPERS<a/>
				<a href="#">INFOGRAPHICS</a>
				<a href="#">BLOG</a>
				<a href="#">REPORT CARDS</a>
				<a href="#">STUDIES</a>
				<a href="#">ANALYSIS</a>
				<a href="#">SUMMITS</a>
				TODO: SEARCH BAR
			</nav>
			<!-- /nav -->

		</header>
		<!-- /header -->
