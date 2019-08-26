<?php

if ( ! function_exists( 'intopeople_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function intopeople_setup() {
		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'intopeople', get_template_directory() . '/languages' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'top'    => __( 'Top Menu', 'intopeople' ),
			'social' => __( 'Social Links Menu', 'intopeople' ),
		) );

		/**
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( 'editor-style.css' );

		/**
		 * Load regular editor styles into the new block-based editor.
		 */
		add_theme_support( 'editor-styles' );
	}
endif; // intopeople_setup

add_action( 'after_setup_theme', 'intopeople_setup' );
