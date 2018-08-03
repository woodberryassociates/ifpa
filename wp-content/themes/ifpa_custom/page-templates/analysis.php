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

			<!-- article -->
			<?php while ( have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- /article -->

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
							<p class="thumbnail-article-date" href="<?php the_permalink(); ?>"><?php the_time('F Y'); ?></p>
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
				<section class="years analysis">
					<?php
						$years = array();
						$catObj = get_category_by_slug('analysis'); 
						$catId = $catObj->term_id;
						$args = array(
							'cat' => $catId,
							'posts_per_page'=> -1 // all posts
						);

						$recent_posts = new WP_Query($args);

						while($recent_posts->have_posts()) {
							$recent_posts->the_post();

							if(!in_array(get_the_date('Y'), $years)) {
								array_push($years, get_the_date('Y')); // if the year of the post isn't in the array, add it
							}
						}
						wp_reset_postdata();

						// print the array of years
						foreach ($years as $year) :
					?>
						<h1 class="clickable year" id="a-<?php echo $year ?>" itemYear="<?php echo $year ?>" itemType="analysis"><?php echo $year ?></h1>
						
					<?php endforeach; ?>

					<script type="text/javascript">
						var ayear = "<?php echo $years[0] ?>"
					</script>

				</section>
				<!-- /years -->
				
				<section class="split-page-no-thumbnail analysis">
					<?php
						$count = 0; // used to insert dividers b/w articles (TODO)
						$catObj = get_category_by_slug('analysis'); 
						$catId = $catObj->term_id;

						foreach ($years as $year) :
							$recent_posts = new WP_Query('cat='.$catId.'&&year='.$year);
							while($recent_posts->have_posts()) :
								$recent_posts->the_post();
					?>			
								<section class="split-page-no-thumbnail-article analysis <?php echo $year ?>">
									<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<p class="no-thumbnail-article-date" href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time('F Y'); ?></p>
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

<?php get_template_part('recent-posts'); ?>

<script type="text/javascript">
	jQuery(document).ready(function( $ ) {
		$("#a-"+ayear).click();
	});
</script>

<?php get_footer(); ?>