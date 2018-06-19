<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
     
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css"/> 
	<!--<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"/> -->
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid border-b">
		  <div class="container rw">
			
			<div class="navbar-header">
			  <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>-->
			  <?php get_template_part( 'template-parts/header/header', 'image' ); ?>
			</div>
			<div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
			</div><!-- .wrap -->
			  </div><!-- /.container-fluid -->
		</div><!-- /.container-fluid -->
		</nav>
			
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
