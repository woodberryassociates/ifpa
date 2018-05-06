<?php get_header(); ?>

	<main role="main">
		<!-- header img -->
		<div style="margin-bottom: 20px; width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
		<!-- /header img -->

		<!-- section -->
		<section id="split-page-main">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<div id="split-page-container" class="search-page">
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
