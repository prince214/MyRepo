<?php 

  /*
  Plugin name: ADD SUBS
  Plugin URI: https://x912_plugin.com/
  Description: Testing my 1st wordpress plugin development
  Author: Prince Paraste
  Author URI: http://AUTHOR_URI.com
  Version: 1.0.0
  Text Domain: x912_plugin
  License: GPLv2 or later
  */

 


//FOR BADASS SECURITY
  if(!defined('ABSPATH')){
    exit;
  }

/* ADMIN MENU DISPLAY*/
add_action('admin_menu', 'social_plugin_setup_menu');
 
function social_plugin_setup_menu(){
        add_menu_page( 'SOCIAL PAGE', 'ADD SOCIAL', 'manage_options', 'social-page', 'social_panel' );
}
 
function social_panel(){
       
       echo "<h2>karya pragati pe hai</h2>";


}









//LOAD SCRIPTS
require_once(plugin_dir_path(__FILE__).'/includes/add-subs-scripts.php');


//LOAD CLASS
require_once(plugin_dir_path(__FILE__).'/includes/add-subs-class.php');

//Register Widget
function register_addsubs(){
  register_widget('add_subs_Widget');
}


//HOOK in function
add_action('widgets_init','register_addsubs');

