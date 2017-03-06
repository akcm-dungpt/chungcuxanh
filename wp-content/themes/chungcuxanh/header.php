<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SociallyViral
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--iOS/android/handheld specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>" />
	<meta itemprop="url" content="<?php echo site_url(); ?>" />
	<?php if ( is_singular() ) { ?>
	<meta itemprop="creator accountablePerson" content="<?php $user_info = get_userdata($post->post_author); echo $user_info->first_name.' '.$user_info->last_name; ?>" />
	<?php }
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="main-container">
			<div class="site-branding">
				<img src="<?php echo site_url(); ?>/wp-content/themes/chungcuxanh/images/banner.jpg" alt="" />
			</div><!-- .site-branding -->
			<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
				<?php if ( has_nav_menu( 'primary' ) ) { ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
				<?php } else { ?>
					<ul class="menu clearfix">
						<?php wp_list_categories('title_li='); ?>
					</ul>
				<?php } ?>
			</nav><!-- #site-navigation -->
            <?php 
                //echo do_shortcode('[smartslider2 slider="1"]');
            ?>
			<div id="content" class="site-content">