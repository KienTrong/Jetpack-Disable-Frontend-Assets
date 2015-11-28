<?php
 /*
 * Plugin Name:       Jetpack Disable Frontend Assets
 * Plugin URI:        https://github.com/KienTrong/Jetpack-Disable-Frontend-Assets
 * Description:       One line of code, remove jetpack assets file on fontend in case you only need jetpack for site management feature.
 * Version:           1.0.0
 * Author:            Kien Trong
 * Author URI:
 * Text Domain:
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function jdfa_init(){
    if ( class_exists( 'Jetpack' ) ) {
        // return to the older way of each module enqueing separate CSS files.
        add_filter( 'jetpack_implode_frontend_css', '__return_false' );
    }
}
add_action( 'plugins_loaded', 'jdfa_init' );
