<?php

namespace FluentForm\App\Modules;

use FluentForm\App;
use FluentForm\View;

class AddOnModule
{
    /**
     * The number of days we'll cached the add-ons got from remote server.
     *
     * @var integer
     */
    protected $cacheDays = 1;

    /**
     * The URL to fetch the add-ons
     *
     * @var string
     */
    protected $addOnsFetchUrl = 'https://wpmanageninja.com/add-ons.json';

    /**
     * Render the add-ons list page.
     */
    public function render()
    {
        $extraMenus = [];

        $extraMenus = apply_filters('fluentform_addons_extra_menu', $extraMenus);

        $current_menu_item = 'fluentform_add_ons';

        if (isset($_GET['sub_page']) && $_GET['sub_page']) {
            $current_menu_item = sanitize_text_field($_GET['sub_page']);
        }

        return View::make('admin.addons.index', [
            'menus'             => $extraMenus,
            'base_url'          => admin_url('admin.php?page=fluent_form_add_ons'),
            'current_menu_item' => $current_menu_item
        ]);
    }

    /**
     * Show the add-ons list.
     */
    public function showFluentAddOns()
    {
        wp_enqueue_script('fluentform-modules');

        $addOns = apply_filters('fluentform_global_addons', []);

        $addOns['slack'] = [
            'title'       => 'Slack',
            'description' => 'Get realtime notification in slack channel when a new submission will be added',
            'logo'        => App::publicUrl('img/integrations/slack.png'),
            'enabled'     => App\Helpers\Helper::isSlackEnabled() ? 'yes' : 'no',
            'config_url' => ''
        ];

        if (!defined('FLUENTFORMPRO')) {
            $addOns = array_merge($addOns, $this->getPremiumAddOns());
        }

        wp_localize_script('fluentform-modules', 'fluent_addon_modules', [
            'addons'  => $addOns,
            'has_pro' => defined('FLUENTFORMPRO')
        ]);

        View::render('admin.addons.list', []);
    }

    public function updateAddOnsStatus()
    {
        $addons = wp_unslash($_REQUEST['addons']);
        update_option('fluentform_global_modules_status', $addons);

        wp_send_json_success([
            'message' => 'Status successfully updated'
        ], 200);
    }

    private function getPremiumAddOns()
    {
        $purchaseUrl = 'https://wpmanageninja.com/downloads/fluentform-pro-add-on/';
        return array(
            'webhook'           => array(
                'title'        => 'WebHook',
                'description'  => 'Broadcast your WP Fluent Forms Submission to any web api endpount with powerful webhook module.',
                'logo'         => App::publicUrl('img/integrations/webhook.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'zapier'            => array(
                'title'        => 'Zapier',
                'description'  => 'Connect your WPFluentForms data with Zapier and push data to thousands of online softwares',
                'logo'         => App::publicUrl('img/integrations/zapier.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'activecampaign'    => array(
                'title'        => 'ActiveCampaign',
                'description'  => 'WP Fluent Forms ActiveCampaign Module allows you to create ActiveCampaign list signup forms in WordPress, so you can grow your email list.',
                'logo'         => App::publicUrl('img/integrations/activecampaign.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'campaign_monitor'  => array(
                'title'        => 'CampaignMonitor',
                'description'  => 'WP Fluent Forms Campaign Monitor module allows you to create Campaign Monitor newsletter signup forms in WordPress, so you can grow your email list.',
                'logo'         => App::publicUrl('img/integrations/campaignmonitor.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'constatantcontact' => array(
                'title'        => 'ConstantContact',
                'description'  => 'Connect ConstantContact with WP Fluent Forms and create subscriptions forms right into WordPress and grow your list.',
                'logo'         => App::publicUrl('img/integrations/constantcontact.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'convertkit'        => array(
                'title'        => 'ConvertKit',
                'description'  => 'Connect ConvertKit with WP Fluent Forms and create subscriptions forms right into WordPress and grow your list.',
                'logo'         => App::publicUrl('img/integrations/convertkit.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'getresponse'       => array(
                'title'        => 'GetResponse',
                'description'  => 'WP Fluent Forms GetResponse module allows you to create GetResponse newsletter signup forms in WordPress, so you can grow your email list.',
                'logo'         => App::publicUrl('img/integrations/getresponse.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'hubspot'           => array(
                'title'        => 'Hubspot',
                'description'  => 'Connect HubSpot with WP Fluent Forms and subscribe a contact when a form is submitted',
                'logo'         => App::publicUrl('img/integrations/hubspot.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'icontact'          => array(
                'title'        => 'iContact',
                'description'  => 'Connect iContact with WP Fluent Forms and subscribe a contact when a form is submitted',
                'logo'         => App::publicUrl('img/integrations/icontact.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'moosend'           => array(
                'title'        => 'MooSend',
                'description'  => 'Connect MooSend with WP Fluent Forms and subscribe a contact when a form is submitted',
                'logo'         => App::publicUrl('img/integrations/moosend_logo.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'sendfox'           => array(
                'title'        => 'SendFox',
                'description'  => 'Connect SendFox with WP Fluent Forms and subscribe a contact when a form is submitted',
                'logo'         => App::publicUrl('img/integrations/sendfox.png'),
                'enabled'      => 'no',
                'purchase_url' => $purchaseUrl
            ),
            'mailerlite'        => array(
                'title'             => 'MailerLite',
                'description' => 'Connect your Fluent Forms with MailerLite and add subscribers easily',
                'logo'              => App::publicUrl('img/integrations/mailerlite.png'),
                'enabled'           => 'no',
                'purchase_url'      => $purchaseUrl
            ),
            'sms_notifications' => array(
                'title' => 'SMS Notification',
                'description' => 'Send SMS when new submission will be happened in real time with Twillio',
                'logo' => App::publicUrl('img/integrations/twillio.png'),
                'enabled'           => 'no',
                'purchase_url'      => $purchaseUrl
            ),
            'get_gist' => array(
                'title' => 'Gist',
                'description' => 'GetGist is Easy to use all-in-one software for live chat, email marketing automation, forms, knowledge base, and more for a complete 360° view of your contacts',
                'logo' =>  App::publicUrl('img/integrations/getgist.png'),
                'enabled' => 'no',
                'purchase_url' => $purchaseUrl
            )
        );
    }
}
