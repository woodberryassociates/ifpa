<?php /*Template Name: About Us*/ ?>

<?php get_header(); ?>

<main role="main">

	<!-- header img -->
	<?php while (have_posts()) : the_post();
		the_post_thumbnail('full');
	endwhile; ?>
	<!-- /header img -->

	<!-- article -->
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>

		<section id="split-page-main">
			<section id="split-page-container" class="gray" style="margin: 30px auto; padding: 0 20px;">

				<h1 class="page-header" style="text-transform: none; position: relative; right:  42%;">IfPA LEADERSHIP</h1>

				<?php
				$custom_fields = get_post_custom();
				$board_members = $custom_fields['board'];
				$last_member = end($board_members); // used to drop the divider for the last bio

				foreach ($board_members as $key => $value) {
					echo  $value;
					if ($value != $last_member) // drop the divider for the last bio
						echo '<div class="divider" style="width: 100%; height: 1px;"></div>';
				}
				?>

			</section>
		</section>
	<?php endwhile; ?>
	<!-- /article -->

</main>

<?php get_footer(); ?>
