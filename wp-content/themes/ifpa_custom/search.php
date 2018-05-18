<?php get_header(); ?>

	<main role="main">
		<!-- header img -->
		<img style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); echo '/img/headers/tag-'; echo rand(1, 3); echo '.png'?>"/>
		<!-- /header img -->

		<!-- section -->
		<section id="split-page-main">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<div id="split-page-container" class="search-page">
				<?php $articleCount = 0; ?>
				<?php include(locate_template('loop.php', false, false)); //necessary to pass articleCount/frontPage variable to loop ?>
				<?php include(locate_template('pagination.php', false, false)); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
