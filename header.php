<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); // leave this here: it's a hook for plugins ?>
</head>
<body <?php body_class(); ?>>

<div id="header">
	
	<h1 class="site-name"><a href="<?php echo get_option('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
	<p class="site-description"><?php bloginfo('description'); ?></p>

</div>

<hr />
