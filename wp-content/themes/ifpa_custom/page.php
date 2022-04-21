<?php get_header(); ?>

<main role="main">
	<!-- content -->
	<section class="single-full">
		<!-- title -->
		<h1 class="page-header"><?php the_title(); ?></h1>

		<!-- article -->
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<br class="clear">
					<?php edit_post_link(); ?>
				</article>
			<?php endwhile;
		else : ?>
			<article>
				<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
			</article>
		<?php endif; ?>
		<!-- /article -->
	</section>
	<!-- /content -->
</main>

<?php get_template_part('recent-posts'); ?>

<?php get_footer(); ?>
