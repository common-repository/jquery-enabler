<?php
/*
Plugin Name: jQuery Enabler
Description: This plugin will make sure the latest version of jQuery available within your WordPress installation is being called on every page.
Version: 1.1.2
Author: Brian Staruk
Author URI: http://brian.staruk.me
*/

// Close the door on anyone trying to directly access the plugin
if (!function_exists('add_action'))
{
	echo 'You shouldn\'t be here.';
	exit;
}

class jQueryEnabler {

    public function __construct() {
		add_action( 'wp_enqueue_scripts', array(&$this,'jQueryEnablerEnqueue') );
    }

	public function jQueryEnablerEnqueue() {
		wp_enqueue_script( 'jquery' );
	}
	
}

$jQueryEnabler = new jQueryEnabler;
?>