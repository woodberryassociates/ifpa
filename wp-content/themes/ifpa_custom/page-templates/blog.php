<?php /*Template Name: Blog*/ ?>

<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<?php while (have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<!-- content -->
	<section class="single-full">

		<!-- blog page content -->
		<?php while (have_posts()) : the_post();
			the_content();
		endwhile; ?>
		<!-- /blog page content -->

		<?php
		$catObj = get_category_by_slug('blog');
		$catId = $catObj->term_id;
		//$catquery = new WP_Query('cat='.$catId);
		query_posts('cat=' . $catId . '&&posts_per_page=1');
		?>

		<h2 style="margin: 2em 0 1em; text-transform: uppercase; display: inline;">Latest Post</h2>

		<!-- search widget -->
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Search")) : ?>
		<?php endif; ?>
		<!-- /search widget -->

		<?php get_template_part('loop', 'blog') // loop-blog.php
		?>
	</section>
	<!-- /content -->
</main>

<?php get_footer(); ?>