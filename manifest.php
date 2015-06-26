<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Styling', 'fw' );
$manifest['description'] = __( "This extension lets you control the website visual style. Starting from predefined styles to changing specific fonts and colors across the website.", 'fw' );
$manifest['version']     = '1.0.4';
$manifest['display']     = true;
$manifest['standalone']  = true;

$manifest['github_update'] = 'ThemeFuse/Unyson-Styling-Extension';
