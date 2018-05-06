<?php /*Template Name: Policy Papers*/ ?>

<?php get_header(); ?>

<main role="main">
	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<div id="split-page-main">
		<div id="split-page-multi-container">

			<!-- POLICY BRIEFS -->
			<div id="split-page-container">

				<!-- recent policy briefs -->
				<section id="split-page-left">
					<h1 style="padding-bottom: 10px">Policy Briefs</h1>
					<section id="split-page-with-thumbnail">
						<?php
							$catObj = get_category_by_slug('policy-briefs'); 
							$catId = $catObj->term_id;
							$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=4');
							while($recent_posts->have_posts()) : $recent_posts->the_post();
						?>
							<section class="split-page-with-thumbnail-article">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
								<a href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></a>
							</section>
						<?php
							endwhile;
							wp_reset_postdata();	
						?>
					</section>
				</section>
				<!-- /recent policy briefs -->

				<div class="divider" style="margin: 40px 0 20px 0; width:1px; height: auto;"></div>

				<!-- policy briefs archive -->
				<section id="split-page-right">
					<div style="width: inherit; height: 40px"></div>

					<!-- years -->
					<section id="years">
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
							<h1 class="clickable year" itemYear="<?php echo $year ?>"><?php echo $year ?></h1>
						<?php endforeach; ?>
					</section>
					<!-- /years -->
					
					<section id="split-page-no-thumbnail">
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
									<section id="<?php echo $year ?>" class="split-page-no-thumbnail-article <?php echo $year ?>">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
										<a href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format')); ?></a>
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

			<!-- WHITE PAPERS -->
			<div id="split-page-container">

				<!-- recent report cards -->
				<section id="split-page-left">
					<h1 style="padding-bottom: 10px">White Papers</h1>
					<section id="split-page-with-thumbnail">
						<?php
							$catObj = get_category_by_slug('white-papers'); 
							$catId = $catObj->term_id;
							$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=4');
							while($recent_posts->have_posts()) : $recent_posts->the_post();
						?>
							<section class="split-page-with-thumbnail-article">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
								<a href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></a>
							</section>
						<?php
							endwhile;
							wp_reset_postdata();	
						?>
					</section>
				</section>
				<!-- /recent white papers -->

				<div class="divider" style="margin: 40px 0 20px 0; width:1px; height: auto;"></div>

				<!-- white papers archive -->
				<section id="split-page-right">
					<div style="width: inherit; height: 40px"></div>

					<!-- years -->
					<section id="years">
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
							<h1 class="clickable year" itemYear="<?php echo $year ?>"><?php echo $year ?></h1>
						<?php endforeach; ?>
					</section>
					<!-- /years -->
					
					<section id="split-page-no-thumbnail">
						<?php
							$count = 0; //used to insert dividers b/w articles (TODO)
							$catObj = get_category_by_slug('white-papers'); 
							$catId = $catObj->term_id;

							foreach ($years as $year) :
								$recent_posts = new WP_Query('cat='.$catId.'&&year='.$year);
								while($recent_posts->have_posts()) :
									$recent_posts->the_post();
									
						?>
									<section id="" class="split-page-no-thumbnail-article <?php echo $year ?>">
										<!--?php
											//only insert divider if not the first article (TODO)
											if($count != 0) :
										?-->
										<div class="divider" style="width: 100%; height: 1px;"></div>
										<!--?php endif; ?-->
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
										<a href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format')); ?></a>
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

			<!-- FAST FACTS -->
			<div id="split-page-container">
				<!-- recent fast facts -->
				<section id="split-page-left">
					<h1 style="padding-bottom: 10px">Fast Facts</h1>
					<section id="split-page-with-thumbnail">
						<?php
							$catObj = get_category_by_slug('fast-facts'); 
							$catId = $catObj->term_id;
							$recent_posts = new WP_Query('cat='.$catId.'&&posts_per_page=4');
							while($recent_posts->have_posts()) : $recent_posts->the_post();
						?>
							<section class="split-page-with-thumbnail-article">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
								<a href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format' /*accessible under Settings -> General */)); ?></a>
							</section>
						<?php
							endwhile;
							wp_reset_postdata();	
						?>
					</section>
				</section>
				<!-- /recent fast facts -->

				<div class="divider" style="margin: 40px 0 20px 0; width:1px; height: auto;"></div>

				<!-- fast facts archive -->
				<section id="split-page-right">
					<div style="width: inherit; height: 40px"></div>

					<!-- years -->
					<section id="years">
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
							<h1 class="clickable year" itemYear="<?php echo $year ?>"><?php echo $year ?></h1>
						<?php endforeach; ?>
					</section>
					<!-- /years -->
					
					<section id="split-page-no-thumbnail">
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
									<section id="<?php echo $year ?>" class="split-page-no-thumbnail-article <?php echo $year ?>">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<a href="<?php the_permalink(); ?>" style="font-size: .7em"><?php the_author(); ?></a>
										<a href="<?php the_permalink(); ?>" style="font-size: .7em; text-transform: uppercase;"><?php the_time(get_option('date_format')); ?></a>
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
<?php get_footer(); ?>