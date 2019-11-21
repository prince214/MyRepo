<?php

namespace FluentForm\App\Services\Integrations\Slack;

use FluentForm\App\Helpers\Helper;
use FluentForm\Framework\Foundation\Application;

class SlackNotificationActions
{
    protected $app = null;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function register()
    {
        $isEnabled = Helper::isSlackEnabled();
        if ($isEnabled && fluentFormIsHandlingSubmission()) {
            add_filter('fluentform_global_notification_active_types', function ($types) {
                $types['slack'] = 'slack';
                return $types;
            });
            add_action('fluentform_integration_notify_slack', array($this, 'notify'), 20, 4);
        }
    }

    public function notify($feed, $formData, $entry, $form)
    {
        Slack::handle($feed, $formData, $form, $entry);
    }
}
