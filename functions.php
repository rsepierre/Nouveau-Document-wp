<?php 
function load_js() { ?>

	<!-- Loading Jquery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<!-- Load sticky (for navigation bar) -->
		<script src="<?php bloginfo('template_url'); ?>/library/sticky.js"></script>
		<script>
			$(window).load(function(){
				$("#main-nav").sticky({topSpacing:0});
			});
		</script>
	<!-- load masonry -->
	<script src="<?php bloginfo('template_url'); ?>/library/masonry.js"></script>
	<!-- load ScrollTo -->
	<script src="<?php bloginfo('template_url'); ?>/library/scrollto.js"></script>
	<!-- load Custom Script (Custom parameters and behavior of js Libraries) -->
	<script src="<?php bloginfo('template_url'); ?>/script.js"></script>
	<?php 
}

$header = array(
	'default-image' => get_template_directory_uri() . '/images/header.png',
	'uploads' => true
	);
	
add_theme_support( 'post-thumbnails' );
	
add_theme_support( 'custom-header', $header);

add_theme_support( ‘menus’ );

register_nav_menus( array(
        'Top' => 'Main navigation',
    ) );