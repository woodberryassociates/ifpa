<?php /*Template Name: Blog Aggregate*/ ?>

<?php get_header(); ?>

<main role="main">
	
	<!-- header img -->
	<img src="<?php echo get_template_directory_uri(); ?>/img/headers/Blogs.png"/>
	<!-- /header img -->

	<section>
		<?php the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
		<!-- /article -->

	</section>

	<section id="split-page-main" class="gray">
		<div class="single-full no-margin">
			<h1 class="page-header" style="padding: 0;">Recent Blog Posts</h1>
			<?php
				$catObj = get_category_by_slug('blog'); 
				$catId = $catObj->term_id;
				query_posts('cat='.$catId);
				get_template_part('loop');
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>