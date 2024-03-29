<?php get_header(); ?>

<main role="main">

	<?php
	global $wp;
	$url = home_url($wp->request);
	$results = explode('/', $url);
	$tag_path = end($results);
	?>

	<!-- header img -->
	<img style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri();
																					echo '/img/banners/' . $tag_path . '-ifpa.png' ?>" />
	<!-- /header img -->

	<!-- section -->
	<section id="split-page-main">

		<div id="split-page-container" class="search-page">

			<!-- tag -->
			<h1 class="page-header no-padding"><?php single_tag_title(); ?></h1>
			<!-- /tag -->

			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</div>

	</section>
	<!-- /section -->

</main>

<?php get_footer(); ?>
