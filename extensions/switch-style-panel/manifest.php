<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Switch Style Panel', 'fw' );
$manifest['description'] = __( 'Show on the front-end a panel that allows the user to make the switch between predefined styles.', 'fw' );
$manifest['version'] = '1.0.0';
$manifest['display'] = 'styling';
$manifest['standalone']   = true;