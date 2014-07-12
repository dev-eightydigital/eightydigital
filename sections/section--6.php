<div id="section--6" class="pgWidth section">
	<?php declare_this();?>
	<div class="section--box">		
		<h2 class="section--heading"> In The Media </h2>
		<div id="blog-container" class="js-masonry"
	data-masonry-options='{"gutter": 50,"itemSelector": ".blog-item" }'>
			
			<?php $blog = new WP_QUERY(array(
								'cat' 				=> '-'.CAT_SERVICES.', -'.CAT_TEAM,
								'posts_per_page'	=> 6
							));
			$counter = 1;
			if($blog->have_posts()): while($blog->have_posts()): $blog->the_post();
			?>
				<div class="blog-item">
					<div class="img-holder">
						<a href="<?php the_permalink() ?>">
						<?php 
						if($i % 2 == 0){
							the_post_thumbnail('thumbnail-2');
							$counter++;
						}else{
							the_post_thumbnail('thumbnail-1');
							$counter++;
							}
						?>
						</a>
					</div>
					<h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="meta"><i class="fa fa-pencil"></i> <?php the_time('F j, Y'); ?></div>
					<div class="desc"><?php 
					$trimmed_content = wp_trim_words( get_the_excerpt(), 40,  '...' );
					echo $trimmed_content;
					 ?></div>
					<div class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
				</div>
			<?php endwhile; endif; ?>
			
			
			<div class="clear"></div>
		</div>
		<br />
		<div class="btn-showmore"><a href="<?php echo get_page_link(MORE_POSTS_PAGE)?>">Show More Posts...</a></div>
	</div>
</div>