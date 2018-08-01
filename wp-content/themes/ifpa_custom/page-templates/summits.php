<?php /*Template Name: Summits*/ ?>

<?php get_header(); ?>

<main role="main">
	
	<!-- header img -->
	<?php while ( have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<!-- section -->
	<section class="single-full">
		
		<!-- article -->
		<?php while ( have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- /article -->

		<?php
			$catObj = get_category_by_slug('summits'); 
			$catId = $catObj->term_id;
			//$catquery = new WP_Query('cat='.$catId);
			query_posts('cat='.$catId);
		?>

		<?php $articleCount = 0; ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<article id="content">

					<!-- post thumbnail -->
					<a class="summits-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
					</a>
					<!-- /post thumbnail -->

					<!-- post title -->
					<h1>
						<a class="page-header no-padding" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

					<!-- post date -->
					<h2 class="thumbnail-article-date no-padding" style="padding-top: 1em;"><?php the_time(get_option('date_format')); ?></h2>
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
				</article>
			</article>
			<!-- /article -->

			<!-- breaks between articles -->
			<?php $articleCount++; ?>
			<?php
				/*posts_per_page set in admin under settings -> reading,
				  get_category_by_slug('SLUG')->count is number of articles in specific category*/
				if($articleCount < get_option('posts_per_page')  && $articleCount < get_category_by_slug('summits')->count): ?>
					<div class="divider" style="margin-bottom: 20px; height: 1px;"></div>
			<?php endif; ?>
			<!-- /breaks between articles -->

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

<?php get_template_part('recent-posts'); ?>

<?php get_footer(); ?>