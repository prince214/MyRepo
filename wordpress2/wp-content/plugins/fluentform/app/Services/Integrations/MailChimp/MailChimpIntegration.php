<?php

namespace FluentForm\App\Services\Integrations\MailChimp;

use FluentForm\App\Services\Integrations\IntegrationManager;
use FluentForm\App\Services\Integrations\MailChimp\MailChimpSubscriber as Subscriber;
use FluentForm\Framework\Foundation\Application;
use FluentForm\Framework\Helpers\ArrayHelper;

class MailChimpIntegration extends IntegrationManager
{
    /**
     * MailChimp Subscriber that handles & process all the subscribing logics.
     */
    use Subscriber;

    public function __construct(Application $application)
    {
        parent::__construct(
            $application,
            'MailChimp',
            'mailchimp',
            '_fluentform_mailchimp_details',
            'mailchimp_feeds',
            12
        );

        $this->description = 'WP Fluent Forms MailChimp module allows you to create MailChimp newsletter signup forms in WordPress';

        $this->logo = $this->app->url('public/img/integrations/mailchimp.png');
        $this->registerAdminHooks();

     //   add_filter('fluentform_notifying_async_mailchimp', '__return_false');
    }

    public function getGlobalFields($fields)
    {
        return [
            'logo'             => $this->logo,
            'menu_title'       => __('MailChimp Settings', 'fluentform'),
            'menu_description' => __('MailChimp is a marketing platform for small businesses. Send beautiful emails, connect your e-commerce store, advertise, and build your brand. Use Fluent Form to collect customer information and automatically add it to your MailChimp campaign list. If you don\'t have a MailChimp account, you can <a href="http://www.mailchimp.com/" target="_blank">sign up for one here.</a>', 'fluentform'),
            'valid_message'    => __('Your MailChimp API Key is valid', 'fluentform'),
            'invalid_message'  => __('Your MailChimp API Key is not valid', 'fluentform'),
            'save_button_text' => __('Save Settings', 'fluenform'),
            'fields'           => [
                'apiKey' => [
                    'type'       => 'text',
                    'label_tips' => __("Enter your MailChimp API Key, if you do not have <br>Please login to your MailChimp account and go to<br>Profile -> Extras -> Api Keys", 'fluentform'),
                    'label'      => __('MailChimp API Key', 'fluentform'),
                ]
            ],
            'hide_on_valid'    => true,
            'discard_settings' => [
                'section_description' => 'Your MailChimp API integration is up and running',
                'button_text'         => 'Disconnect MailChimp',
                'data'                => [
                    'apiKey' => ''
                ],
                'show_verify'         => true
            ]
        ];
    }

    public function getGlobalSettings($settings)
    {
        $globalSettings = get_option($this->optionKey);
        if (!$globalSettings) {
            $globalSettings = [];
        }
        $defaults = [
            'apiKey' => '',
            'status' => ''
        ];

        return wp_parse_args($globalSettings, $defaults);
    }

    public function saveGlobalSettings($mailChimp)
    {
        if (!$mailChimp['apiKey']) {
            $mailChimpSettings = [
                'apiKey' => '',
                'status' => false
            ];
            // Update the reCaptcha details with siteKey & secretKey.
            update_option($this->optionKey, $mailChimpSettings);
            wp_send_json_success([
                'message' => __('Your settings has been updated and disconnected', 'fluentform'),
                'status'  => false
            ], 200);
        }

        // Verify API key now
        try {
            $MailChimp = new MailChimp($mailChimp['apiKey']);
            $result = $MailChimp->get('lists');
            if (!$MailChimp->success()) {
                throw new \Exception($MailChimp->getLastError());
            }
        } catch (\Exception $exception) {
            wp_send_json_error([
                'message' => $exception->getMessage()
            ], 400);
        }

        // MailChimp key is verified now, Proceed now

        $mailChimpSettings = [
            'apiKey' => sanitize_text_field($mailChimp['apiKey']),
            'status' => true
        ];

        // Update the reCaptcha details with siteKey & secretKey.
        update_option($this->optionKey, $mailChimpSettings);

        wp_send_json_success([
            'message' => __('Your mailchimp api key has been verfied and successfully set', 'fluentform'),
            'status'  => true
        ], 200);
    }


    public function pushIntegration($integrations, $formId)
    {
        $integrations['mailchimp'] = [
            'title'                 => __('Mailchimp Feed', 'fluentform'),
            'logo'                  => $this->logo,
            'is_active'             => $this->isConfigured(),
            'configure_title'       => __('Configration required!', 'fluentform'),
            'global_configure_url'  => admin_url('admin.php?page=fluent_forms_settings#mailchimp'),
            'configure_message'     => __('Mailchimp is not configured yet! Please configure your mailchimp api first', 'fluentform'),
            'configure_button_text' => __('Set Mailchimp API', 'fluentform')
        ];

        return $integrations;
    }

    public function getIntegrationDefaults($settings, $formId)
    {
        $settings = [
            'conditionals'      => [
                'conditions' => [],
                'status'     => false,
                'type'       => 'all'
            ],
            'enabled'           => true,
            'list_id'           => '',
            'list_name'         => '',
            'name'              => '',
            'merge_fields'      => (object)[],
            'tags'              => '',
            'markAsVIP'         => false,
            'fieldEmailAddress' => '',
            'doubleOptIn'       => false,
            'note'              => ''
        ];

        return $settings;
    }

