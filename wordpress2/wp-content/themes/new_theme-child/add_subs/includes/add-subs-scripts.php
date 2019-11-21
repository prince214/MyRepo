<?php

//ADD SCRIPTS

function yts_add_scripts(){
	//ADD Main CSS
	wp_enqueue_style('yts-main-style',plugins_url().'/add_subs/css/style.css');

	//ADD MAIN JS
	wp_enqueue_script('yts-main-script',plugins_url().'/add_subs/js/main.js');

	//ADD GOOGLE SCRIPT
	wp_register_script('google','https://apis.google.com/js/platform.js');
	wp_enqueue_script('google');

	wp_register_script('twitter','https://platform.twitter.com/widgets.js');
	wp_enqueue_script('twitter');

	wp_register_script('facebook','https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0');
	wp_enqueue_script('facebook');
}

add_action('wp_enqueue_scripts','yts_add_scripts');


