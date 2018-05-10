<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<!-- section -->
	<section class="single-full">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php
				ob_start();
				the_content();
				$content = ob_get_clean();
			?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<article id="content">

					<!-- post title -->
					<h1 class="page-header" style="padding: 0; line-height: 1em;"><?php the_title(); ?></h1>
					<!-- /post title -->

					<!-- post date -->
					<h2 class="thumbnail-article-date" style=""><?php the_time('F j, Y'); ?></h2>
					<!-- /post date -->

					<!-- post content -->
					<?php
						the_content();
					?>
					<!-- /post content -->

					<!-- post tags -->
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?>
					<!-- /post tags -->

					<!-- post categories -->
					<p class="post-text" style="padding: 0; text-align: right;"><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); ?></p>
					<!-- /post categories -->

					<p style="text-align: right;"><?php edit_post_link(); ?></p>

					<!-- next & previous post link -->
					<?php
					$next_post = get_next_post('in_same_term=true');
					$prev_post = get_previous_post('in_same_cat=true');
					if (!empty( $next_post )): ?>
						<p style="padding-top: 1em; float: left;"><a href="<?php echo get_permalink($next_post->ID) ?>"><button style="color: #282f5d;">&#9664; Next Post</button></a></p>
					<?php endif ?>
					<?php if (!empty( $prev_post )): ?>
						<p style="padding-top: 1em; text-align: right;"><a href="<?php echo get_permalink($prev_post->ID) ?>"><button style="color: #282f5d;">Previous Post &#9658;</button></a></p>
					<?php endif ?>
					<!-- /next & previous post link -->
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