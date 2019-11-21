<?php

return array(
	'general' => array (
        'input_name' => array (
            'index' => 0,
            'element' => 'input_name',
            'attributes' => array (
                'name' => 'names',
                'data-type' => 'name-element'
            ),
            'settings' => array (
                'container_class' => '',
                'admin_field_label' => 'Name',
                'conditional_logics' => array (),
                'label_placement' => 'top'
            ),
            'fields' => array (
                'first_name' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'first_name',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('First Name', 'fluentform'),
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('First Name', 'fluentform'),
                        'help_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'middle_name' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'middle_name',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('Middle Name', 'fluentform'),
                        'required' => false,
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('Middle Name', 'fluentform'),
                        'help_message' => '',
                        'error_message' => '',
                        'visible' => false,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'last_name' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'last_name',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('Last Name', 'fluentform'),
                        'required' => false,
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('Last Name', 'fluentform'),
                        'help_message' => '',
                        'error_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
            ),
            'editor_options' => array (
                'title' => 'Name Fields',
                'element' => 'name-fields',
                'icon_class' => 'ff-edit-name',
                'template' => 'nameFields'
            ),
        ),
        'input_email' => array (
            'index' => 1,
            'element' => 'input_email',
            'attributes' => array (
                'type' => 'email',
                'name' => 'email',
                'value' => '',
                'id' => '',
                'class' => '',
                'placeholder' => 'Email Address',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Email', 'fluentform'),
                'label_placement' => '',
                'help_message' => '',
                'admin_field_label' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                    'email' => array (
                        'value'   => true,
                        'message' => __('This field must contain a valid email', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Email Address', 'fluentform'),
                'icon_class' => 'ff-edit-email',
                'template' => 'inputText'
            ),
        ),
        'input_text' => array (
        	'index' => 2,
            'element' => 'input_text',
            'attributes' => array (
                'type' => 'text',
                'name' => 'input_text',
                'value' => '',
                'class' => '',
                'placeholder' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Text Input', 'fluentform'),
                'label_placement' => '',
                'admin_field_label' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Simple Text', 'fluentform'),
                'icon_class' => 'ff-edit-text',
                'template' => 'inputText'
            )
        ),
        'input_mask' => array (
        	'index' => 2,
            'element' => 'input_text',
            'attributes' => array (
                'type' => 'text',
                'name' => 'input_mask',
                'data-mask' => '',
                'value' => '',
                'class' => '',
                'placeholder' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Mask Input', 'fluentform'),
                'label_placement' => '',
                'admin_field_label' => '',
                'help_message' => '',
                'temp_mask' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Mask Input', 'fluentform'),
                'icon_class' => 'ff-edit-mask',
                'template' => 'inputText'
            )
        ),
        'textarea' => array (
        	'index' => 3,
            'element' => 'textarea',
            'attributes' => array (
                'name' => 'description',
                'value' => '',
                'id' => '',
                'class' => '',
                'placeholder' => '',
                'rows' => 4,
                'cols' => 2,
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Textarea', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array ()
            ),
            'editor_options' =>  array (
                'title' => __('Text Area', 'fluentform'),
                'icon_class' => 'ff-edit-textarea',
                'template' => 'inputTextarea'
            ),
        ),
        'address' => array (
            'index' => 4,
            'element' => 'address',
            'attributes' => array (
                'id' => '',
                'class' => '',
                'name' => 'address1',
                'data-type' => 'address-element'
            ),
            'settings' => array (
                'label' => __('Address', 'fluentform'),
                'admin_field_label' => 'Address',
                'conditional_logics' => array (),
            ),
            'fields' => array (
                'address_line_1' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'address_line_1',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('Address Line 1', 'fluentform'),
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('Address Line 1', 'fluentform'),
                        'admin_field_label' => '',
                        'help_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'address_line_2' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'address_line_2',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('Address Line 2', 'fluentform'),
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('Address Line 2', 'fluentform'),
                        'admin_field_label' => '',
                        'help_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'city' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'city',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('City', 'fluentform'),
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('City', 'fluentform'),
                        'admin_field_label' => '',
                        'help_message' => '',
                        'error_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'state' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'state',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('State', 'fluentform'),
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('State', 'fluentform'),
                        'admin_field_label' => '',
                        'help_message' => '',
                        'error_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'zip' => array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'name' => 'zip',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => __('Zip', 'fluentform'),
                        'required' => false,
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('Zip Code', 'fluentform'),
                        'admin_field_label' => '',
                        'help_message' => '',
                        'error_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'editor_options' =>  array (
                        'template' => 'inputText'
                    ),
                ),
                'country' => array (
                    'element' => 'select_country',
                    'attributes' => array (
                        'name' => 'country',
                        'value' => '',
                        'id' => '',
                        'class' => '',
                        'placeholder' => '',
                        'required' => false,
                    ),
                    'settings' => array (
                        'container_class' => '',
                        'label' => __('Country', 'fluentform'),
                        'admin_field_label' => '',
                        'help_message' => '',
                        'error_message' => '',
                        'visible' => true,
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            ),
                        ),
                        'country_list' => array (
                            'active_list' => 'all',
                            'visible_list' => array (),
                            'hidden_list' => array (),
                        ),
                        'conditional_logics' => array (),
                    ),
                    'options' => array (
                        'BD' => 'Bangladesh',
                        'US' => 'US of America',
                    ),
                    'editor_options' => array (
                        'title' => 'Country List',
                        'element' => 'country-list',
                        'icon_class' => 'icon-text-width',
                        'template' => 'selectCountry'
                    ),
                ),
            ),
            'editor_options' => array (
                'title' => __('Address Fields', 'fluentform'),
                'element' => 'address-fields',
                'icon_class' => 'ff-edit-address',
                'template' => 'addressFields'
            ),
        ),
        'input_number' => array (
            'index' => 6,
            'element' => 'input_number',
            'attributes' => array (
                'type' => 'number',
                'name' => 'numeric-field',
                'value' => '',
                'id' => '',
                'class' => '',
                'placeholder' => ''
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Numeric Field', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                    'numeric' => array (
                        'value'   => true,
                        'message' => __('This field must contain numeric value', 'fluentform'),
                    ),
                    'min' => array (
                        'value'   => '',
                        'message' => __('Minimum value is ', 'fluentform'),
                    ),
                    'max' => array (
                        'value'   => '',
                        'message' => __('Maximum value is ', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
                'calculation_settings' => array(
                    'status' => false,
                    'formula' => ''
                ),
            ),
            'editor_options' => array (
                'title' => __('Numeric Field', 'fluentform'),
                'icon_class' => 'ff-edit-numeric',
                'template' => 'inputText'
            ),
        ),
        'select' => array (
        	'index' => 7,
            'element' => 'select',
            'attributes' => array (
                'name' => 'dropdown',
                'value' => '',
                'id' => '',
                'class' => '',
            ),
            'settings' => array (
                'label' => __('Dropdown', 'fluentform'),
                'admin_field_label' => '',
                'help_message' => '',
                'container_class' => '',
                'label_placement' => '',
                'placeholder' => '- Select -',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' =>array (),
            ),
            'options' => array (
                'option 1' => 'Option 1',
                'option 2' => 'Option 2',
            ),
            'editor_options' => array (
                'title' => __('Dropdown', 'fluentform'),
                'icon_class' => 'ff-edit-dropdown',
                'element' => 'select',
                'template' => 'select'
            )
        ),
        'input_radio' => array (
            'index' => 8,
            'element' => 'input_radio',
            'attributes' => array (
                'type' => 'radio',
                'name' => 'input_radio',
                'value' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Radio Field', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'display_type' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'options' => array (
                'yes' => 'Yes',
                'no' => 'No',
            ),
            'editor_options' => array (
                'title' => __('Radio Field', 'fluentform'),
                'icon_class' => 'ff-edit-radio',
                'element' => 'input-radio',
                'template' => 'inputRadio'
            ),
        ),
        'input_checkbox' =>  array (
            'index' => 9,
            'element' => 'input_checkbox',
            'attributes' => array (
                'type' => 'checkbox',
                'name' => 'checkbox',
                'value' => array (),
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Checkbox Field', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'display_type' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'options' => array (
                'item_1' => 'Item 1',
                'item_2' => 'Item 2',
                'item_3' => 'Item 3'
            ),
            'editor_options' => array (
                'title' => __('Check Box', 'fluentform'),
                'icon_class' => 'ff-edit-checkbox-1',
                'template' => 'inputCheckbox'
            ),
        ),
        'multi_select' => array (
        	'index' => 10,
            'element' => 'select',
            'attributes' => array (
                'name' => 'multi_select',
                'value' => array (),
                'id' => '',
                'class' => '',
                'placeholder' => '',
                'multiple' => true,
            ),
            'settings' => array (
                'help_message' => '',
                'container_class' => '',
                'label' => __('Multiselect', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'placeholder' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'options' => array (
                'Option 1' => 'Option 1',
                'Option 2' => 'Option 2',
            ),
            'editor_options' => array (
                'title' => __('Multiple Choice', 'fluentform'),
                'icon_class' => 'ff-edit-multiple-choice',
                'element' => 'select',
                'template' => 'select'
            )
        ),
        'input_url' => array (
        	'index' => 11,
            'element' => 'input_url',
            'attributes' => array (
                'type' => 'url',
                'name' => 'url',
                'value' => '',
                'class' => '',
                'placeholder' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('URL', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                    'url' => array (
                        'value'   => true,
                        'message' => __('This field must contain a valid url', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Website URL', 'fluentform'),
                'icon_class' => 'ff-edit-website-url',
                'template' => 'inputText'
            )
        ),
        'input_date' => array (
            'index' => 13,
            'element' => 'input_date',
            'attributes' => array (
                'type' => 'text',
                'name' => 'datetime',
                'value' => '',
                'id' => '',
                'class' => '',
                'placeholder' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Date / Time', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'date_format' => 'd/m/Y',
                'help_message' => '',
                'is_time_enabled' => true,
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    )
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Time & Date', 'fluentform'),
                'icon_class' => 'ff-edit-date',
                'template' => 'inputText'
            ),
        ),
        'input_image' => array (
        	'index' => 15,
            'element' => 'input_image',
            'attributes' => array (
                'type' => 'file',
                'name' => 'image-upload',
                'value' => '',
                'id' => '',
                'class' => '',
                'accept' => 'image/*',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Image Upload', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'btn_text' => 'Choose File',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                    'max_file_size' => array (
                        'value' => 1048576,
                        '_valueFrom' => 'MB',
                        'message' => __('Maximum file size limit is 1MB', 'fluentform')
                    ),
                    'max_file_count' => array (
                        'value' => 1,
                        'message' => __('You can upload maximum 1 image', 'fluentform')
                    ),
                    'allowed_image_types' => array (
                        'value' => array(),
                        'message' => __('Allowed image types does not match', 'fluentform')
                    )
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Image Upload', 'fluentform'),
                'icon_class' => 'ff-edit-images',
                'template' => 'inputFile'
            ),
        ),
        'input_file' => array (
            'index' => 16,
            'element' => 'input_file',
            'attributes' => array (
                'type' => 'file',
                'name' => 'file-upload',
                'value' => '',
                'id' => '',
                'class' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('File Upload', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'btn_text' => 'Choose File',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                    'max_file_size' => array (
                        'value' => 1048576,
                        '_valueFrom' => 'MB',
                        'message' => __('Maximum file size limit is 1MB', 'fluentform')
                    ),
                    'max_file_count' => array (
                        'value' => 1,
                        'message' => __('You can upload maximum 1 file', 'fluentform')
                    ),
                    'allowed_file_types' => array (
                        'value' => array(),
                        'message' => __('Invalid file type', 'fluentform')
                    )
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('File Upload', 'fluentform'),
                'icon_class' => 'ff-edit-files',
                'template' => 'inputFile'
            ),
        ),
        'select_country' => array (
            'index' => 5,
            'element' => 'select_country',
            'attributes' => array (
                'name' => 'country-list',
                'value' => '',
                'id' => '',
                'class' => '',
                'placeholder' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Country', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'country_list' => array (
                    'active_list' => 'all',
                    'visible_list' => array (),
                    'hidden_list' => array (),
                ),
                'conditional_logics' => array (),
            ),
            'options' => array (
                'US' => 'United States of America',
            ),
            'editor_options' => array (
                'title' => __('Country List', 'fluentform'),
                'element' => 'country-list',
                'icon_class' => 'ff-edit-country',
                'template' => 'selectCountry'
            ),
        ),
        'custom_html' => array(
            'index' => 20,
            'element'        => 'custom_html',
            'attributes'     => array(),
            'settings'       => array(
                'html_codes'         => '<p>Some description about this section</p>',
                'conditional_logics' => array(),
                'container_class' => ''
            ),
            'editor_options' => array(
                'title'      => __('Custom HTML', 'fluentform'),
                'icon_class' => 'ff-edit-html',
                'template'   => 'customHTML',
            )
        ),
    ),
    'advanced' => array(
        'ratings' => array (
            'index' => 8,
            'element' => 'ratings',
            'attributes' => array (
                'class' => '',
                'value' => 0,
                'name' => 'ratings',
            ),
            'settings' => array (
                'label' => __('Ratings','fluentform'),
                'show_text' => false,
                'help_message' => '',
                'label_placement' => '',
                'admin_field_label' => '',
                'container_class'    => '',
                'conditional_logics' => array(),
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
            ),
            'options' => array (
                '1' => __('Nice', 'fluentform'),
                '2' => __('Good', 'fluentform'),
                '3' => __('Very Good', 'fluentform'),
                '4' => __('Awesome', 'fluentform'),
                '5' => __('Amazing', 'fluentform'),
            ),
            'editor_options' => array (
                'title'      => __('Ratings', 'fluentform'),
                'icon_class' => 'ff-edit-rating',
                'template'   => 'ratings',
            ),
        ),
        'input_hidden' => array (
            'index' => 0,
            'element' => 'input_hidden',
            'attributes' => array (
                'type' => 'hidden',
                'name' => 'hidden',
                'value' => '',
            ),
            'settings' => array (
                'admin_field_label' => ''
            ),
            'editor_options' => array (
                'title'      => __('Hidden Field', 'fluentform'),
                'icon_class' => 'ff-edit-hidden-field',
                'template'   => 'inputHidden',
            ),
        ),
        'input_repeat' => array (
            'index' => 16,
            'element' => 'input_repeat',
            'attributes' =>  array (
                'name' => 'input_repeat',
                'data-type' => 'repeat-element'
            ),
            'settings' => array (
                'label' => __('Repeat Fields', 'fluentform'),
                'admin_field_label' => '',
                'container_class' => '',
                'label_placement' => '',
                'validation_rules' => array (),
                'conditional_logics' => array (),
                'multi_column' => true,
                'max_repeat_field' => ''
            ),
            'fields' => array (
                array (
                    'element' => 'input_text',
                    'attributes' => array (
                        'type' => 'text',
                        'value' => '',
                        'placeholder' => '',
                    ),
                    'settings' => array (
                        'label' => __('Column 1', 'fluentform'),
                        'help_message' => '',
                        'validation_rules' => array (
                            'required' => array (
                                'value'   => false,
                                'message' => __('This field is required', 'fluentform'),
                            )
                        )
                    ),
                    'editor_options' => array (),
                )
            ),
            'editor_options' => array (
                'title' => __('Repeat Field', 'fluentform'),
                'icon_class' => 'ff-edit-repeat',
                'template' => 'repeatFields'
            ),
        ),
        'tabular_grid' => array (
            'index' => 9,
            'element' => 'tabular_grid',
            'attributes' => array (
                'name' => 'tabular_grid',
                'data-type' => 'tabular-element'
            ),
            'settings' => array (
                'tabular_field_type' => 'checkbox',
                'container_class' => '',
                'label' => __('Checkbox Grid', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                        'per_row' => false,
                    ),
                ),
                'conditional_logics' => array (),
                'grid_columns' => array (
                    'Column-1' => 'Column 1'
                ),
                'grid_rows' => array (
                    'Row-1' => 'Row 1'
                ),
                'selected_grids' => array ()
            ),
            'editor_options' => array (
                'title' => __('Checkable Grid', 'fluentform'),
                'icon_class' => 'ff-edit-checkable-grid',
                'template' => 'checkableGrids'
            ),
        ),
        'section_break' => array(
            'index'          => 1,
            'element'        => 'section_break',
            'attributes'     => array(
                'id'    => '',
                'class' => '',
            ),
            'settings'       => array(
                'label'              => __('Section Break', 'fluentform'),
                'description'        => __('Some description about this section', 'fluentform'),
                'align'              => 'left',
                'conditional_logics' => array(),
            ),
            'editor_options' => array(
                'title'      => __('Section Break', 'fluentform'),
                'icon_class' => 'ff-edit-section-break',
                'template'   => 'sectionBreak',
            ),
        ),
        'input_password' => array (
            'index' => 12,
            'element' => 'input_password',
            'attributes' => array (
                'type' => 'password',
                'name' => 'password',
                'value' => '',
                'id' => '',
                'class' => '',
                'placeholder' => '',
            ),
            'settings' => array (
                'container_class' => '',
                'label' => __('Password', 'fluentform'),
                'admin_field_label' => '',
                'label_placement' => '',
                'help_message' => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array (),
            ),
            'editor_options' => array (
                'title' => __('Password Field', 'fluentform'),
                'icon_class' => 'ff-edit-password',
                'template' => 'inputText'
            ),
        ),
        'form_step' => array(
            'index'          => 7,
            'element'        => 'form_step',
            'attributes'     => [
                'id'    => '',
                'class' => '',
            ],
            'settings'       => [
                'prev_btn' => [
                    'type'    => 'default',
                    'text'    => __('Previous', 'fluentform'),
                    'img_url' => '',
                ],
                'next_btn' => [
                    'type'    => 'default',
                    'text'    => __('Next', 'fluentform'),
                    'img_url' => '',
                ],
            ],
            'editor_options' => [
                'title'      => __('Form Step', 'fluentform'),
                'icon_class' => 'ff-edit-step',
                'template'   => 'formStep',
            ],
        ),
        'terms_and_condition' => array(
            'index' => 5,
            'element'        => 'terms_and_condition',
            'attributes'     => array(
                'type'  => 'checkbox',
                'name'  => 'terms-n-condition',
                'value' => false,
                'class' => '',
            ),
            'settings'       => array(
                'tnc_html'           => 'I have read and agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>',
                'has_checkbox'       => true,
                'admin_field_label'       => __('Terms and Conditions', 'fluentform'),
                'container_class'    => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => false,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array(),
            ),
            'editor_options' => array(
                'title'      => __('Terms & Conditions', 'fluentform'),
                'icon_class' => 'ff-edit-terms-condition',
                'template' => 'termsCheckbox'
            ),
        ),
        'gdpr_agreement' => array(
        	'index' => 10,
            'element'        => 'gdpr_agreement',
            'attributes'     => array(
                'type'  => 'checkbox',
                'name'  => 'gdpr-agreement',
                'value' => false,
                'class' => 'ff_gdpr_field',
            ),
            'settings'       => array(
                'label' => __('GDPR Agreement', 'fluentform'),
                'tnc_html' => __('I consent to having this website store my submitted information so they can respond to my inquiry', 'fluentform'),
                'admin_field_label'       => __('GDPR Agreement', 'fluentform'),
                'has_checkbox' => true,
                'container_class'    => '',
                'validation_rules' => array (
                    'required' => array (
                        'value'   => true,
                        'message' => __('This field is required', 'fluentform'),
                    ),
                ),
                'conditional_logics' => array(),
            ),
            'editor_options' => array(
                'title'      => __('GDPR Agreement', 'fluentform'),
                'icon_class' => 'ff-edit-gdpr',
                'template' => 'termsCheckbox'
            ),
        ),
        'recaptcha' => array(
            'index' => 2,
            'element'        => 'recaptcha',
            'attributes'     => array('name' => 'recaptcha'),
            'settings'       => array(
                'label'            => '',
                'label_placement'  => '',
                'validation_rules' => array(),
            ),
            'editor_options' => array(
                'title'              => __('reCaptcha', 'fluentform'),
                'icon_class'         => 'ff-edit-recaptha',
                'why_disabled_modal' => 'recaptcha',
                'template'           => 'recaptcha',
            ),
        ),
        'shortcode' => array(
            'index' => 4,
            'element'        => 'shortcode',
            'attributes'     => array(
                'id' => '',
                'class' => ''
            ),
            'settings'       => array(
                'shortcode'          => '[your_shorcode_here]',
                'conditional_logics' => array(),
            ),
            'editor_options' => array(
                'title'      => __('Shortcode', 'fluentform'),
                'icon_class' => 'ff-edit-shortcode',
                'template'   => 'shortcode',
            )
        ),
        'action_hook' => array(
            'index' => 6,
            'element'        => 'action_hook',
            'attributes'     => array(
                'id' => '',
                'class' => ''
            ),
            'settings'       => array(
                'hook_name'          => 'YOUR_CUSTOM_HOOK_NAME',
                'conditional_logics' => array(),
            ),
            'editor_options' => array(
                'title'      => __('Action Hook', 'fluentform'),
                'icon_class' => 'ff-edit-action-hook',
                'template' => 'actionHook'
            )
        ),
    ),
    'container' => array(
        'container_2_col' => array(
        	'index' 		=> 1,
            'element'        => 'container',
            'attributes'     => array(),
            'settings'       => array(),
            'columns'        => array(
                array( 'fields' => array() ),
                array( 'fields' => array() ),
            ),
            'editor_options' =>
                array(
                    'title'      => __('Two Column Container', 'fluentform'),
                    'icon_class' => 'ff-edit-column-2',
                ),
        ),
        'container_3_col' => array(
        	'index' 		=> 2,
            'element'        => 'container',
            'attributes'     => array(),
            'settings'       => array(),
            'columns'        => array(
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
            ),
            'editor_options' => array(
                'title'      => __('Three Column Container', 'fluentform'),
                'icon_class' => 'ff-edit-three-column',
            ),
        ),
        'container_4_col' => array(
            'index' 		=> 3,
            'element'        => 'container',
            'attributes'     => array(),
            'settings'       => array(),
            'columns'        => array(
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
            ),
            'editor_options' => array(
                'title'      => __('Four Column Container', 'fluentform'),
                'icon_class' => 'ff-edit-three-column',
            ),
        ),
        'container_5_col' => array(
            'index' 		=> 5,
            'element'        => 'container',
            'attributes'     => array(),
            'settings'       => array(),
            'columns'        => array(
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
            ),
            'editor_options' => array(
                'title'      => __('Five Column Container', 'fluentform'),
                'icon_class' => 'ff-edit-three-column',
            ),
        ),
        'container_6_col' => array(
            'index' 		=> 6,
            'element'        => 'container',
            'attributes'     => array(),
            'settings'       => array(),
            'columns'        => array(
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
                array( 'fields' => array() ),
            ),
            'editor_options' => array(
                'title'      => __('Six Column Container', 'fluentform'),
                'icon_class' => 'ff-edit-three-column',
            ),
        )
    )
);
