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

	<section>
		<?php
			$recent_posts = new WP_Query('posts_per_page=6'); /*this number determines how many recent posts display on the home page*/
			query_posts($recent_posts);
			get_template_part('loop');
			/*while($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
				<section class="home-block-article">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</section>
		<?php
			endwhile;*/
			wp_reset_postdata();	
		?>
	</section>
</main>
<?php get_footer(); ?>