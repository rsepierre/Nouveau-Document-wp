<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name');?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ;?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/library/normalize.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
 
</head>
<body <?php body_class(); ?> >

<!-- Masthead -->
<header  role="banner" id="site-header">
	<div class="header-element small headerlogo">
	<a href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name');?> logotype"/></a>
	</div><div class="header-element small headername">
	<a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
	</div><div class="header-element small description">
	<p><?php bloginfo('description'); ?></p>
	</div>
</header>

<!-- Main Naviguation -->

<nav id="main-nav" role="navigation">
	
    <ul class="Top-menu">
		<li class="small sitename"><a href="/" ><h2><?php bloginfo('name'); ?></h2></a>
		</li><?php wp_nav_menu( array( 
		'theme_location' => 'Top',
		'container' => false,
		'items_wrap' => '%3$s'
		) ); ?><li class="btn button-left static-btn">
		</li><li class="btn button-right grid-btn current">
		</li><li class="btn button menu-btn ">
		</li><li class="btn button search-btn ">
		</li>
    </ul>
	<?php get_search_form(); ?>
	
</nav>