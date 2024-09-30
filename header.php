<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wati-io
 */

/**
 *  Header Right Button Link Values
 * */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="description" content="Welcome to my awesome website where I share great content about tech and lifestyle.">
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:description" content="<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php the_title(); ?>" />
	<meta name="twitter:description" content="<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>" />
	<meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
	<meta name="keywords" content="wati, wahtsapp" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wati-io'); ?></a>

		<header id="masthead" class="site-header ">
			<div class="container">
				<div class="site-branding aligncenter">
					<div class="site-branding-inner header-image">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$wati_io_description = get_bloginfo('description', 'display');
						if ($wati_io_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $wati_io_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
					</div><!-- .header-image -->

					<div class="site-branding-inner header-menu">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="48.69" height="37.87" viewBox="0 0 48.69 37.87">
									<path id="_90_-_Menu" data-name="90 - Menu" d="M5.205,43.37h43.28a2.7,2.7,0,1,0,0-5.41H5.205a2.705,2.705,0,1,0,0,5.41ZM23.238,27.14H48.485a2.7,2.7,0,0,0,0-5.41H23.238a2.7,2.7,0,1,0,0,5.41ZM5.205,10.91h43.28a2.705,2.705,0,0,0,0-5.41H5.205a2.705,2.705,0,1,0,0,5.41Z" transform="translate(-2.5 -5.5)" fill="#00e785"></path>
								</svg></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div><!-- .header-menu -->
				</div><!-- .site-branding -->
			</div><!-- .container -->
		</header><!-- #masthead -->