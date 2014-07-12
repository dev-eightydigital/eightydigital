<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/contact-form/form.css">

<?php 
echo '<script type="text/javascript">'.
	'var sendmessage_file = "'. get_bloginfo('template_url') .'/sendmessage.php'. '"'.
	'</script>';

$contact = new WP_QUERY(array(
			'page_id' 		=> GET_IN_TOUCH
		));

if($contact->have_posts()): $contact->the_post();
?>
<div id="section--7" class="pgWidth section">
	<div class="section--box">		
		<h2 class="section--heading"> <?php the_title()?> </h2>
		<p class="section--info"> <?php the_field('description'); ?> </p>
		
		<div class="row-fluid">
			<div class="span5 right_contact_infos contactCols">
				<?php the_field('right_contact_infos'); ?>
			</div>
			<div class="span7 contactCols">
				<div id="contact_form_here"><?php include (get_bloginfo('template_url').'/contact-form/form.php')?></div>
				
				<div id="form--contact"><?php //the_content(); ?></div>
				<!--<script>
				jQuery('#contact_form_here').load('<?php //bloginfo('template_url')?>/contact-form/form.php');
				</script>-->
				<script type="text/javascript" src="<?php echo get_bloginfo('template_url')?>/contact-form/form.js"></script>
			</div>
		</div>
	</div>
	
</div>
<?php endif; ?>