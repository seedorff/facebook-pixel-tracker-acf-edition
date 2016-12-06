<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5819e26f5fc25',
	'title' => 'Facebook pixel settings',
	'fields' => array (
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_5819e28aa6174',
			'label' => 'Facebook pixel tracking code',
			'name' => 'facebook_pixel_tracking_code',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'fb_pixel_options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5819e306c2683',
	'title' => 'Facebook pixel tracking events',
	'fields' => array (
		array (
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'field_5819e61032a1f',
			'label' => 'Enable for this page',
			'name' => 'enable_for_this_page',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'sub_fields' => array (
				array (
					'multiple' => 0,
					'allow_null' => 0,
					'choices' => array (
						'ViewContent' => 'ViewContent',
						'Search' => 'Search',
						'AddToCart' => 'AddToCart',
						'AddToWishlist' => 'AddToWishlist',
						'InitiateCheckout' => 'InitiateCheckout',
						'AddPaymentInfo' => 'AddPaymentInfo',
						'Lead' => 'Lead',
						'CompleteRegistration' => 'CompleteRegistration',
					),
					'default_value' => array (
						0 => 'PageView',
					),
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'return_format' => 'value',
					'key' => 'field_5819e41f90e4e',
					'label' => 'Standard event',
					'name' => 'standard_event',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add event',
			'collapsed' => '',
			'key' => 'field_5819e31590e4b',
			'label' => 'Facebook pixel tracking events',
			'name' => 'facebook_pixel_tracking_events',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5819e61032a1f',
						'operator' => '=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
?>