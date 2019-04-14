<?php
/**
 * Handles the rest API routes.
 *
 * @package {{abbreviate name}}
 */

namespace {{abbreviate name}};

/**
 * Class Rest
 *
 * @package {{abbreviate name}}
 */
class Rest {

	/**
	 * Rest api namespace.
	 *
	 * @access private
	 * @var string Namespace.
	 */
	private $namespace;

	/**
	 * Rest constructor.
	 */
	public function __construct() {
		$this->namespace = '{{lowercaseAbbrev name}}/v1';
		add_action( 'rest_api_init', [ $this, 'register_routes' ] );
	}

	/**
	 * Register rest routes.
	 *
	 * @access public
	 * @hooked `rest_api_init`
	 * @return void
	 */
	public function register_routes() {}
}
