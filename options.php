<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    '_txt_title' => array(
        'type' => 'text',
        'label' => __('Element Title', 'fw'),
        'desc' => __('Set the Element title', 'fw')
    ),
    '_sc_content' => array(
        'type' => 'wp-editor',
        'label' => __('Content Area', 'fw'),
        'desc' => __('Add content for element block content area.', 'fw'),
        'size' => 'large',
        'wpautop' => false,
        'editor_height' => 400,
        'shortcodes' => true
    ),
    '_img_slide_image' => array(
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
    'data_attr' => array(
        'type' => 'addable-box',
        'label' => __('Data Attributes', '{domain}'),
        'desc' => __('Data Attributes', '{domain}'),
        'template' => '{{- attribute }}',
        'box-options' => array(
            'attribute' => array( 'type' => 'text' ),
            'value' => array( 'type' => 'text' ),
        ),
    )
);
