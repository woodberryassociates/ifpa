<?php get_header(); ?>

	<main role="main">
		<!-- header img -->
		<img style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); echo '/img/headers/tag-'; echo rand(1, 3); echo '.png'?>"/>
		<!-- /header img -->

		<!-- section -->
		<section id="split-page-main">
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<div id="split-page-container" class="search-page">
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
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