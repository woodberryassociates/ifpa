<?php /*Template Name: About Us*/ ?>

<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<div style="width: 100%; height: 300px; background-color: rgba(74, 152, 190, .7);"></div>
	<!-- /header img -->

	<section id="split-page-main">
		<section id="split-page-container" class="gray" style="margin: 30px auto; padding: 0 20px;">
			<?php while ( have_posts()) : the_post(); ?> 
				<?php the_content(); ?>
			<?php endwhile; ?>
			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/David-Charles.png"><div></div>
				<h2 class="bio-name">David Charles, M.D.</h2>
				<h2 class="bio-place">Nashville, Tennessee</h2>
				<p class="bio-text bold">AfPA is led by David Charles, M.D., who is the Chief Medical Officer of the Vanderbilt University Clinical Neurosciences 	Institute.</p>
				<p class="bio-text">Dr. Charles is a national leader in Movement Disorders research. He took leave from his practice in 1998 and spent a year on the staff of U.S. Senator Bill Frist, where he served as a health policy advisor. Following this experience in Washington, Dr. Charles conducted Parkinson’s disease research in France as a Fulbright Senior Scholar.</p>
			</section>

			<div class="divider" style="width: 100%; height: 1px;"></div>

			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Howard-Hoffberg.png">
				<h2 class="bio-name">Howard Hoffberg, M.D.</h2>
				<h2 class="bio-place">Owings Mills, Maryland</h2>
				<p class="bio-text bold">Dr. Hoffberg is associate medical director of Rehabilitation and Pain Managements Associates,</p>
				<p class="bio-text">a freestanding private practice specializing in multidisciplinary treatment (including Physical Therapy and Psychosocial Counseling) for pain located in the surburban Baltimore region. He was a former president of the Maryland Society of Physical Medicine and Rehabilitation, and is currently the Highmark Medicare Part B Carrier Advisor Representative in Maryland. He has written book chapters and journal articles in the subjects of Rehabilitation and Pain, and has been involved in training residents and physician assistants.</p>
			</section>

			<div class="divider" style="width: 100%; height: 1px;"></div>

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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Robert-Yapundich.png">
				<h2 class="bio-name">Robert Yapundich, M.D.</h2>
				<h2 class="bio-place">Hickory, North Carolina</h2>
				<p class="bio-text bold">Dr. Robert Yapundich is a neurologist in private practice with Neurology Associates in Hickory, N.C.</p>

				<p class="bio-text">Dr. Yapundich completed a neurology residency at the University of Alabama at Birmingham, followed by a fellowship in electromyography/neuromuscular diseases. He is a diplomat of The American Board of Psychiatry and Neurology with subspecialty certifications in Clinical Neurophysiology and Sleep Medicine, along with certification by the American Board of Electrodiagnostic Medicine.</p>

				<p class="bio-text">Dr. Yapundich maintains an active outpatient practice that involves all aspects of Neurology, with a special interest in Electrodiagnostic Medicine. He has served as president of the North Carolina Neurological Society, and participates in various other local and statewide committees. Currently he is a board member of the North Carolina Medical Society and state liason for the American Association of Neuromuscular and Electrodiagnostic Medicine. Healthcare advocacy at the state and national levels has also been an area of significant interest. He has participated in clinical trials, many as primary investigator, and has served as co-author on a variety of past publications.</p>
			</section>

			<div class="divider" style="width: 100%; height: 1px;"></div>

			<section class="bio">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profiles/Robin-K.-Dore.png">
				<h2 class="bio-name">Robin K. Dore, M.D.</h2>
				<h2 class="bio-place">Tustin, California</h2>
				<p class="bio-text bold">Robin K. Dore, M.D., is a Board certified rheumatologist in private practice in Tustin, Calif. and a Clinical Professor of Medicine at UCLA.</p>
				
				<p class="bio-text">Dr. Dore is Chair of the Orange County Branch of the Arthritis Foundation, Pacific Region. She is a past president of the Southern California Rheumatology Society and a past member of the board of directors of the American College of Rheumatology.</p>

				<p class="bio-text">A clinical investigator, Dr. Dore participates in clinical research studies of medications for treatment of gout, osteoarthritis, osteoporosis, rheumatoid arthritis, and other metabolic bone diseases.</p>
			</section>
		</section>
	</section>
</main>
<?php get_footer(); ?>