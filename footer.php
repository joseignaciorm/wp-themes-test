<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="grid-container full footer-container">
	<section class="grid-container main__footer__section M-t-b">
		<!-- *** Widgets col 1 *** -->
		<article class="footer__left">
			<h4 class="footer__left--title">
				<?php _e('Narrativas Tansmediales', 'nar-trans'); ?>
			</h4>
			<!-- Menú izquierda -->
			<nav class="footer__left--nav-menu">
				<?php dynamic_sidebar('footer-left-widgets'); ?>
				<?php dynamic_sidebar('footer-right-widgets'); ?>
			</nav>
		</article>

		<!-- *** Widgets col 2 *** -->
		<article class="footer__right">
			<div class="footer__right--item-1">
				<?php dynamic_sidebar('footer-logos-widgets'); ?>
			</div>
			<div class="footer__right--item-2">
				<?php dynamic_sidebar('footer-description-widgets'); ?>
			</div>
		</article>

	</section>

	<section class="main__footer__after">
		<div class="grid-container">
			<nav class="social__media__nav--menu">
				<?php dynamic_sidebar('footer-after-social-media'); ?>
			</nav>

			<?php si2_icon('<span class="fab fa-facebook-square"></span>'); ?>
			<span class="fab fa-facebook-square"></span>
		</div>
	</section>

	<!--
	<div class="footer-grid">
		<?php //dynamic_sidebar('footer-widgets');
		?>
	</div>
-->

</footer>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>
