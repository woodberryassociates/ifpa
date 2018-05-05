<?php /*Template Name: Blog*/ ?>

<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<!-- section -->
	<section class="single">
		<?php
			$catObj = get_category_by_slug('blog'); 
			$catId = $catObj->term_id;
			//$catquery = new WP_Query('cat='.$catId);
			query_posts('cat='.$catId.'&&posts_per_page=1');
		?>

		<h2 style="margin: 2em 0 1em 2em; text-transform: uppercase;">Latest Post</h2>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<article id="content">

						<!-- post title -->
						<h1>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->

						<!-- post date -->
						<p><?php the_time(get_option('date_format')); ?></p>
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