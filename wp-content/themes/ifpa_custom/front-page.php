<?php get_header(); ?>

<main role="main">
	<section>

		<?php the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
		<!-- /article -->
	</section>

	<div id="split-page-main">
		<div style="height: 150px;"></div>
		<div id="split-page-container">
			<section id="split-page-left">
				<h1 style="padding-bottom: 10px">What's New</h1>
				<?php
					query_posts('posts_per_page=4');
					get_template_part('loop');
					/*$recent_posts = new WP_Query('posts_per_page=3'); /*this number determines how many recent posts display on the home page*/
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
			<section id="split-page-right">
				<h1>Latest</h1>

			</section>
		</div>
	</div>
</main>
<?php get_footer(); ?>