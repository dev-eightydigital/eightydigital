<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<title><?php bloginfo('name')?></title>
<link rel="icon" 
      type="image/png" 
      href="<?php bloginfo('template_url')?>/images/favicon.png" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">

<link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">

<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/bootstrap/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url')?>/bootstrap/bootstrap-responsive.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a id="pageTop"></a>
<?php
if ( is_user_logged_in() ) {
	echo '<script>var userStatus = true;</script>';
} else {
	echo '<script>var userStatus = false;</script>';
}
?>

<div class="video-bg"></div>
<!-- video background -->
<video class="video-bg" autoplay loop id="bgvid">
	<source src="<?php bloginfo('template_url')?>/videos/Eighty.mp4" type="video/mp4">
	<source src="<?php bloginfo('template_url')?>/videos/Eighty.ogv" type="video/ogv">
	<source src="<?php bloginfo('template_url')?>/videos/Eighty.webm" type="video/webm">
	
	<embed src="<?php bloginfo('template_url')?>/videos/Eighty.flv" type="application/x-shockwave-flash" width="1024" height="798" allowscriptaccess="always" allowfullscreen="true"></embed>
</video>
<div id="overlay"></div>
<!-- \\ video background -->
<div class="mobile"><i class="fa fa-bars"></i></div>
<header class="<?= ( !is_home() )? 'not_home' : 'site_home' ;?> ">
	<div class="inner-header">
		<nav>
			<div class="logo"> <a href="<?php bloginfo('siteurl')?>" data-target="section--1" class="home"> <img src="<?php bloginfo('template_url')?>/images/logo.png" alt="eightydigital"/> </a> </div>
			<div class="logo2"> <a href="<?php bloginfo('siteurl')?>" data-target="section--1" class="home"> <img src="<?php bloginfo('template_url')?>/images/logo-sml.png" alt="eightydigital"/> </a> </div>
			<!--
			note: the script works with the menu's id and "sec" on the href
				this works on homepage but user on another page...
				so click menu item, loads homepage then go to the section
			-->
			<ul class="menu">
				<li> <a data-target="section--2" id="who-we-are" href="<?php bloginfo('siteurl')?>?sec=who-we-are"> <span>Who we are</span> </a> </li>
				<li> <a data-target="section--3" id="our-work" href="<?php bloginfo('siteurl')?>?sec=our-work"> <span>Our Work</span> </a> </li>
				<li> <a data-target="section--4" id="what-we-do" href="<?php bloginfo('siteurl')?>?sec=what-we-do"> <span>What we do</span> </a> </li>
				<li> <a data-target="section--5" id="our-team" href="<?php bloginfo('siteurl')?>?sec=our-team"> <span>Our Team</span> </a> </li>
				<li> <a data-target="section--6" id="blog" href="<?php bloginfo('siteurl')?>?sec=blog"> <span>Blog</span> </a> </li>
				<li> <a data-target="section--7" id="get-in-touch" href="<?php bloginfo('siteurl')?>?sec=get-in-touch"> <span>Get in touch</span> </a> </li>
			</ul>
		</nav>
		
		<div class="clear"></div>
	</div>
</header>