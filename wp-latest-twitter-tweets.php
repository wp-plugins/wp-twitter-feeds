<?php
/*
Plugin Name: WP Twitter Feeds
Plugin URI: http://www.vivacityinfotech.com/
Description: An easy Twitter feeds widget that provides facility to display twitter tweets on your website using new Twitter 1.1 API.
Author: vivacityinfotech
Version: 1.0
Author URI: http://www.vivacityinfotech.com/
*/
include('twitter_usr_validation.php');
require_once('controller/twitter_widget.class.php');
add_action( 'widgets_init', 'wpltf_reg_widget');
function wpltf_reg_widget()
{

	register_widget("wptt_TwitterTweets");
}
?>
