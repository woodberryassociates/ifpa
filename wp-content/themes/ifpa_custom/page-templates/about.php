<?php /*Template Name: About Us*/ ?>

<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<?php while ( have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<!-- article -->
	<?php while ( have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<section id="split-page-main">
			<section id="split-page-container" class="gray" style="margin: 30px auto; padding: 0 20px;">
				<h1 class="page-header" style="text-transform: none; position: relative; right:  42%;">IfPA LEADERSHIP</h1>
				<?php			
					$custom_fields = get_post_custom();
					$board_members = $custom_fields['board'];
					// drop the divider for the last bio
					$last_member = end($board_members);

					foreach ( $board_members as $key => $value ) {
						echo  $value;
						if ($value != $last_member)
							echo '<div class="divider" style="width: 100%; height: 1px;"></div>';
					}
				?>
			</section>
		</section>
	<?php endwhile; ?>
	<!-- /article -->

</main>

<!--recent blog posts-->
<section id="recent-blog-posts">
	<h1 style="padding-left: 6vw; font-weight: bold; text-transform: uppercase; color: white;">Recent Blog Posts</h1>
</section>

<section class="home-block">
	<?php
		$catObj = get_category_by_slug('blog'); 
		$catId = $catObj->term_id;
		$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=3');
		while($recent_posts->have_posts()) : $recent_posts->the_post();
	?>
			<section class="home-block-article">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<a class="home-block-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<a class="home-block-date" href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
			</section>
	<?php
		endwhile;
		wp_reset_postdata();	
	?>
</section>
<!--/recent blog posts-->
			
<?php get_footer(); ?>