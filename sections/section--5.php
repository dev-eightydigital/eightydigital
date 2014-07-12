<div id="section--5" class="pgWidth section">
	<div class="section--box">		
		<h2 class="section--heading"> Our Team </h2>
		<ul class="team">
		<?php $team = new WP_QUERY(array(
							'post_type;'	=> 'post',
							'cat'			=> CAT_TEAM,
							'meta_key'		=> 'order',
							'orderby'		=> 'meta_value_num',
							'order'			=> 'ASC'
							));
		if($team->have_posts()): while($team->have_posts()): $team->the_post();
		?>
			<li>
				<?php the_post_thumbnail('full'); ?>
				<div class="name"><?php the_title(); ?></div>
				<div class="title"><?php the_field('team-title'); ?></div>
				<div class="desc">
					<?php the_content(); ?>
				</div>
			</li>
		<?php endwhile; endif; ?>	
		</ul>
		<div class="clear"></div>
	</div>
</div>