<?php
/**
 * Plugin Name: Custom Modules Beaver Builder
 * Plugin URI: http://www.h4x0r.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.h4x0r.com
 * @category modules
 * @author pedro henrique romio <pedrohenriqueromio@gmail.com>
 * @license GPL2
 * @link http://www.h4x0r.com
 * @package plugin
 * @version 7.4 
 */

define('MY_MODULES_DIR', plugin_dir_path(__FILE__));
define('MY_MODULES_URL', plugins_url('/', __FILE__));

require_once __DIR__.'/Waves/init.php';

