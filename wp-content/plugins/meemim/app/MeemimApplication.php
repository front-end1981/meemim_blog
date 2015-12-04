<?php

/**
 * Class MeemimApplication
 */
class MeemimApplication
{
    /**
     * @var Rsc_Environment
     */
    protected $environment;

    /**
     * @var bool
     */
    protected $isRunning;

    /**
     * @var MeemimApplication
     */
    protected static $instance;

    /**
     * MeemimApplication constructor.
     */
    protected function __construct()
    {
        if (!class_exists('Rsc_Autoloader', false)) {
            require dirname(dirname(__FILE__)) . '/vendor/Rsc/Autoloader.php';
            Rsc_Autoloader::register();
        }

        $pluginPath = dirname(dirname(__FILE__));
        $appPath = plugin_basename(dirname(__FILE__));

        $environment = new Rsc_Environment('meemim', '1.0', $pluginPath);

        $environment->configure(
            array(
                'optimizations'  => 1,
                'environment'    => Rsc_Environment::ENV_PRODUCTION,
                'default_module' => 'aboutus',
                'lang_domain'    => 'meemim',
                'lang_path'      => $appPath . '/langs',
                'plugin_prefix'  => 'Meemim',
                'plugin_source'  => $pluginPath . '/src',
                'db_prefix'      => 'meemim_utils_',
                'hooks_prefix'   => 'meemim_utils_',
            )
        );

        $this->environment = $environment;
        $this->isRunning = false;

        register_activation_hook(
            $pluginPath . '/index.php',
            array($this, 'createSchema')
        );
    }

    /**
     * Disallows to clone the object.
     */
    protected function __clone()
    {
    }

    /**
     * Creates database schema.
     */
    public function createSchema()
    {
        global $wpdb;

        $environment = $this->environment;
        $schema = $environment->getPluginPath() . '/app/schema.sql';
        $appPrefix = $wpdb->prefix;
        $vendorPrefix = $environment->getConfig()->get('db_prefix');
        $prefix = $appPrefix . $vendorPrefix;
        $placeholder = '{prefix}';

        $sql = str_replace($placeholder, $prefix, file_get_contents($schema));

        if (!function_exists('dbDelta')) {
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        }

        dbDelta($sql);
    }

    /**
     * Startup application.
     */
    public function run()
    {
        if (!$this->isRunning) {
            $this->environment->run();
        }

        $this->isRunning = true;
    }

    /**
     * Is Application running?
     *
     * @return bool
     */
    public function isRunning()
    {
        return $this->isRunning;
    }

    /**
     * Gets members model.
     *
     * @return Meemim_Team_Model_Members
     */
    public function getMembers()
    {
        if (!$this->isRunning) {
            $this->run();
        }

        /** @var Meemim_Core_Module $core */
        $core = $this->environment->getModule('core');

        return $core->getFactory()->get('Members', 'Team');
    }

    /**
     * Gets the instance of the Application.
     *
     * @return \MeemimApplication
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}