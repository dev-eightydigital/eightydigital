<?php get_header();  ?>

<div id="ajaxStarter">
	<?php declare_this();?>
	<div id="section--3" class="pgWidth section">
		<div id="page-container">
		<?php if(have_posts()): the_post(); ?>
			<h2 class="page-title"><?php the_title()?></h2>
			
			<div id="the_gallery" class="masonry-container">
				<div id="page-gallery" class="page-gallery js-masonry" data-masonry-options='{"gutter": 3,"itemSelector": "a img" }'>
					<?php the_content()?>
				</div>
			</div>
				
		<?php endif; ?>
		</div>
	</div>

</div>
<?php get_footer(); ?>