<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Institute for Patient Access</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<!--link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<script>
	var Globals = <?php echo json_encode(array(
    	'active_user_id' => $active_user->id,
	    'token' => $token,
	    'hash' => $hash,
		)); ?>;
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div id="main" class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">

				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->

				<!-- nav -->

				<!-- dropdown menu -->
				<nav class="nav" id="menu-icon" onclick="dropdown()">&#9776;</nav>
				<?php wp_nav_menu(array('theme_location' => 'sidebar-menu')); ?>
				<!-- /dropdown menu -->

				<div style="display: flex; flex-direction: row; align-items: center;">
					<nav style="" role="navigation"><?php wp_nav_menu(array('theme_location' => 'header-menu')); ?></nav>
				</div>
				<!-- /nav -->
			
		</header>
		<!-- /header -->