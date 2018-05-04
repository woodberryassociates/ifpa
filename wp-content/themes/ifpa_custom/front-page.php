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

	<div id="front-page-main">
		<div id="front-page-container">
			<section id="whats-new">
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
			<section id="latest">
				<h1>Latest</h1>

			</section>
		</div>

		<section id="recent-blog-posts">
			<h1 style="padding-left: 6vw; font-weight: bold; color: white;">Recent Blog Posts</h1>
		</section>

		<section class="home-block">
			<?php
				$recent_posts = new WP_Query('posts_per_page=4'); /*this number determines how many recent posts display on the home page*/
				while($recent_posts->have_posts()) : $recent_posts->the_post();
			?>
					<section class="home-block-article">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
					</section>
			<?php
				endwhile;
				wp_reset_postdata();	
			?>
		</section>
	</div>
</main>
<div style="height: 5px; background-color: #707070"></div>
<?php get_footer(); ?>