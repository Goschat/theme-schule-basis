<?php
/**
 * Basis-Theme: nur Darstellung. Keine Logik, keine Abfragen, keine Härtung (die liegt im Plugin).
 *
 * @package SchulBank\Basis
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'wp_enqueue_scripts',
	static function (): void {
		$version = wp_get_theme( 'theme-schule-basis' )->get( 'Version' );
		wp_enqueue_style( 'schule-basis', get_template_directory_uri() . '/assets/css/basis.css', array(), $version );
	}
);

add_action(
	'after_setup_theme',
	static function (): void {
		add_editor_style( 'assets/css/basis.css' );
		remove_theme_support( 'core-block-patterns' );
	}
);

add_action(
	'init',
	static function (): void {
		register_block_pattern_category( 'schule', array( 'label' => 'Schule' ) );
	}
);
