<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'switch_style_panel_display'        => array(
		'type'  => 'switch',
		'value' => true,
		'label' => __('Frontend Style Switcher', 'fw'),
		'desc'  => __('Enable frontend style switcher', 'fw'),
		'left-choice' => array(
			'value' => true,
			'label' => __('Yes', 'fw'),
		),
		'right-choice' => array(
			'value' => false,
			'label' => __('No', 'fw'),
		),
	),
	'switch_style_panel_description'    => array(
		'type'  => 'text',
		'value' => 'Choose a style:',
		'label' => __('Label', 'fw'),
		'desc'  => __('The text that will be displayed at the top of the panel.', 'fw')
	)
);