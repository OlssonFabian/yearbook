<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.fabianolsson.se
 * @since      1.0.0
 *
 * @package    Wcms18_Year_Book
 * @subpackage Wcms18_Year_Book/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wcms18_Year_Book
 * @subpackage Wcms18_Year_Book/includes
 * @author     Fabian Olsson <fab@fab.com>
 */
class Wcms18_Year_Book_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wcms18-year-book',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
