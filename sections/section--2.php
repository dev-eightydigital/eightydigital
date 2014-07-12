<?php
$who_we_are = new WP_QUERY('post_type=>page&page_id='.WHO_WE_ARE);
if($who_we_are->have_posts()): while($who_we_are->have_posts()): $who_we_are->the_post();
?>
<div id="section--2" class="pgWidth section">
	<div class="container">
	<div class="section--box row-fluid">
		<div class="span8">	
			<h2 class="section--heading"><?php the_title(); ?></h2>
			<div class="desc"> <?php the_content(); ?> </div>
		</div>
		<div class="span4">&nbsp;</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<?php endwhile; endif;?>