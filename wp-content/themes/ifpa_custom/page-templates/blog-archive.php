<?php /*Template Name: Blog Archive*/ ?>

<?php get_header(); ?>

<main role="main">
	
	<!-- header img -->
	<?php while ( have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<section id="split-page-main">

		<div id="split-page-container" class="search-page">

			<!-- article -->
			<?php while ( have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- /article -->

			<h1 class="page-header" style="padding: 0;">Blog Posts</h1>

			<?php
				$catObj = get_category_by_slug('blog'); 
				$catId = $catObj->term_id;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'cat' => $catId,
					'paged' => $paged
				);

				$wp_query = new WP_Query($args);
				get_template_part('loop');
				get_template_part('pagination');
			?>

		</div>

	</section>
	
</main>

<?php get_footer(); ?>