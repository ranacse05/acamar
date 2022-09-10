<?php
/**
 * Theme Functions.
 *
 * @package ACAMAR
 */


if ( ! defined( 'ACAMAR_DIR_PATH' ) ) {
	define( 'ACAMAR_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ACAMAR_DIR_URI' ) ) {
	define( 'ACAMAR_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'ACAMAR_BUILD_URI' ) ) {
	define( 'ACAMAR_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'ACAMAR_BUILD_PATH' ) ) {
	define( 'ACAMAR_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'ACAMAR_BUILD_JS_URI' ) ) {
	define( 'ACAMAR_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'ACAMAR_BUILD_JS_DIR_PATH' ) ) {
	define( 'ACAMAR_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'ACAMAR_BUILD_IMG_URI' ) ) {
	define( 'ACAMAR_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'ACAMAR_BUILD_CSS_URI' ) ) {
	define( 'ACAMAR_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'ACAMAR_BUILD_CSS_DIR_PATH' ) ) {
	define( 'ACAMAR_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'ACAMAR_BUILD_LIB_URI' ) ) {
	define( 'ACAMAR_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

if ( ! defined( 'ACAMAR_ARCHIVE_POST_PER_PAGE' ) ) {
	define( 'ACAMAR_ARCHIVE_POST_PER_PAGE', 9 );
}

if ( ! defined( 'ACAMAR_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
	define( 'ACAMAR_SEARCH_RESULTS_POST_PER_PAGE', 9 );
}

require_once ACAMAR_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once ACAMAR_DIR_PATH . '/inc/helpers/template-tags.php';

function ACAMAR_get_theme_instance() {
	\ACAMAR_THEME\Inc\ACAMAR_THEME::get_instance();
}

ACAMAR_get_theme_instance();



