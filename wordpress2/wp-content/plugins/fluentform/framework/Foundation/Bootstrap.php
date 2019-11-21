<?php

namespace FluentForm\Framework\Foundation;

use FluentForm\App\Modules\Activator;

class Bootstrap
{
    /**
     * The main plugin file path
     * @var strring
     */
    protected static $file = null;

    /**
     * The base dir path of the plugin
     * @var strring
     */
    protected static $basePath = null;

    /**
     * The app config (/config/app.php)
     * @var strring
     */
    protected static $config = array();

    /**
     * Conveniently start the framework
     * @param  string $file
     * @return $
     */
    public static function run($file)
    {
        static::init($file);
        static::registerHooks();

        if (!extension_loaded('pdo')) {
            add_action('admin_notices', function () {
                echo '<div class="notice notice-warning">
             <p>Fluent Forms Plugin requires PDO extension. Please install <code>pdo_mysql</code> extension or ask your hosting prover to install it.</p>
         </div>';
            });
            return;
        }

        static::registerAutoLoader();
        static::registerApplication();
    }

    /**
     * Initialize the framework
     * @param  string $file [the main plugin file path]
     * @return void
     */
    public static function init($file)
    {
        static::$file = $file;
        static::$basePath = plugin_dir_path($file);
    }

    /**
     * Register activation/deactivation hooks
     * @return void
     */
    public static function registerHooks()
    {
        static::registerActivationHook();
    }

    /**
     * Register activation hook
     * @return bool
     */
    public static function registerActivationHook()
    {
        return register_activation_hook(
            static::$file, array(__CLASS__, 'activate')
        );
    }


    /**
     * Validate and activate the plugin
     * @return void
     */
    public static function activate($netowrkwide = false)
    {
        static::validatePlugin();
        if (file_exists($activator = static::$basePath . 'app/Modules/Activator.php')) {
            include_once $activator;
        }

        if (class_exists('FluentForm\App\Modules\Activator')) {
            (new Activator)->handleActivation($netowrkwide);
        }
    }

    /**
     * Validate the plugin by checking all rquired files/settings
     * @return void
     */
    public static function validatePlugin()
    {
        if (!file_exists($glueJson = static::$basePath . 'glue.json')) {
            die('The [glue.json] file is missing from "' . static::$basePath . '" directory.');
        }

        static::$config = json_decode(file_get_contents($glueJson), true);

        $configPath = static::$basePath . 'config';

        if (!file_exists($file = $configPath . '/app.php')) {
            die('The [config.php] file is missing from "' . $configPath . '" directory.');
        }

        static::$config = array_merge(include $file, static::$config);

        if (!($autoload = @static::$config['autoload'])) {
            die('The [autoload] key is not specified or invalid in "' . $glueJson . '" file.');
        }

        if (!($namespace = @$autoload['namespace'])) {
            die('The [namespace] key is not specified or invalid in "' . $glueJson . '" file.');
        }

        $namespaceMapping = (array)@$autoload['mapping'];


        if (!$namespaceMapping) {
            die('The [mapping] key is not specified or invalid in "' . $glueJson . '" file.');
        }
    }

    /**
     * Register the autoloader
     * @return void
     */
    public static function registerAutoLoader()
    {
        if (!static::$config) {
            static::$config = json_decode(file_get_contents(static::$basePath . 'glue.json'), true);
            static::$config = array_merge(include static::$basePath . 'config/app.php', static::$config);
        }

        spl_autoload_register([__CLASS__, 'loader']);
    }

    /**
     * Framework's custom autoloader
     * @param  string $class
     * @return mixed
     */
    public static function loader($class)
    {
        $namespace = static::$config['autoload']['namespace'];

        if (substr($class, 0, strlen($namespace)) !== $namespace) {
            return false;
        }

        foreach (static::$config['autoload']['mapping'] as $key => $value) {
            $className = str_replace(
                array('\\', $key, $namespace),
                array('/', $value, $namespace),
                $class
            );

            $className = substr_replace($className, '', 0, strlen($namespace));

            $file = static::$basePath . trim($className, '/') . '.php';

            if (is_readable($file)) {
                return include $file;
            }
        }
    }

    /**
     * Register "init" hook to run the plugin
     * @return void
     */
    public static function registerApplication()
    {
        add_action('plugins_loaded', function () {
            Application::run(static::$file, static::$config);
        }, 1);
    }
}
