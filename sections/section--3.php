<?php 
define(ALL, 37);
define(WEB_DESIGN, 165);
?>

<div id="section--3" class="pgWidth section">
	<div class="section--box">		
		<h2 class="section--heading"> Our Work </h2>
		
		<div class="section--menu">
			<ul>
				<li><a href="#" class="selected" data-pagelink='<?php echo get_page_link(ALL);?>'>All</a></li>
				<li><a href="#" data-pagelink='<?php echo get_page_link(WEB_DESIGN);?>'>Web Design</a></li>
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
		
		<div id="ajax-container">
			<div class="masonry-container">
				<div id="loadHere"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<script>
jQuery(function($){
	
	/*request.done(function(html){
			$('#loadHere').html(html);
		});*/
		
		var pagelink = $('.section--menu ul li:nth-child(1) a').attr('data-pagelink');
		show_loadingImage();
		ajaxLoader(pagelink);
		
		var secNavItem = '.section--menu ul li a';
		
	$(secNavItem).click(function(event){
		event.preventDefault();
		
		$(secNavItem).removeClass('selected');
		$(this).addClass('selected');
		show_loadingImage();
		
		pagelink = $(this).attr('data-pagelink');
		ajaxLoader(pagelink);
		});
	
function show_loadingImage(){
	$('#loadHere').html('<center class="pgWidth loadingImage ion-loading-a"></center>');
	}
function hide_loadingImage(){
	$('.loadingImage').hide();
	}
	
function ajaxLoader(pagelink){
	$.getScript("<?php bloginfo('template_url')?>/js/masonry.pkgd.min.js")
				.done(function(){
					
					$.ajax({
						url: pagelink,
						success: function(html){
							
							hide_loadingImage();
							div = $(html).find('#ajaxStarter');
							
							$('#loadHere').html(html);
							
							}//success
					});//ajax
				});//.done
				
		/*$.ajax({
		url: pagelink,
		success: function(html){
			$.getScript("<?php //bloginfo('template_url')?>/js/masonry.pkgd.min.js")
				.done(function(){
					hide_loadingImage();
					div = $(html).find('#ajaxStarter');
					
					$('#loadHere').html(html);
					});//.done
			}//success
		});//ajax*/
		
	}//function ajaxLoader

});
</script>
<!--<script>jQuery('#loadHere').load("<?php echo get_page_link(37);?> #ajaxStarter");</script>-->