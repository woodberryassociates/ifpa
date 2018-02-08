<script type="text/javascript">
	//TODO: reduce margin-top from article overlay if there is no bg img
</script>

<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="single">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<article id="article-overlay">
				<article id="content">
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><center><?php the_title(); ?></center></a>
					</h1>
					<!-- /post title -->
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