<?php get_header(); ?>

<main role="main">
	<!-- content -->
	<section class="single-full">
		<h1 class="page-header"><?php the_title(); ?></h1>
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<!--?php comments_template( '', true ); // Remove if you don't want comments ?-->
					<br class="clear">
					<?php edit_post_link(); ?>
				</article>
				<!-- /article -->
			<?php endwhile;
		else : ?>
			<!-- article -->
			<article>
				<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
	</section>
	<!-- /content -->
</main>

<?php get_template_part('recent-posts'); ?>

<?php get_footer(); ?>
