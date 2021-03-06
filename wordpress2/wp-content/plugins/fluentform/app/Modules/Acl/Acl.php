<?php

namespace FluentForm\App\Modules\Acl;

class Acl
{
    public static function getPermissionSet()
    {
        return apply_filters('fluentform_permission_set', [
            'fluentform_full_access',
            'fluentform_settings_manager',
            'fluentform_dashboard_access',
            'fluentform_forms_manager',
            'fluentform_entries_viewer',
        ]);
    }

    /**
     * Fluentform access controll permissions assignment.
     */
    public static function setPermissions()
    {
        // Fire an event letting others know that fluentform
        // is going to assign permission set to a role.
        do_action('before_fluentform_permission_set_assignment');

        // The permissions that fluentform supports altogether.
        $permissions = self::getPermissionSet();

        // The role that fluentform will use
        // to attach the permission set.
        $role = get_role('administrator');

        // Looping through permission set to add to the role.
        foreach ($permissions as $permission) {
            $role->add_cap($permission);
        }

        // Fire an event letting others know that fluentform is
        // done with the permission assignment to the role.
        do_action('after_fluentform_permission_set_assignment');
    }

    /**
     * Verify if current user has a fluentform permission.
     *
     * @param $permission
     * @param null $formId
     * @param string $message
     * @param bool $json
     *
     * @throws \Exception
     */
    public static function verify(
        $permission,
        $formId = null,
        $message = 'You do not have permission to perform this action.',
        $json = true
    )
    {
        $allowed = self::hasPermission($permission, $formId);
        if (!$allowed) {
            if ($json) {
                wp_send_json_error([
                    'message' => $message
                ], 422);
            } else {
                throw new \Exception($message);
            }
        }
    }

    public static function hasPermission($permission, $formId = false)
    {
        if (current_user_can('fluentform_full_access')) {
            return true;
        }

        $allowed = current_user_can('fluentform_full_access');
        if ($allowed) {
            return true;
        }

        if (is_array($permission)) {
            foreach ($permission as $eachPermission) {
                $allowed = current_user_can($eachPermission);
                if ($allowed) {
                    return apply_filters('fluentform_verify_user_permission_' . $eachPermission, $allowed, $formId);
                }
            }
        }

        $allowed = current_user_can($permission);
        return apply_filters('fluentform_verify_user_permission_' . $permission, $allowed, $formId);
    }

    public static function hasAnyFormPermission($form_id = false)
    {
        $allPermissions = self::getPermissionSet();
        foreach ($allPermissions as $permission) {
            if (self::hasPermission($permission, $form_id)) {
                return true;
            }
        }
        return false;
    }
}