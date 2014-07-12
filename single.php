<?php get_header() ?>
<style type="text/css">
@import url(<?php bloginfo('template_url')?>/css/single.css);
</style>

<div id="section--4" class="pgWidth section">
	<div class="section--box">
	<?php while(have_posts()): the_post();?>
	<?php get_template_part( 'content', get_post_format() ); ?>
	<div class="clear"></div>
	<?php comments_template( '', true ); ?>
	<?php endwhile;?>
	</div>
</div>

<?php get_footer() ?>