<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wati-io
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<nav class="footer-menu">
			<?php
			// Display the footer menu
			wp_nav_menu(array(
				'theme_location' => 'footer-menu',
				'container' => false,
			));
			?>
		</nav>
		<div class="footer-text">
			<p class="text-center">&copy; <?php echo date('Y'); ?> Wati. Clare.ai Limited. All rights reserved.</p>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>