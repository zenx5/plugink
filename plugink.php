<?php

/**
 * @package WP_Rulette_Kavav
 * @version 1.7.2
 */
/*
Plugin Name: Plugin Base K
Plugin URI: https://kavavdigital.com.ve
Description: Plugin de subscripciones
Author: Octavio Martinez
Version: 1.0.0
Author URI: https://wa.me/19104468990
*/

require 'class_wp_subsk.php';

register_activation_hook(__FILE__, 'plugink__active');
register_deactivation_hook(__FILE__, 'plugink__deactive'));
// register_uninstall_hook(__FILE__, array('WP_Subsk', 'uninstall') );

function plugink__active(){
    include_once 'class_plugink.php';
}

function plugink__deactive(){
    
}
