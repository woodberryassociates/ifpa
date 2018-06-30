<?php /*Template Name: Policy Papers*/ ?>

<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<img src="<?php echo get_template_directory_uri(); ?>/img/headers/Papers.png"/>
	<!-- /header img -->

	<div id="split-page-main">
		<div id="split-page-multi-container">

			<!-- POLICY BRIEFS -->
			<div id="split-page-container">

				<!-- recent policy briefs -->
				<section id="split-page-left">
					<h1 class="page-header">Policy Briefs</h1>
					<section id="split-page-with-thumbnail">
						<?php
							$catObj = get_category_by_slug('policy-briefs'); 
							$catId = $catObj->term_id;
							$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=2');
							while($recent_posts->have_posts()) : $recent_posts->the_post();
						?>
							<section class="split-page-with-thumbnail-article">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a class="thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<!--p class="thumbnail-article-author" href="<?php the_permalink(); ?>"><?php the_author(); ?></p-->
								<p class="thumbnail-article-date" href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></p>
							</section>
						<?php
							endwhile;
							wp_reset_postdata();	
						?>
					</section>
				</section>
				<!-- /recent policy briefs -->

				<div class="divider divider-horizontal" style="margin: 100px 0 20px 0; width:1px; height: auto;"></div>

				<!-- policy briefs archive -->
				<section id="split-page-right">
					<div style="width: inherit; height: 100px"></div>

					<!-- years -->
					<section class="years policy-briefs">
						<?php
							$years = array();
							$catObj = get_category_by_slug('policy-briefs'); 
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
							<h1 class="clickable year" itemYear="<?php echo $year ?>" itemType="policy-briefs"><?php echo $year ?></h1>
						<?php endforeach; ?>
					</section>
					<!-- /years -->
					
					<section class="split-page-no-thumbnail policy-briefs">
						<?php
							$count = 0; //used to insert dividers b/w articles (TODO)
							$catObj = get_category_by_slug('policy-briefs'); 
							$catId = $catObj->term_id;

							foreach ($years as $year) :
								$recent_posts = new WP_Query('cat='.$catId.'&&year='.$year);
								while($recent_posts->have_posts()) :
									$recent_posts->the_post();
									//only insert divider if not the first article
									if($count != 0) :
						?>
										<!--div class="divider" style="width: 100%; height: 1px;"></div-->
									<?php endif; ?>
									<section class="split-page-no-thumbnail-article policy-briefs <?php echo $year ?>">
										<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<!--p class="no-thumbnail-article-author" href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></p-->
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
				<!-- /policy briefs archive -->
			</div>
			<!-- /POLICY BRIEFS -->

			<div class="divider" style="margin: 2em auto 0 auto; width: 1000px; height: 1px;"></div>

			<!-- WHITE PAPERS -->
			<div id="split-page-container">

				<!-- recent white papers -->
				<section id="split-page-left">
					<h1 class="page-header">White Papers</h1>
					<section id="split-page-with-thumbnail">
						<?php
							$catObj = get_category_by_slug('white-papers'); 
							$catId = $catObj->term_id;
							$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=2');
							while($recent_posts->have_posts()) : $recent_posts->the_post();
						?>
							<section class="split-page-with-thumbnail-article">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a class="thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<!--p class="thumbnail-article-author" href="<?php the_permalink(); ?>"><?php the_author(); ?></--p>
								<p class="thumbnail-article-date" href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></p>
							</section>
						<?php
							endwhile;
							wp_reset_postdata();	
						?>
					</section>
				</section>
				<!-- /recent white papers -->

				<div class="divider divider-horizontal" style="margin: 100px 0 20px 0; width:1px; height: auto;"></div>

				<!-- white papers archive -->
				<section id="split-page-right">
					<div style="width: inherit; height: 100px"></div>

					<!-- years -->
					<section class="years white-papers">
						<?php
							$years = array();
							$catObj = get_category_by_slug('white-papers'); 
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
							<h1 class="clickable year" itemYear="<?php echo $year ?>" itemType="white-papers"><?php echo $year ?></h1>
						<?php endforeach; ?>
					</section>
					<!-- /years -->
					
					<section class="split-page-no-thumbnail white-papers">
						<?php
							$count = 0; //used to insert dividers b/w articles (TODO)
							$catObj = get_category_by_slug('white-papers'); 
							$catId = $catObj->term_id;

							foreach ($years as $year) :
								$recent_posts = new WP_Query('cat='.$catId.'&&year='.$year);
								while($recent_posts->have_posts()) :
									$recent_posts->the_post();
									
						?>
									<section class="split-page-no-thumbnail-article white-papers <?php echo $year ?>">
										<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<!--p class="no-thumbnail-article-author" href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></p-->
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
				<!-- /white papers archive -->
			</div>
			<!-- /WHITE PAPERS -->

			<div class="divider" style="margin: 2em auto 0 auto; width: 1000px; height: 1px;"></div>

			<!-- FAST FACTS -->
			<div id="split-page-container">
				<!-- recent fast facts -->
				<section id="split-page-left">
					<h1 class="page-header">Fast Facts</h1>
					<section id="split-page-with-thumbnail">
						<?php
							$catObj = get_category_by_slug('fast-facts'); 
							$catId = $catObj->term_id;
							$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=2');
							while($recent_posts->have_posts()) : $recent_posts->the_post();
						?>
							<section class="split-page-with-thumbnail-article">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a class="thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<!--p class="thumbnail-article-author" href="<?php the_permalink(); ?>"><?php the_author(); ?></p-->
								<p class="thumbnail-article-date" href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></p>
							</section>
						<?php
							endwhile;
							wp_reset_postdata();	
						?>
					</section>
				</section>
				<!-- /recent fast facts -->

				<div class="divider divider-horizontal" style="margin: 100px 0 20px 0; width:1px; height: auto;"></div>

				<!-- fast facts archive -->
				<section id="split-page-right">
					<div style="width: inherit; height: 100px"></div>

					<!-- years -->
					<section class="years fast-facts">
						<?php
							$years = array();
							$catObj = get_category_by_slug('fast-facts'); 
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
							<h1 class="clickable year" itemYear="<?php echo $year ?>" itemType="fast-facts"><?php echo $year ?></h1>
						<?php endforeach; ?>
					</section>
					<!-- /years -->
					
					<section class="split-page-no-thumbnail fast-facts">
						<?php
							$count = 0; //used to insert dividers b/w articles (TODO)
							$catObj = get_category_by_slug('fast-facts'); 
							$catId = $catObj->term_id;

							foreach ($years as $year) :
								$recent_posts = new WP_Query('cat='.$catId.'&&year='.$year);
								while($recent_posts->have_posts()) :
									$recent_posts->the_post();
									//only insert divider if not the first article
									if($count != 0) :
						?>
										<!--div class="divider" style="width: 100%; height: 1px;"></div-->
									<?php endif; ?>
									<section class="split-page-no-thumbnail-article fast-facts <?php echo $year ?>">
										<a class="no-thumbnail-article-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<!--p class="no-thumbnail-article-author" href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></p-->
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
				<!-- /fast facts archive -->
			</div>
			<!-- FAST FACTS -->

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
<?php get_footer(); ?>