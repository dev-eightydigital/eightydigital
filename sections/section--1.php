<div id="section--1" class="pgWidth section">
<?php $intro = new WP_QUERY(array(
					'page_id'	=> INTRO
					));?>
	<?php if($intro->have_posts()): $intro->the_post();?>
	<h2 class="intro-text"> 
		<?php the_content(); ?>
	</h2>
	<a id="TalkToUs" class="button--generic" data-target="section--7"><span>Talk to us today</span></a> </div>
	<?php endif;?>
	<div class="clear"></div>
</div>