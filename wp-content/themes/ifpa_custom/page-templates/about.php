<?php /*Template Name: About Us*/ ?>

<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<?php while ( have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<!-- article -->
	<?php while ( have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<!-- /article -->

	<section id="split-page-main">
		<section id="split-page-container" class="gray" style="margin: 30px auto; padding: 0 20px;">

			<h1 class="page-header" style="text-transform: none; position: relative; right:  42%;">IfPA LEADERSHIP</h1>

			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Jack-Shim.png">
				<h2 class="bio-name">Jack Shim, M.D.</h2>
				<h2 class="bio-place">Oceanside, California</h2>
				<p class="bio-text bold">Dr. Schim is Voluntary Assistant Clinical Professor in the Neuroscience Department at University of California San Diego,</p>

				<p class="bio-text">and is on staff at the VA Medical Center in La Jolla. He has special interests in headache management, stroke prevention, acute stroke intervention, and neurologic rehabilitation.</p>

				<p class="bio-text">Dr. Schim earned his medical degree from University of California San Diego (UCSD) Medical School, served as a medical intern at Cedars Sinai Medical Center, Los Angeles, and completed his neurology residency at UCSD, with special emphasis on electromyography and neuromuscular disease. He is Past President of the Association of California Neurologists and an active member of the American Academy of Neurology, American Stroke Association, and American Headache Society. Dr. Schim is Chair of the Division of Neuroscience at Scripps Hospital, Encinitas.</p>

				<p class="bio-text">Dr. Schim is Board certified in Neurology, and has certification in Headache Medicine by the United Council of Neurologic Subspecialties. He has published articles in Experimental Neurology, Current Medical Research and Opinion, Pain Practice, Headache and Neurology.</p>
			</section>

			<div class="divider" style="width: 100%; height: 1px;"></div>

			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Madelaine-Feldman.jpg">
				<h2 class="bio-name">Madelaine Feldman, M.D.</h2>
				<h2 class="bio-place">New Orleans, La.</h2>
				<p class="bio-text bold">Madelaine A. Feldman, M.D., a partner in The Rheumatology Group,  has been in private practice in New Orleans for 25 years.</p>

				<p class="bio-text">Dr. Feldman earned her undergraduate degree in theatre and biology from Tulane University. She remained at Tulane University for medical school, residency and fellowship in Rheumatology.</p>

				<p class="bio-text">Dr. Feldman is currently president of the Rheumatology Alliance of Louisiana,  board member of the Coalition of State Rheumatology Organizations, and member of the American College of Rheumatology’s  insurance subcommittee of CORC.  Dr. Feldman is a Clinical Assistant Professor of Medicine at Tulane University School of Medicine and has been named one of the Top Doctors in New Orleans for many years.</p>

				<p class="bio-text">On a lighter note,  Dr. Madelaine Feldman has been an on-air television personality for New Orleans PBS member station WYES-TV  and was the host of the radio show “Driving with Dr. Mattie.”</p>
			</section>

			<div class="divider" style="width: 100%; height: 1px;"></div>

			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Bruce-Rubin.jpg">
				<h2 class="bio-name">Bruce Rubin, M.D.</h2>
				<h2 class="bio-place">Miami, Fla.</h2>
				<p class="bio-text bold">Dr. Bruce Rubin is an Assistant Professor of Clinical Neurology at the University of Miami Miller School Of Medicine. He also currently serves as the Director of the Spasticity Clinic at Jackson Memorial Hospital.</p>

				<p class="bio-text">Dr. Rubin has lectured nationally and has published articles in scientific journals such as Stroke, Neurology and Archives of Family Medicine.  He is a member of several professional organizations, such as the American Academy of Neurology, Dade County Medical association, American Society of Neurorehabilitation and Brain Injury Association of Florida.  He also serves as the Chairman for the Florida Chapter of the Alliance for Patient Access.</p>

				<p class="bio-text">Dr. Rubin received his Bachelor’s of Science degree from Hobart College and his Doctor of Medicine degree from State University of New York Health Science Center at Syracuse.  He completed his Neurological residency at the Neurologic Institute at Columbia Presbyterian Medical Center in New York and his post-doctoral fellowship in Neurological Rehabilitation at the University of Miami School Of Medicine.</p>
			</section>

			<div class="divider" style="width: 100%; height: 1px;"></div>

			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Kobayashi-Roger.jpg">
				<h2 class="bio-name">Roger Kobayashi, M.D.</h2>
				<h2 class="bio-place">Omaha, Neb.</h2>
				<p class="bio-text bold">Dr. Roger H. Kobayashi is an immunologist-allergist and served on the full time faculty at the University of Nebraska [director immunology/allergy]  and UCLA [director Pediatric Allergy Clinic] Schools of Medicine.  He is currently in private practice in Omaha, Nebraska and Clinical Professor at UCLA.</p>

				<p class="bio-text">Dr. Kobayashi was born and raised in Honolulu, Hawaii and received his BA in Economics [senior thesis socialized medicine] and M.D. from the University of Nebraska as well as an M.S. in cardiovascular physiology from University of Hawaii-Manoa. He received his residency and fellowship training at USC and UCLA respectively. Of the 80 papers published, most have focused in Asthma and Recurrent infections in the Pediatric population. He has been visiting professor at a number of U.S. medical schools as well as  at the Universities of Hanoi, Hue and the Military Medical School in Hanoi and an invited lecturer in Europe, Asia, the Middle East and Central America.</p>

				<p class="bio-text">He is an Expert Consultant for the Immune Deficiency Foundation and is a recipient of their Physician Volunteer Award and was founding member and first president of the Nebraska Allergy Society.</p>

				<p class="bio-text">He is a member of the Executive Committee, Negotiating Committee and Patient Advocacy Committee [Chair] of the Consortium of Independent Immunology Clinics.</p>
			</section>
		</section>
	</section>
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