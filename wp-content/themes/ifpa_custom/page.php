<?php get_header(); ?>

<main role="main">
	<!-- content -->
	<section class="single-full">
		<!-- article -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
				ob_start();
				the_content();
				$content = ob_get_clean();
				?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<article id="content">

						<!-- page title -->
						<h1 class="page-header" style="padding: 0; line-height: 1em;"><?php the_title(); ?></h1>
						<!-- /page title -->

						<!-- page content -->
						<?php the_content(); ?>
						<!-- /page content -->

						<p style="text-align: right;"><?php edit_post_link(); ?></p>
					</article>
				</article>
				<!-- /article -->
			<?php endwhile; ?>
		<?php else : ?>

			<!-- article -->
			<article id="content">
				<h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>
			</article>
			<!-- /article -->

		<?php endif; ?>
		<!-- /article -->
	</section>
	<!-- /content -->
</main>

<?php get_template_part('recent-posts'); ?>

<?php get_footer(); ?>
