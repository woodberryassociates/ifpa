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
				<!-- policy papers -->
				<h1 class="page-header" style="padding: 0;">Latest Policy Papers</h1>

				<?php
				$catObj = get_category_by_slug('policy-papers');
				$catId = $catObj->term_id;

				$args = array(
					'cat' => $catId,
					'posts_per_page' => 2,
					'frontPage' => true
				);

				$wp_query = new WP_Query($args);
				get_template_part('loop');
				wp_reset_postdata();
				?>
				<!-- /policy papers -->

				<!-- summits -->
				<h1 class="page-header" style="padding: 0;">Latest Summits</h1>

				<?php
				$catObj = get_category_by_slug('summits');
				$catId = $catObj->term_id;

				$args = array(
					'cat' => $catId,
					'posts_per_page' => 2,
					'frontPage' => true
				);

				$wp_query = new WP_Query($args);
				get_template_part('loop');
				wp_reset_postdata();
				?>
				<!-- /summits -->
			</section>

			<!-- twitter widget -->
			<section class="front-page" id="split-page-right">
				<h1 class="page-header-inverted">Twitter</h1>

				<a class="twitter-timeline" href="https://twitter.com/patientaccess" data-width="260" data-tweet-limit="3" data-chrome="nofooter noborders noheader transparent">Tweets by Alliance for Patient Access</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</section>
			<!-- /twitter widget -->
		</div>
	</div>
</main>

<?php get_footer(); ?>
