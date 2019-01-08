<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Element Block', 'fw' ),
	'description' => __( 'Add a base v2 element block', 'fw' ),
	'tab'         => __( 'Version2 Elements', 'fw' ),
	'title_template' => '{{-title}}{{ if (o.text_box_title) { }} : <strong>{{= o.text_box_title}}</strong>{{ } }}',
    'popup_size' 	=> 'large'
);
