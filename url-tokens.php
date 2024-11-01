<?php /*
    Plugin Name: Url Tokens in Post Content
    Plugin URI: http://tanwer.wordpress.com/wp-plugins/url-tokens-post-content/
    Version: 1.0
    Author: Talha Anwer
    */

	/**
	 * Replaces tokens with blog meta data
	 *
	 * Talha (11/23/09): To save on time on moving from server to server like dev, staging, prod.
	 *
	 * @param string $text The text which has to be formatted.
	 * @return string Text with url tokens converted to blog specific Urls.
	*/
	function wptokens($text) {
		$text = trim($text);
		if ( $text === '' )
			return $text;
		$blogurl = get_bloginfo('url');
		$uploadPath = wp_upload_dir();
		$templateurl = get_bloginfo('template_url');
		$text = str_replace(array('%blog_url%', '%upload_path%', '%template_url%'), array($blogurl,$uploadPath['url'],$templateurl), $text);
	
		return $text;
	}
	add_filter('the_content', 'wptokens');?>
