<?php /*Template Name: Report Cards*/ ?>

<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<section>

		<?php the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
		</article>
		<!-- /article -->
	</section>

	<div id="split-page-main">
		<div id="split-page-container">
			<!-- recent report cards -->
			<section id="split-page-left">
				<h1 style="padding-bottom: 10px">Recent</h1>
				<section id="split-page-with-thumbnail">
					<?php
						$catObj = get_category_by_slug('report-cards'); 
						$catId = $catObj->term_id;
						$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=4');
						while($recent_posts->have_posts()) : $recent_posts->the_post();
					?>
						<section class="split-page-with-thumbnail-article">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
						</section>
					<?php
						endwhile;
						wp_reset_postdata();	
					?>
				</section>
			</section>
			<!-- /recent report cards -->

			<!-- report cards archive -->
			<section id="split-page-right">
				<!-- TODO: dynamic genration of date-years -->
				<!--div style="width: inherit; height: 40px"></div-->

				<!-- years -->
				<section id="years">
					<h1 class="clickable" style="float: left;">2018</h1>
					<h1 style="float: left;">2017</h1>
				</section>
				<!-- /years -->
				
				<section id="split-page-no-thumbnail">
					<?php
						$catObj = get_category_by_slug('report-cards'); 
						$catId = $catObj->term_id;
						$recent_posts = new WP_Query('cat='.$catId.'&&year=2017');
						while($recent_posts->have_posts()) : $recent_posts->the_post();
					?>
						<section class="split-page-no-thumbnail-article">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
							<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_time(get_option('date_format')); ?></a>
						</section>
					<?php
						endwhile;
						wp_reset_postdata();	
					?>
				</section>
			</section>
			<!-- /report cards archive -->

		</div>
	</div>
</main>
<?php get_footer(); ?>