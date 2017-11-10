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
        	document.getElementById("mySidebar").style.width = "250px";
        	document.getElementById("main").style.marginLeft = "250px";
        	opened = true;
        	//document.getElementsByClassName("wrapper").style.width="95%";
        	//document.body.style.backgroundColor = "rgba(30,42,94,0.4)";
        }

        function closeNav() {
        	document.getElementById("mySidebar").style.width = "0";
        	document.getElementById("main").style.marginLeft = "0";
        	opened = false;
        	//document.getElementsByClassName("wrapper").style.margin="0 auto"; //TODO: margin property doesn't update correctly
        	//document.body.style.backgroundColor = "rgba(30,42,94,0)";
        }

        //highlight nav boxes when mousing over nav menu text
        function mouseoverNavText(id){
        	//var myPara = document.getElementById(id);
    		//myPara.style.transitionDuration = '0.3s';
    		document.getElementById(id).style.backgroundColor = 'white';
    	}

    	function mouseoutNavText(id){
    		//var myPara = document.getElementById(id);
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
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./cost-sharing">Cost Sharing</a>
				<a href="./coverage-design">Coverage Design</a>
				<a href="./value-propositions">Value Propositions</a>
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
			<!--?php html5blank_nav(); ?-->
			<!--sidebar button-->
			<nav class="nav-container">
				<nav class="nav" role="navigation" id="by-issue"><a onmouseover="mouseoverNavText('by-issue')" onmouseout="mouseoutNavText('by-issue')" onclick="animNav()">&#8644; BY ISSUE</a></nav>
				<nav class="nav" role="navigation" id="policy-papers"><a href="./policy-papers" onmouseover="mouseoverNavText('policy-papers')" onmouseout="mouseoutNavText('policy-papers')">POLICY PAPERS</a></nav>
				<nav class="nav" role="navigation" id="infographics"><a href="./infographics" onmouseover="mouseoverNavText('infographics')" onmouseout="mouseoutNavText('infographics')">INFOGRAPHICS</a></nav>
				<nav class="nav" role="navigation" id="blog"><a href="./blog" onmouseover="mouseoverNavText('blog')"onmouseout="mouseoutNavText('blog')">BLOG</a></nav>
				<nav class="nav" role="navigation" id="report-cards"><a href="./report-cards" onmouseover="mouseoverNavText('report-cards')" onmouseout="mouseoutNavText('report-cards')">REPORT CARDS</a></nav>
				<nav class="nav" role="navigation" id="studies"><a href="./studies" onmouseover="mouseoverNavText('studies')" onmouseout="mouseoutNavText('studies')">STUDIES</a></nav>
				<nav class="nav" role="navigation" id="analysis"><a href="./analysis" onmouseover="mouseoverNavText('analysis')" onmouseout="mouseoutNavText('analysis')">ANALYSIS</a></nav>
				<nav class="nav" role="navigation" id="summits"><a href="./summits" onmouseover="mouseoverNavText('summits')" onmouseout="mouseoutNavText('summits')">SUMMITS</a></nav>
				<nav class="nav" role="navigation" style="float: right;"><?php wp_nav_menu(array('theme_location' => 'header-menu')); ?></nav>
			</nav>
			<!-- /nav -->

		</header>
		<!-- /header -->