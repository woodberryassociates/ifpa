<?php /*Template Name: Summits*/ ?>

<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<!-- section -->
	<section class="single-full">
		<?php
			$catObj = get_category_by_slug('summits'); 
			$catId = $catObj->term_id;
			//$catquery = new WP_Query('cat='.$catId);
			query_posts('cat='.$catId);
		?>

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
					<p style="padding-top: 1em;"><?php the_time(get_option('date_format')); ?></p>
					<!-- /post date -->

					<!-- post content -->
					<p style="padding-top: 1em;"><?php the_content(); ?></p>
					<!-- /post content -->

					<!-- post tags -->
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?>
					<!-- /post tags -->

					<!-- post categories -->
					<p style="text-align: right;"><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); ?></p>
					<!-- /post categories -->

					<p style="text-align: right;"><?php edit_post_link(); ?></p>
				</article>
			</article>
			<!-- /article -->

			<!-- adding breaks between articles -->
			<?php $articleCount++; ?>
			<?php if($articleCount <= get_option('posts_per_page' /*set in admin under settings -> reading*/)): ?>
				<div style="margin-bottom: 20px; height: 1px; background-color: #707070"></div>
			<?php endif; ?>
			<!-- /adding breaks between articles -->

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