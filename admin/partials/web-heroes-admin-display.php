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

	<div id="wh-plugin-list">
		
		<div class="wh-plugin-wrap">
			<a href="?page=wh-cc-creator">
				<div class="wh-plugin">
					<div class="img-wrapper-1">
						<img src="<?php echo plugins_url( 'img/graphic.svg', dirname(__FILE__) ); ?>">
					</div>
					<div class="wh-plugin-text" style="height: 140px;">
						<h4 class="dashicons-before dashicons-edit"> WH Content Creator</h4>
						<p class="wh-plugin-description">Powerful plugin for creating custom content such as custom taxonomies, custom posts and to customize taxonomy, term and post type archive pages.</p>
					</div>
				</div>
			</a>
		</div>
		
		<div class="wh-plugin-wrap">
			<a href="?page=wh-cf7mc-connector">
				<div class="wh-plugin">
					<div class="img-wrapper-2">
						<img src="<?php echo plugins_url( 'img/graphic.svg', dirname(__FILE__) ); ?>">
					</div>
					<div class="wh-plugin-text" style="height: 140px;">
						<h4 class="dashicons-before dashicons-email-alt"> WH CF7 Mailchimp connector</h4>
						<p class="wh-plugin-description">A simple add-on to enable an easy management of contacts registration between Contact Form 7 and Mailchimp.</p>
					</div>
				</div>
			</a>
		</div>
		
		<div class="wh-plugin-wrap">
			<a href="?page=wh-hfcode">
				<div class="wh-plugin">
					<div class="img-wrapper-3">
						<img src="<?php echo plugins_url( 'img/graphic.svg', dirname(__FILE__) ); ?>">
					</div>
					<div class="wh-plugin-text" style="height: 140px;">
						<h4 class="dashicons-before dashicons-admin-generic"> WH Custom code for header and footer</h4>
						<p class="wh-plugin-description">A very simple plugin to let you insert custom code in header and footer without touch template files.</p>
					</div>
				</div>
			</a>
		</div>
		
		<div class="wh-plugin-wrap">
			<a href="?page=wh-widgets">
				<div class="wh-plugin">
					<div class="img-wrapper-4">
						<img src="<?php echo plugins_url( 'img/graphic.svg', dirname(__FILE__) ); ?>">
					</div>
					<div class="wh-plugin-text" style="height: 140px;">
						<h4 class="dashicons-before dashicons-editor-table"> WH Widgets</h4>
						<p class="wh-plugin-description">Collection of useful widgets.</p>
					</div>
				</div>
			</a>
		</div>
		
	</div>
</div>
