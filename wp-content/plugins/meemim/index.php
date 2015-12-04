<?php

/**
 * Plugin Name: Meemim Utilities
 * Description: Provider useful utilities for application. Never disable this plugin.
 * Version: 1.0
 * Author: M.I.F Projects
 * Author URI: http://mifprojects.com/
 */

include dirname(__FILE__) . '/app/MeemimApplication.php';

MeemimApplication::getInstance()->run();