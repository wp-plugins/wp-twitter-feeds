=== Plugin Name ===
Contributors: VivacityInfotech
Tags: Twitter, Feeds, Tweets, Twitter-OAuth, social feeds
Requires at least: 3.0
Tested up to: 3.8
License: GPLv2 or later

WP Twitter Feeds - Displays Tweets on your Wordpress site using the new Twitter OAuth API v1.1. The Tweets will be displayed even when you are not connected as,they're backed up!

== Description ==

Displays latest tweets from your Twitter account using Twitter oAuth API 1.1.

= Features =

== Installation ==

Installation consists of following steps:

1. Upload plugin to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the Widget to your page in sidebar and update the required details
4. Click Save
5. Note: You will need to create a Twitter Application.

= Creating a Twitter Application =


To find Oauth Keys , go to https://dev.twitter.com/ and sign in.

Once you have logged in successfully, hover over your name in the top right corner, and click "My Applications," then "Create a New Application."

Enter a unique name , a description , and your site's URL. You can leave the Callback URL empty as it is not used for this implementation.

You will be taken to a new screen, there's one more step then you can copy all the details into correct fields of the Widget and be on your way.

Click the "Create my Access Token" button. This is a shortcut to authenticate your own account with your application .

Now click the Details Tab as all the information you need is presented here so you can just copy the required information into the exact corresponding inputs fields of the Widget.

= The Widget Options =

Fill in your details, from the Twitter Application details (as described below).

* You can select the Title of the Widget as you like.
* Enter your Twitter username (without the @) just the name.
* How many Tweets to display
* The time in minutes between updates (per the API requirement) this should be 5 but if the API changes you can alter it here.
* Consumer Key: Under the *OAuth settings* heading
* Consumer Secret: Under the *OAuth settings* heading
* Access Token: Under the *Your access token* heading
* Access Token Secret: Under the *Your access token* heading
* Choose if you want the @replies included or not
* Avatar: Your image or logo as displayed on Twitter show on/off
* Avatar: Apply Border radius to your avatar image and also set the Avatar size.
* Display Tweets time in Twitter style , choose to display the 'ago' or not
* Show Twitter intents for 'Reply', 'Retweet' and 'Favourite'
* Style the icons to your display with different colors.
* Click Save

Enjoy!

== Changelog ==

= 1.0 =
* Initial release
