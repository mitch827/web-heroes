<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.webhereos.it
 * @since      1.0.0
 *
 * @package    Web_Heroes
 * @subpackage Web_Heroes/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	
	<div id ="welcome-panel" class="welcome-panel">
	    <div class="welcome-panel-content">
		    <p>This plugin collects alla WH related addons:</p>
		    <ul>
			    <li><a href="?page=wh-cf7mc-connector" class="button-secondary">WH CF7 - Mailchimp connector</a></li>
			    <li><a href="?page=wh-hfcode" class="button-secondary">WH Header and Footer Text</a></li>
			    <li><a href="?page=wh-widgets" class="button-secondary">WH Widgets</a></li>
		    </ul>
		    
		    <p><b>TODO:</b> insert settings and use one plugin to control all the addons.</p>
	    </div>
	</div>
</div>
