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

	<hr style="border: 1px solid #B0D8BC">
	<br>

	<section class="issue-nav">
		<a title="Cost Sharing" href="./cost-sharing"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/wallet.png"></a>
		<a title="Coverage Design" href="./coverage-design"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/checklist.png"></a>
		<a title="Value Propositions" href="./value-propositions"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/arrow.png"></a>
	</section>

	<hr style="border: 1px solid #B0D8BC">
	<br>

	<section class="home-block">
		<section class="home-block-article">
			<!--dynamically generate category ID-->
			<?php
				$catObj = get_category_by_slug('value-propositions'); 
				$catId = $catObj->term_id;
			?>
			<?php $catquery = new WP_Query( 'cat='.$catId.'&posts_per_page=1' ); ?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			<?php endwhile;
			wp_reset_postdata();
			?>
		</section>

		<section class="home-block-article">
			<?php
				$catObj = get_category_by_slug('cost-sharing'); 
				$catId = $catObj->term_id;
			?>
			<?php $catquery = new WP_Query( 'cat='.$catId.'&posts_per_page=1' ); ?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
			<?php endwhile;
			wp_reset_postdata();
			?>
		</section>

		<section class="home-block-article">
			<?php
				$catObj = get_category_by_slug('coverage-design'); 
				$catId = $catObj->term_id;
			?>
			<?php $catquery = new WP_Query( 'cat='.$catId.'&posts_per_page=1' ); ?>
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