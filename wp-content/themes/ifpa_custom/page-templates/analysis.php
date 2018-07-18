<?php /*Template Name: Analysis*/ ?>

<?php get_header(); ?>

<main role="main">
	
	<!-- header img -->
	<?php while ( have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<div style="width: 100%; height: 60px;"></div>
	<div id="split-page-main">
		<div id="split-page-container">

			<!-- analysis cards -->
			<section id="split-page-left">
				<h1 class="page-header">Latest</h1>
				<section id="split-page-with-thumbnail">
					<?php
						$catObj = get_category_by_slug('analysis'); 
						$catId = $catObj->term_id;
						$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=4');
						while($recent_posts->have_posts()) : $recent_posts->the_post();
					?>
						<section class="split-page-with-thumbnail-article">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<a class="thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<p class="thumbnail-article-date" href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></p>
							<div style="height: 50px"></div>
						</section>
					<?php
						endwhile;
						wp_reset_postdata();	
					?>
				</section>
			</section>
			<!-- /analysis cards -->

			<div class="divider divider-horizontal" style="margin: 100px 0 20px 0; width:1px; height: auto;"></div>

			<!-- analysis archive -->
			<section id="split-page-right">
				<div style="width: inherit; height: 100px"></div>

				<!-- years -->
				<section class="years studies">
					<?php
						$years = array();
						$catObj = get_category_by_slug('analysis'); 
						$catId = $catObj->term_id;
						$recent_posts = new WP_Query('cat='.$catId);

						while($recent_posts->have_posts()) {
							$recent_posts->the_post();

							if(!in_array(get_the_date('Y'), $years)) {
								array_push($years, get_the_date('Y'));
							}
						}
						wp_reset_postdata();

						//print years
						foreach ($years as $year) :
					?>
						<h1 class="clickable year" id="a-<?php echo $year ?>" itemYear="<?php echo $year ?>" itemType="studies"><?php echo $year ?></h1>
						
					<?php endforeach; ?>

					<script type="text/javascript">
						var ayear = "<?php echo $years[0] ?>"
					</script>

				</section>
				<!-- /years -->
				
				<section class="split-page-no-thumbnail studies">
					<?php
						$count = 0; //used to insert dividers b/w articles (TODO)
						$catObj = get_category_by_slug('studies'); 
						$catId = $catObj->term_id;

						foreach ($years as $year) :
							$recent_posts = new WP_Query('cat='.$catId.'&&year='.$year);
							while($recent_posts->have_posts()) :
								$recent_posts->the_post();
					?>			
								<section class="split-page-no-thumbnail-article studies <?php echo $year ?>">
									<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<p class="no-thumbnail-article-date" href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format')); ?></p>
								</section>
					<?php
								$count++;
							endwhile;
						endforeach;
						wp_reset_postdata();	
					?>
				</section>
			</section>
			<!-- /analysis archive -->

		</div>
	</div>
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

			<script type="text/javascript">
				jQuery(document).ready(function( $ ) {
					$("#a-"+ayear).click();
				});
			</script>

<?php get_footer(); ?>