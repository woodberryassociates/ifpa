<?php /*Template Name: Blog*/ ?>

<?php get_header(); ?>

<main role="main">
	<section class="single">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!--?php
			$attachment_id = attachment_url_to_postid( $image_url );
			echo $attachment_id;
 	        //echo wp_generate_attachment_metadata( $attachment_id );
 	    ?-->
			<?php the_content() ?>
		<?php endwhile; ?>
	<?php endif; ?>
	</section>

	<section>
		<p style="font-size: 35px; color: #2AAD69; padding: 10px 0px 10px 2vw">Blog</p>
		<?php
			$catObj = get_category_by_slug('blog'); 
			$catId = $catObj->term_id;
			//$catquery = new WP_Query('cat='.$catId);
			query_posts('cat='.$catId);
			get_template_part('loop');
		?>
	</section>
</main>
<?php get_footer(); ?>