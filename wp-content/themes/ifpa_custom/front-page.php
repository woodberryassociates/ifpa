<?php get_header(); ?>

<main role="main">
	<section>

		<?php the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<br class="clear">
		</article>
		<!-- /article -->
	</section>

	<hr style="border: 1px solid #B0D8BC">
	<br>
	<section class="issue-nav">
		<a title="Cost Sharing" href="./cost-sharing"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wallet.png"></a>
		<a title="Coverage Design" href="./coverage-design"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/checklist.png"></a>
		<a title="Value Propositions" href="./value-propositions"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/arrow.png"></a>
	</section>

	<hr style="border: 1px solid #B0D8BC">
	<br>

	<section class="home-block">
		<?php
			$recent_posts = new WP_Query('posts_per_page=6'); /*this number determines how many recent posts display on the home page*/
			while($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
				<section class="home-block-article">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</section>';
		<?php
			endwhile;
			wp_reset_postdata();	
		?>
	</section>
</main>
<?php get_footer(); ?>