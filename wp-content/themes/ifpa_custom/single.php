<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<img style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri(); echo '/img/banners/tag-'; echo rand(1, 3); echo '.png'?>"/>
	<!-- /header img -->

	<!-- section -->
	<section class="single-full">
		
		<?php get_template_part('loop', 'single'); // loop-single.php ?>

	</section>
	<!-- /section -->
</main>

<?php get_template_part('recent-posts'); ?>

<?php get_footer(); ?>