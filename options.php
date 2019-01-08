<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type' => 'text',
		'label' => __('Element Title', 'fw'),
		'desc' => __('Set the Element title', 'fw')
	),
    'content' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content Area', 'fw' ),
        'desc'   => __( 'Add content for element block content area.', 'fw' ),
        'size' => 'large',
        'wpautop' => false,
        'shortcodes' => true
    ),
    'slide_image' => array(
        'type' => 'upload',
        'label' => __('Image', '{domain}'),
        'desc' => __('Add element block image from here', '{domain}'),
         'images_only' => true
    ),
	'css_class' => array(
		'type' => 'text',
		'label' => __('CSS Class', 'fw'),
		'desc' => __('Add class to widget', 'fw')
	),
);
