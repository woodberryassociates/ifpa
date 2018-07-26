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

	<div id="split-page-main" class="gray front">
		<div style="height: 150px; position: relative; bottom: 150px;"></div>

		<div id="split-page-container" style="padding-bottom: 60px;">
			
			<section id="split-page-left">
				<h1 class="page-header" style="padding: 0;">What's New</h1>
				<?php
					$args = array(
						'posts_per_page' => 5,
						'frontPage' => true
					);
					$wp_query = new WP_Query($args);
					get_template_part('loop');
					wp_reset_postdata();
					$frontPage = false; //reset variable
				?>
			</section>

			<section class="front-page" id="split-page-right">
				<h1 class="page-header-inverted">Latest</h1>

				<!-- policy papers -->
				<h2 class="page-header" style="padding: 0 12% 0 12%; line-height: 75px; position: relative; top: 15px;">Policy Papers</h2>
				
				<?php
					$count = 0; //used to insert dividers b/w articles (TODO)
					$catObj = get_category_by_slug('policy-papers'); 
					$catId = $catObj->term_id;

					$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=3');
					while($recent_posts->have_posts()) :
						$recent_posts->the_post();
				?>			
						<section class="split-page-no-thumbnail-article" style="padding: 0 12%; margin: 10px 0 10px 0">
							<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="no-thumbnail-article-date" href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format')); ?></p>
						</section>
				<?php
					endwhile;
					wp_reset_postdata();	
				?>
				<!-- /policy papers -->

				<!-- twitter widget -->
				<h2 class="page-header" style="padding: 0 12% 0 12%; line-height: 75px;">Twitter</h2>

				<a class="twitter-timeline" href="https://twitter.com/patientaccess"  data-width="260" data-tweet-limit="1" data-chrome="nofooter noborders noheader transparent">Tweets by Alliance for Patient Access</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
				<!-- /twitter widget -->

				<!-- summits -->
				<h2 class="page-header" style="padding: 0 12% 0 12%; line-height: 75px;">Policy Summits</h2>

				<?php
					$count = 0; //used to insert dividers b/w articles (TODO)
					$catObj = get_category_by_slug('summits'); 
					$catId = $catObj->term_id;

					$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=2');
					while($recent_posts->have_posts()) :
						$recent_posts->the_post();
				?>			
						<section class="split-page-no-thumbnail-article" style="padding: 0 12%; margin: 10px 0 10px 0">
							<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="no-thumbnail-article-date" href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format')); ?></p>
						</section>
				<?php
					endwhile;
					wp_reset_postdata();	
				?>
				<!-- /summits -->

			</section>
		</div>
	</div>
</main>
	
<?php get_footer(); ?>