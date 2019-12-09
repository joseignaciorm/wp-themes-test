<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);
	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;


/**
 * Register Widgets Left, Right and Social Media
 */

if (!function_exists('foundationpress_sidebar_widgets_footer')) :
	function foundationpress_sidebar_widgets_footer() {
		/* *** Footer left del menu navegación *** */
		register_sidebar(
			array(
				'id'            => 'footer-left-widgets',
				'name'          => __('Footer columna izquierda', 'foundationpress'),
				'description'   => __('Drag widgets to this sidebar container.', 'foundationpress'),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		/* *** Footer right - del menu navegación *** */
		register_sidebar(
			array(
				'id'            => 'footer-right-widgets',
				'name'          => __('Footer columna derecha', 'foundationpress'),
				'description'   => __('Drag widgets to this footer container', 'foundationpress'),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		/* *** Footer col dos - logos *** */
		register_sidebar(
			array(
				'id'            => 'footer-logos-widgets',
				'name'          => __('Footer - Logos lado derecho', 'foundationpress'),
				'description'   => __('Drag widgets to this footer container', 'foundationpress'),
				'before_widget' => '<article id="%1$s" class="widget %2$s footer__right--image">',
				'after_widget'  => '</article>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		/* *** Footer col dos - Descripción *** */
		register_sidebar(
			array(
				'id'            => 'footer-description-widgets',
				'name'          => __('Footer - Descripción', 'foundationpress'),
				'description'   => __('Drag widgets to this footer container', 'foundationpress'),
				'before_widget' => '<article id="%1$s" class="widget %2$s footer__right--description">',
				'after_widget'  => '</article>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		/* *** Footer After - Menú Redes sociales *** */
		register_sidebar(
			array(
				'id'            => 'footer-after-social-media',
				'name'          => __('Footer After - Social Media', 'foundationpress'),
				'description'   => __('Drag widgets to this footer container', 'foundationpress'),
				'before_widget' => '<article id="%1$s" class="widget %2$s footer__right--description">',
				'after_widget'  => '</article>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

	}

	add_action('widgets_init', 'foundationpress_sidebar_widgets_footer');
endif;

