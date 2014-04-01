<?php
/*
Plugin Name: WP Twitter Feeds
Plugin URI: http://www.vivacityinfotech.com/
Description: Displays latest tweets from your Twitter account using Twitter oAuth API 1.1.
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
