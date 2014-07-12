<div id="section--3" class="pgWidth section">
	<div class="section--box">		
		<h2 class="section--heading"> Our Work </h2>
		
		<div class="section--menu">
			<ul>
				<li><a href="#" class="selected">All</a></li>
				<li><a href="#">Web Design</a></li>
				<li><a href="#">Corporate Branding</a></li>
				<li><a href="#">Media</a></li>
				<li><a href="#">Print</a></li>
				<li><a href="#">Web Development</a></li>
			</ul>
			
			<div class="mobile--nav">
				<select>
					<option value="all" selected>All</option>
					<option value="webDesign">Web Design</option>
					<option value="webDesign">Corporate Branding</option>
					<option value="webDesign">Media</option>
					<option value="webDesign">Print</option>
					<option value="webDesign">Web Development</option>
				</select>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<?php $our_work = new WP_QUERY(array(
								'page_id'	=> OUR_WORK
								));
		if($our_work->have_posts()): $our_work->the_post();
			echo '<div id="tiles">';
						the_content();
			echo '</div>';
		endif;
		?>
		
		<script>
		var container = document.querySelector('#tiles');
		var msnry = new Masonry( container, {
		// options
		gutter: 3,
		itemSelector: 'img'
		});
		</script>
		
		<div class="clear"></div>
	</div>
</div>