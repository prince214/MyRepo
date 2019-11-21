<?php

/**
 * Declare backend actions/filters/shortcodes
 */

/*
 * Regitser All Admin Scripts but don't load it
 */

add_action('admin_init', function () use ($app) {
    (new \FluentForm\App\Modules\Registerer\Menu($app))->reisterScripts();
}, 9);

add_action('admin_enqueue_scripts', function () use ($app) {
    (new \FluentForm\App\Modules\Registerer\Menu($app))->enqueuePageScripts();
}, 10);


// Add Entries Menu
$app->addAction('ff_fluentform_form_application_view_entries', function ($form_id) use ($app) {
    (new \FluentForm\App\Modules\Entries\Entries())->renderEntries($form_id);
});

$app->addAction('fluentform_after_form_navigation', function ($form_id) use ($app) {
    (new \FluentForm\App\Modules\Registerer\Menu($app))->addCopyShortcodeButton($form_id);
    (new \FluentForm\App\Modules\Registerer\Menu($app))->addPreviewButton($form_id);
});

$app->addAction('media_buttons', function () {
    (new \FluentForm\App\Modules\EditorButtonModule())->addButton();
});

$app->addAction('fluentform_addons_page_render_fluentform_add_ons', function () {
    (new \FluentForm\App\Modules\AddOnModule())->showFluentAddOns();
});

// This is temp, we will remove this after 2-3 versions.
add_filter('pre_set_site_transient_update_plugins', function ($updates) {
    if (!empty($updates->response['fluentformpro'])) {
        $updates->response['fluentformpro/fluentformpro.php'] = $updates->response['fluentformpro'];
        unset($updates->response['fluentformpro']);
    }
    return $updates;
}, 999, 1);

$app->addAction('fluentform_global_menu', function () use ($app) {
    $menu = new \FluentForm\App\Modules\Registerer\Menu($app);
    $menu->renderGlobalMenu();
    /*
     * Checking global addon migration
     * This temporary. We will remove this code at 2010
     */
    $activator = new \FluentForm\App\Modules\Activator();
    $activator->migrateGlobalAddOns();

});

$app->addAction('wp_dashboard_setup', function () {
    $roleManager = new \FluentForm\App\Modules\Acl\RoleManager();
    if (!$roleManager->currentUserFormFormCapability()) {
        return;
    }
    wp_add_dashboard_widget('fluenform_stat_widget', __('Fluent Forms Latest Form Submissions', 'fluentform'), function () {
        (new \FluentForm\App\Modules\DashboardWidgetModule)->showStat();
    }, 10, 1);
});

add_action('admin_init', function () {
    $disablePages = [
        'fluent_forms',
        'fluent_forms_transfer',
        'fluent_forms_settings',
        'fluent_form_add_ons',
        'fluent_forms_docs'
    ];
    if (isset($_GET['page']) && in_array($_GET['page'], $disablePages)) {
        remove_all_actions('admin_notices');
    }

    /*
     * We will remove this in upcoming versions
     */
    $activator = new \FluentForm\App\Modules\Activator();
    $activator->maybeMigrateDB();

});

add_action('fluentform_loading_editor_assets', function ($form) {
    add_filter('fluentform_editor_init_element_input_name', function ($field) {
        if(empty($field['settings']['label_placement'])) {
            $field['settings']['label_placement'] = '';
        }
        return $field;
    });
});