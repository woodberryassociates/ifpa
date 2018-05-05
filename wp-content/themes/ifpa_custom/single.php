<script type="text/javascript">
	//TODO: reduce margin-top from article overlay if there is no bg img
</script>

<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: #4A98BE;"></div>
	<!-- /header img -->

	<!-- section -->
	<section class="single">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<article id="article-overlay">
					<article id="content">

						<!-- post title -->
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><center><?php the_title(); ?></center></a>
						</h1>
						<!-- /post title -->

						<!-- post date -->
						<?php the_time(get_option('date_format')); ?>
						<!-- /post date -->

						&nbsp;
						<?php the_content(); ?>
						&nbsp;
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?>
						&nbsp;
						<p style="text-align: right;"><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); ?></p>
						<p style="text-align: right;"><?php edit_post_link(); ?></p>	
					</article>
				</article>
			</article>
			<!-- /article -->
		<?php endwhile; ?>
		<?php else: ?>

			<!-- article -->
			<article id="content">
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php get_footer(); ?>