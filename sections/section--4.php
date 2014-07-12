<div id="section--4" class="pgWidth section">
	<div class="section--box">		
		<h2 class="section--heading"> What We do </h2>
		<ul class="services">
		<?php $services = new WP_QUERY(array(
								'post_type' => 'post',
								'cat'		=> CAT_SERVICES,
								'meta_key'	=> 'order',
								'orderby'	=> 'meta_value_num',
								'order'		=> 'ASC'
								));
		if($services->have_posts()): while($services->have_posts()): $services->the_post(); ?>
			<li>
				<?php if(has_post_thumbnail()){?>
					<div class="icon-wrapper"><?php the_post_thumbnail('full')?></div>
				<?php }?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</li>
		<?php endwhile; endif; ?>
			<!--
			<li>
				<div class="icon-wrapper"><div class="icon-creativity icon"></div></div>
				<h3>Creativity</h3>
				<ul>
					<li>Brand Strategy</li>
					<li>Art Direction</li>
					<li>Web Design</li>
					<li>Graphic Design</li>
					<li>Responsive Design</li>
					<li>Interaction design</li>
					<li>Accessibility design</li>
					<li>Wire framing</li>
					<li>UX/UI</li>
				</ul>
			</li>
			<li>
				<div class="icon-wrapper"><div class="icon-marketing icon"></div></div>
				<h3>Marketing</h3>
				<ul>
					<li>SEO/SEM</li>
					<li>Market Research</li>
					<li>Integrated Campaigns</li>
					<li>Digital Marketing Strategy</li>
					<li>e-Newsletters</li>
				</ul>
			</li>
			<li>
				<div class="icon-wrapper"><div class="icon-social icon"></div></div>
				<h3>Social Media</h3>
				<ul>
					<li>SEO/SEM</li>
					<li>Social Media Strategy</li>
					<li>Facebook Applications</li>
					<li>Community Engagement</li>
				</ul>
			</li>
		
		<li>
			<div class="icon-wrapper"><div class="icon-production icon"></div></div>
			
			<h3>Production</h3>
			<ul>
				<li>SEO/SEM</li>
				<li>Music &amp; Sound Design</li>
				<li>Video Production</li>
				<li>Photography</li>
			</ul>
			
		</li>
		<li>
			<div class="icon-wrapper"><div class="icon-technology icon"></div></div>
			
			<h3>Technology</h3>
			<ul>
				<li>Responsive Web Development</li>
				<li>WCAG2.0 Compliance (Accessibility)</li>
				<li>CMS systems</li>
				<li>OpenCart</li>
				<li>Magento</li>
				<li>PHP</li>
				<li>.NET</li>
				<li>Facebook Applications</li>
			</ul>
			
		</li>
		<li>
			<div class="icon-wrapper"><div class="icon-support icon"></div></div>
		
			<h3>Support</h3>
			<ul>
				<li>Support Desk</li>
				<li>Training</li>
			</ul>
			
		</li>-->
		</ul>
		<div class="clear"></div>
	</div>
</div>