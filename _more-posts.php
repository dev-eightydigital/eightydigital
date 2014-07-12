<?php
/*
* Template Name: More Posts
*/
get_header();
declare_this();
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/single.css" />
<div id="MorePostsPage">
	<div id="section--3" class="pgWidth section inner--container js-masonry"
	data-masonry-options='{"gutter": 50,"itemSelector": ".blog-item" }'>
	<?php 
	
		$moreposts = new WP_QUERY(array(
				'cat'				=> '-'.CAT_SERVICES.', -'.CAT_TEAM,
				'paged'				=> $paged
				));
		
		if($moreposts->have_posts()): while($moreposts->have_posts()): $moreposts->the_post();
	?>
	<div class="blog-item" >
		<?php get_template_part( 'content', get_post_format() ); ?>
	</div>
	<?php endwhile; endif; ?>
	
	<div class="clear"></div>
	
	<?php 
	global $paged;
	global $wp_query;
	$temp = $wp_query; 
	$wp_query = null; 
	$wp_query = new WP_Query(); 
	$wp_query->query('cat=-'.CAT_SERVICES.', -'.CAT_TEAM.'&paged='.$paged);
	
	wp_pagenavi();

	$wp_query = null; 
	$wp_query = $temp; 
	?>
	
	
	<div class="clear"></div>
	</div>
</div><!--MorePostsPage-->
<?php get_footer(); ?>