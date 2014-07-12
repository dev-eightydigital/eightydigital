<?php
//pages with their page ids
define('INTRO', 35);
define('WHO_WE_ARE', 11);
define('OUR_WORK', 37);
define('GET_IN_TOUCH', 5);

//Template page 
define('MORE_POSTS_PAGE', 104);

//services category : for services section
define('CAT_SERVICES', 2); 
define('CAT_TEAM', 3); 

//wp 'featured image' theme support
add_theme_support( 'post-thumbnails' ); 
//make adminbar position fixed
add_action('wp_head', 'custom_styles');

function custom_styles() {
  echo '<style type="text/css">
   html #wpadminbar{
	position: fixed !important;
	z-index: 5000 !important; }
  </style>';
}


function queue_jquery(){
	//wp_deregister_script('jquery');
	//wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1', true);
	//wp_enqueue_script('jquery');
	?><script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><?php
	}

function home_scripts(){
	if( is_front_page() ){
		wp_enqueue_script('main', get_bloginfo('template_url') . '/js/main.js', array('jquery'), '1.10.2', true);
		wp_enqueue_script('scrollToURL', get_bloginfo('template_url') . '/js/scrollToURL.js', array('jquery'), '1.10.2', true);
		}
	}

function scroller_script(){
	wp_enqueue_script('scroller', get_bloginfo('template_url') . '/js/scroller.js', array('jquery'), '1.10.2', true);
	}

function subpages_nav_res(){
	wp_enqueue_script('nav', get_bloginfo('template_url') . '/js/nav.js', array('jquery'), '1.10.2', true);
	}

function gallery_masonry(){
	//wp_enqueue_script('masonry_min', get_bloginfo('template_url') . '/js/masonry.pkgd.min.js', array('jquery'), '1.10.2', true);
	}
add_action('wp_head', 'queue_jquery');
add_action('wp_head', 'home_scripts');
add_action('wp_head', 'gallery_masonry'); 
add_action('wp_head', 'scroller_script');
add_action('wp_head', 'subpages_nav_res');

add_image_size( 'thumbnail-1', 575, 270 );//featured image size 1
add_image_size( 'thumbnail-2', 578, 368 );//featured image size 2

function declare_this(){
	?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/masonry.pkgd.min.js"></script>
	<?php
	}
?>