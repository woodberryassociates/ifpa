<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!--if the post title contains no spaces AND isn't titled "infographic" (i.e. not content), skip it (hack to display content media)-->
	<?php if (!strpos(the_title('','',false),' ') && strpos(the_title('','',false),"Infographic")) {
		continue;
	} ?>

		<!-- article -->
		<article style="padding: 0 15vw 0 15vw; display: block; height: 220px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if (has_post_thumbnail()): // Check if thumbnail exists ?>
				<!-- post thumbnail -->
				<a class="loop-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(300,200)); // Declare pixel size you need inside the array ?>
				</a>
				<!-- /post thumbnail -->
				<!-- post title -->
				<h1 style="display: flex; padding-left: 10px;">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->
				<!-- post date -->
				<h2 style="display: flex; padding-left: 10px;">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a>
				</h2>
				<!-- /post date -->

				<?php echo "<h2 style='display: flex; padding: 5px 10px;'"; // dumb hack to correctly style the excerpt ?>
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				<?php echo "</h2><a style='display: flex; padding: 0px 10px;'"; ?>
				<?php edit_post_link(); ?>
				<?php echo "</a>"; ?>

			<?php else: //if no thumbnail ?>
				<!-- post title -->
				<h1 style="padding: 10px 10px 0px 310px;">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->
				<!-- post date -->
				<h2 style="display: flex; padding: 0px 10px 10px 310px;">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_date(); ?></a>
				</h2>
				<!-- /post date -->

				<?php echo "<h2 style='display: flex; padding: 5px 10px 5px 310px;'"; // dumb hack to correctly style the excerpt ?>
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				<?php echo "</h2><a style='display: flex; padding: 0px 10px 0px 310px;'"; ?>
				<?php edit_post_link(); ?>
				<?php echo "</a>"; ?>
			<?php endif; ?>
		</article>
		<!-- /article -->
<?php endwhile; ?>
<?php else: ?>
	<!-- article -->
	<article>
		<h1 style="text-align: center; color: #2AAD69;"><?php _e( 'Sorry, nothing to display. :(', 'html5blank' ); ?></h1>
	</article>
	<!-- /article -->
<?php endif; ?>