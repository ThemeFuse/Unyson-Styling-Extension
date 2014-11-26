<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var  string $id
 * @var  array $option
 * @var  array $data
 * @var  array $settings
 * @var  array $extension
 */
{
	$wrapper_attr = $option['attr'];

	unset(
	$wrapper_attr['value'],
	$wrapper_attr['name']
	);
}
echo '<div ' . fw_attr_to_html($wrapper_attr) . '>';
	if ( ! empty( $option['predefined'] ) ) {
		fw_render_view( $extension['path'] . '/includes/option-types/style/views/predefined.php', array(
			'id'     => $id,
			'option' => $option,
			'data'   => $data
		), false );
	}
	if ( ! isset( $option['preview'] ) || $option['preview'] !== false ) {
		fw_render_view( $extension['path'] . '/includes/option-types/style/views/preview.php', array(
			'id'     => $id,
			'option' => $option,
			'data'   => $data
		), false );
	}
	fw_render_view( $extension['path'] . '/includes/option-types/style/views/settings.php', array(
		'id'       => $id,
		'option'   => $option,
		'data'     => $data,
		'settings' => $settings
	), false );
echo '</div>';