    public function getSettingsFields($settings, $formId)
    {
        return [
            'fields'              => [
                [
                    'key'         => 'name',
                    'label'       => 'Name',
                    'required'    => true,
                    'placeholder' => 'Your Feed Name',
                    'component'   => 'text'
                ],
                [
                    'key'         => 'list_id',
                    'label'       => 'MailChimp List',
                    'placeholder' => 'Select MailChimp List',
                    'tips'        => 'Select the MailChimp list you would like to add your contacts to.',
                    'component'   => 'list_ajax_options',
                    'options'     => $this->getLists(),
                ],
                [
                    'key'                => 'merge_fields',
                    'require_list'       => true,
                    'label'              => 'Map Fields',
                    'tips'               => 'Associate your MailChimp merge tags to the appropriate Fluent Form fields by selecting the appropriate form field from the list.',
                    'component'          => 'map_fields',
                    'field_label_remote' => 'MailChimp Field',
                    'field_label_local'  => 'Form Field',
                    'primary_fileds'     => [
                        [
                            'key'           => 'fieldEmailAddress',
                            'label'         => 'Email Address',
                            'required'      => true,
                            'input_options' => 'emails'
                        ]
                    ]
                ],
                [
                    'key'          => 'tags',
                    'require_list' => true,
                    'label'        => 'Tags',
                    'tips'         => 'Associate tags to your MailChimp contacts with a comma separated list (e.g. new lead, FluentForms, web source). Commas within a merge tag value will be created as a single tag.',
                    'component'    => 'value_text',
                    'inline_tip'   => 'Please provide each tag by comma separted value'
                ],
                [
                    'key'          => 'note',
                    'require_list' => true,
                    'label'        => 'Note',
                    'tips'         => 'You can write a note for this contact',
                    'component'    => 'value_textarea'
                ],
                [
                    'key'             => 'doubleOptIn',
                    'require_list'    => true,
                    'label'           => 'Double Opt-in',
                    'tips'            => 'When the double opt-in option is enabled,<br />MailChimp will send a confirmation email<br />to the user and will only add them to your <br /MailChimp list upon confirmation.',
                    'component'       => 'checkbox-single',
                    'checkobox_label' => 'Enable Double Opt-in'
                ],
                [
                    'key'             => 'markAsVIP',
                    'require_list'    => true,
                    'label'           => 'VIP',
                    'tips'            => 'When enabled,<br /> This contact will be marked as VIP.',
                    'component'       => 'checkbox-single',
                    'checkobox_label' => 'Mark as VIP Contact'
                ],
                [
                    'require_list' => true,
                    'key'          => 'conditionals',
                    'label'        => 'Conditional Logics',
                    'tips'         => 'Allow mailchimp integration conditionally based on your submission values',
                    'component'    => 'conditional_block'
                ],
                [
                    'require_list'    => true,
                    'key'             => 'enabled',
                    'label'           => 'Status',
                    'component'       => 'checkbox-single',
                    'checkobox_label' => 'Enable This feed'
                ]
            ],
            'button_require_list' => true,
            'integration_title'   => 'Mailchimp'
        ];
    }

    public function setFeedAtributes($feed, $formId)
    {
        $feed['provider'] = 'mailchimp';
        $feed['provider_logo'] = $this->logo;
        return $feed;
    }

    public function prepareIntegrationFeed($setting, $feed, $formId)
    {
        $defaults = $this->getIntegrationDefaults([], $formId);

        foreach ($setting as $settingKey => $settingValue) {
            if ($settingValue == 'true') {
                $setting[$settingKey] = true;
            } else if ($settingValue == 'false') {
                $setting[$settingKey] = false;
            } else if ($settingKey == 'conditionals') {
                if ($settingValue['status'] == 'true') {
                    $settingValue['status'] = true;
                } else if ($settingValue['status'] == 'false') {
                    $settingValue['status'] = false;
                }
                $setting['conditionals'] = $settingValue;
            }
        }

        if (!empty($setting['list_id'])) {
            $setting['list_id'] = (string)$setting['list_id'];
        }

        $settings['markAsVIP'] = ArrayHelper::isTrue($setting, 'markAsVIP');
        $settings['doubleOptIn'] = ArrayHelper::isTrue($setting, 'doubleOptIn');

        return wp_parse_args($setting, $defaults);
    }

    private function getLists()
    {
        $settings = get_option('_fluentform_mailchimp_details');
        try {
            $MailChimp = new MailChimp($settings['apiKey']);
            $lists = $MailChimp->get('lists', array('count' => 9999));
            if (!$MailChimp->success()) {
                return [];
            }
        } catch (\Exception $exception) {
            return [];
        }

        $formattedLists = [];
        foreach ($lists['lists'] as $list) {
            $formattedLists[$list['id']] = $list['name'];
        }

        return $formattedLists;
    }

    public function getMergeFields($list, $listId, $formId)
    {

        if (!$this->isConfigured()) {
            return false;
        }
        $settings = get_option('_fluentform_mailchimp_details');

        try {
            $MailChimp = new MailChimp($settings['apiKey']);
            $list = $MailChimp->get('lists/' . $listId . '/merge-fields', array('count' => 9999));
            if (!$MailChimp->success()) {
                return false;
            }
        } catch (\Exception $exception) {
            return false;
        }


        $mergedFields = $list['merge_fields'];
        $fields = array();

        foreach ($mergedFields as $merged_field) {
            $fields[$merged_field['tag']] = $merged_field['name'];
        }

        return $fields;
    }

    /*
    * For Handling Notifications broadcast
    */
    public function notify($feed, $formData, $entry, $form)
    {
        return $this->subscribe($feed, $formData, $entry, $form);
    }
}