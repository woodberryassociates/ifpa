<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<img style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri();
																					echo '/img/banners/tag-';
																					echo rand(1, 3);
																					echo '.png' ?>" />
	<!-- /header img -->

	<!-- section -->
	<section id="split-page-main">
		<div id="split-page-container" class="search-page">

			<h1 class="page-header"><?php echo sprintf(__('%s search results for ', 'html5blank'), $wp_query->found_posts);
															echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>

		</div>
	</section>
	<!-- /section -->

</main>

<?php get_footer(); ?>
