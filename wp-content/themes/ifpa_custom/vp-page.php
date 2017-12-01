<?php /*Template Name: Value Propositions*/ ?>

<?php get_header(); ?>

<main role="main">
	<section>
		<?php
			$catObj = get_category_by_slug('value-propositions'); 
			$catId = $catObj->term_id;
			//$catquery = new WP_Query('cat='.$catId);
			query_posts('cat='.$catId);
			get_template_part('loop');
		?>
	</section>
</main>
<?php get_footer(); ?>