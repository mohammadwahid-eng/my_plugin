<?php
/*
Plugin Name: My Plugin
Plugin URI: http://mohammadwahid.site/myplugin/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Mohammad Wahid
Version: 1.0.1
Author URI: http://mohammadwahid.site/
*/

if( ! function_exists('my_plugin') ) {
	function my_plugin() {
		echo "hello plugin";
	}
	add_action( 'wp_head', 'my_plugin' );
}
