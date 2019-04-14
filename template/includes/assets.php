<?php
/**
 * Assets handler.
 *
 * @package {{abbreviate name}}
 */

namespace {{abbreviate name}};

/**
 * Class Assets
 *
 * @package {{abbreviate name}}
 */
class Assets {
	/**
	 * Assets handle.
	 *
	 * @var string
	 */
	private $handle = '{{lowercaseAbbrev name}}-admin';

	/**
	 * Assets constructor.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @hooked `admin_enqueue_scripts`
	 * @access public
	 * @return void
	 */
	public function enqueue_scripts() {
		$screen = get_current_screen();

		if ( ! isset( $screen->base ) || $screen->base !== 'toplevel_page_{{lowercaseAbbrev name}}-app' ) {
			return;
		}

		wp_register_style( $this->handle, {{abbreviate name}}_URL . 'assets/css/style.css', [], {{abbreviate name}}_VERSION );
		wp_enqueue_style( $this->handle );

		wp_register_script( $this->handle, {{abbreviate name}}_URL . 'assets/js/build.js', [], {{abbreviate name}}_VERSION, true );
		wp_localize_script( $this->handle, '{{abbreviate name}}', $this->app_localization() );
		wp_enqueue_script( $this->handle );
	}

	/**
	 * Localize main application script.
	 *
	 * @access private
	 * @return array
	 */
	private function app_localization() {
		return [
			'strings' => [
				'title'       => 'Hello from VUE.JS',
				'description' => 'This text is passed through the {{abbreviate name}} localized object.',
			],
		];
	}
}
