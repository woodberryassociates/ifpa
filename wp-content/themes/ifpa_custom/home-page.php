<?php /*Template Name: Home Page*/ ?>
<?php get_header(); ?>

<main role="main">
	<section>

		<?php the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<br class="clear">
		</article>
		<!-- /article -->

	</section>

	<section class="home-block">
		<section class="home-block-article">
			<?php $catquery = new WP_Query( 'cat=5&posts_per_page=1' ); ?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			<?php endwhile;
			wp_reset_postdata();
			?>
		</section>

		<section class="home-block-article">
			<?php $catquery = new WP_Query( 'cat=6&posts_per_page=1' ); ?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			<?php endwhile;
			wp_reset_postdata();
			?>
		</section>

		<section class="home-block-article">
			<?php $catquery = new WP_Query( 'cat=7&posts_per_page=1' ); ?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			<?php endwhile;
			wp_reset_postdata();
			?>
		</section>
	</section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>