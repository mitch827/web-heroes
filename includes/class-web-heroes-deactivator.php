<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://www.webhereos.it
 * @since      1.0.0
 *
 * @package    Web_Heroes
 * @subpackage Web_Heroes/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Web_Heroes
 * @subpackage Web_Heroes/includes
 * @author     Web Heroes <diego@webheroes.it>
 */
class Web_Heroes_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		
		if ( is_plugin_active( "wh-hfcode/wh-hfcode.php" ) ){
			add_action('update_option_active_plugins', array( __CLASS__ ,'wh_deactivation_addons' ));	
		}	
	}
          
	public static function wh_deactivation_addons(){
		$wh_addons = array ("wh-cf7mc-connector/wh-cf7mc-connector.php", "wh-hfcode/wh-hfcode.php", "wh-widgets/wh-widgets.php");
		deactivate_plugins( $wh_addons );
		wp_die( "<a href='https://github.com/mitch827/web-heroes'><b>All Web Heroes add-ons</b></a> have been disabled. Please enable this plugin to preserve functionalities.<br><br>Go back to <a href='" . get_admin_url(null, 'plugins.php') . "'>plugins page</a>.");
	}

}


