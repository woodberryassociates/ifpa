<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<!-- section -->
	<section class="single-full">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<article id="content">

					<!-- post title -->
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><center><?php the_title(); ?></center></a>
					</h1>
					<!-- /post title -->

					<!-- post date -->
					<?php the_time(get_option('date_format')); ?>
					<!-- /post date -->

					<!-- post content -->
					<?php the_content(); ?>
					<!-- /post content -->

					<!-- post tags -->
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?>
					<!-- /post tags -->

					<!-- post categories -->
					<p style="text-align: right;"><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); ?></p>
					<!-- /post categories -->

					<p style="text-align: right;"><?php edit_post_link(); ?></p>

					<!-- previous post link -->
					<?php
					$prev_post = get_previous_post('in_same_cat=true');
					if (!empty( $prev_post )): ?>
						<p style="padding-top: 1em; text-align: right;"><a href="<?php echo get_permalink($prev_post->ID) ?>"><button>Previous Post</button></a></p>
					<?php endif ?>
					<!-- /previous post link -->
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