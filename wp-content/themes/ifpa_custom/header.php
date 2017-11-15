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
		var opened = false;
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });

        //sidebar animation
        function animNav() {
        	var sidebar = document.getElementById("mySidebar");
        	if (!opened) {
        		openNav();
        	} else {
        		closeNav();
        	}
        }

        function openNav() {
        	document.getElementById("mySidebar").style.width = "75px";
        	document.getElementById("main").style.marginLeft = "75px";
        	opened = true;
        }

        function closeNav() {
        	document.getElementById("mySidebar").style.width = "0";
        	document.getElementById("main").style.marginLeft = "0";
        	opened = false;
        }

        //highlight "BY ISSUE" when mousing over text
        function mouseoverNavText(id){
    		document.getElementById(id).style.backgroundColor = 'white';
    	}

    	function mouseoutNavText(id){
    		document.getElementById(id).style.backgroundColor = '';
    	}

    	//TODO: keep the nav box for the current page highlighted
    	/*function highlightPage(){
    		alert(this.href);
    		alert(this.href.substr(this.href.lastIndexOf('/') + 1));
    		//document.getElementById("btn1").classList.toggle("red”,  “italics");
    	}*/
    </script>
</head>

<body <?php body_class(); ?>>

	<!-- wrapper -->
	<div id="main" class="wrapper">

		<!-- header -->
		<header class="header clear" role="banner">
			
			<!--sidebar menu-->
			<div id="mySidebar" class="sidebar">
				<a title="Cost Sharing" href="./cost-sharing"><img src="//localhost/ifpa/wp-content/themes/ifpa_custom/img/icons/wallet.png"></a>
				<a title="Coverage Design" href="./coverage-design"><img src="//localhost/ifpa/wp-content/themes/ifpa_custom/img/icons/checklist.png"></a>
				<a title="Value Propositions" href="./value-propositions"><img src="//localhost/ifpa/wp-content/themes/ifpa_custom/img/icons/arrow.png"></a>
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
			<nav class="nav" role="navigation" id="by-issue"><a onmouseover="mouseoverNavText('by-issue')" onmouseout="mouseoutNavText('by-issue')" onclick="animNav()">&#8644; BY ISSUE</a></nav>
			<nav role="navigation"><?php wp_nav_menu(array('theme_location' => 'header-menu')); ?></nav>
			<!-- /nav -->

		</header>
		<!-- /header -->