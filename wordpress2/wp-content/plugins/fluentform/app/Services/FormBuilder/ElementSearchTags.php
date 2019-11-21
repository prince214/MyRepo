<?php

/**
 * element_search_tags
 *
 * Returns an array of countries and codes.
 *
 * @author      WooThemes
 * @category    i18n
 * @package     fluentform/i18n
 * @version     2.5.0
 */


$element_search_tags = array(
	'input_text'          => array(
		'text',
		'input',
		'simple text',
		'mask input'
	),
	'input_email'         => array(
		'input',
		'email',
	),
	'input_name'          => array(
		'input',
		'name',
		'full name',
		'first name',
		'last name',
		'middle name',
	),
	'textarea'            => array(
		'text',
		'textarea',
		'description',
	),
	'address'             => array(
		'address',
	),
	'select_country'      => array(
		'country',
	),
	'input_number'        => array(
		'input',
		'number',
	),
	'select'              => array(
		'select',
		'dropdown',
		'multiselect',
	),
	'input_radio'         => array(
		'input',
		'radio',
		'check',
	),
	'input_checkbox'      => array(
		'input',
		'checkbox',
		'select',
	),
	'input_url'           => array(
		'input',
		'url',
		'website',
	),
	'input_password'      => array(
		'input',
		'password',
	),
	'input_date'          => array(
		'date',
		'time',
		'calendar',
	),
	'input_file'          => array(
		'file',
	),
	'input_image'         => array(
		'image',
		'file',
	),
	'input_repeat'        => array(
		'input',
		'repeat',
	),
	'input_hidden'        => array(
		'input',
		'hidden',
	),
	'section_break'       => array(
		'section',
		'break',
		'textblock',
	),
	'recaptcha'           => array(
		'recaptcha',
	),
	'custom_html'         => array(
		'custom html',
	),
	'shortcode'           => array(
		'shortcode',
	),
	'terms_and_condition' => array(
		'terms_and_condition',
		'agrement',
		'checkbox',
	),
	'action_hook'         => array(
		'action hook',
	),
	'form_step'           => array(
		'steps',
	),
	'container'           => array(
		'container',
		'columns',
		'two',
		2,
		'three',
		3,
	),
	'ratings' => array(
		'star',
		'rate',
		'feedback',
		'ratings'
	),
	'tabular_grid' => array(
		'tabular grid',
		'checkable grid'
	),
	'gdpr_agreement' => array(
		'gdpr agreement'
	)
);

return apply_filters( 'fluent_editor_element_search_tags', $element_search_tags );