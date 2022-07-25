<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<img style="margin-bottom: 20px;" src="<?php echo get_template_directory_uri();
																					echo '/img/banners/tag-';
																					echo rand(1, 3);
																					echo '.png' ?>" />
	<!-- /header img -->

	<!-- section -->
	<section class="single-full">

		<?php get_template_part('loop', 'single'); // loop-single.php
		?>

	</section>
	<!-- /section -->
</main>

<!-- footer ads -->
<div style="padding: 2rem 0;">
	<?php if (function_exists('the_ad_placement')) {
		the_ad_placement('footer');
	} ?>
</div>
<!-- /footer ads -->

<?php get_footer(); ?>
