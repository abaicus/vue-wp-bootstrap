<?php
/**
 * Admin part.
 *
 * @package {{abbreviate name}}
 */

namespace {{abbreviate name}};

/**
 * Class Admin
 *
 * @package {{abbreviate name}}
 */
class Admin {
	/**
	 * Admin constructor.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'admin_menu' ] );
	}

	/**
	 * Add admin menu page.
	 *
	 * @hooked `admin_menu`
	 * @access public
	 * @return void
	 */
	public function admin_menu() {
		add_menu_page( __( '{{niceName}} App', '{{textdomain}}' ), __( '{{niceName}} App', '{{textdomain}}' ), 'manage_options', '{{lowercaseAbbrev name}}-app', [ $this, 'plugin_page' ], 'dashicons-heart' );
	}

	/**
	 * Admin page render callback.
	 *
	 * @access public
	 * @return void
	 */
	public function plugin_page() {
		echo '<div class="{{lowercaseAbbrev name}}-wrap"><div id="{{lowercaseAbbrev name}}-app"></div></div>';
	}
}
