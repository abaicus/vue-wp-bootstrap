<?php
/**
 * Plugin Name: {{niceName}}
 * Description: {{description}}
 * Version: {{version}}
 * Author: {{author}}
 * Author URI: {{authorUrl}}
 * License: {{license}}
 * License URI: {{licenseUrl}}
 * Text Domain: {{textdomain}}
 * Domain Path: /languages
 *
 * @package {{abbreviate name}}
 */

namespace {{abbreviate name}};

/**
 * Class Plugin
 *
 * @package {{abbreviate name}}
 */
final class Plugin {

	/**
	 * Plugin version.
	 *
	 * @access public
	 * @var string
	 */
	private $version = '{{version}}';

	/**
	 * Plugin entities array.
	 *
	 * Contains plugin components instances.
	 *
	 * @access private
	 * @var array
	 */
	private $entities = [];

	/**
	 * Get plugin instance
	 *
	 * @access public
	 * @return Plugin
	 */
	public static function get_instance() {
		static $instance = false;
		if ( ! $instance ) {
			$instance = new Plugin();
			$instance->define_constants();
			$instance->run();
		}

		return $instance;
	}

	/**
	 * Define the plugins constants.
	 *
	 * @access public
	 * @return void
	 */
	public function define_constants() {
		define( '{{abbreviate name}}_VERSION', $this->version );
		define( '{{abbreviate name}}_FILE', __FILE__ );
		define( '{{abbreviate name}}_PATH', dirname( {{abbreviate name}}_FILE ) );
		define( '{{abbreviate name}}_INCLUDES', {{abbreviate name}}_PATH . '/includes' );
		define( '{{abbreviate name}}_URL', trailingslashit( plugins_url( '', {{abbreviate name}}_FILE ) ) );
	}

	/**
	 * Initialize the plugins main components.
	 *
	 * @access private
	 * @return void
	 */
	private function run() {
		require_once {{abbreviate name}}_INCLUDES . '/admin.php';
		require_once {{abbreviate name}}_INCLUDES . '/rest.php';
		require_once {{abbreviate name}}_INCLUDES . '/assets.php';

		$this->entities['admin']  = new Admin();
		$this->entities['server'] = new Rest();
		$this->entities['assets'] = new Assets();
	}

	/**
	 * Get plugin version.
	 *
	 * @access public
	 * @return string
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Get plugin components instances.
	 *
	 * @access public
	 * @return array
	 */
	public function get_components() {
		return $this->entities;
	}
}

Plugin::get_instance();
