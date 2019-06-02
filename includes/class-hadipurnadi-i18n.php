<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       lapakunik.com
 * @since      1.0.0
 *
 * @package    Hadipurnadi
 * @subpackage Hadipurnadi/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hadipurnadi
 * @subpackage Hadipurnadi/includes
 * @author     Hadi Purnadi <hadipurnadi@gmail.com>
 */
class Hadipurnadi_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hadipurnadi',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
