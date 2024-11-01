=== Plugin Name ===
Contributors: talhaanwer
Tags: URL Tokens, Dynamic URLs, Build Promotion
Requires at least: 2.0.2
Tested up to: 2.8
Stable tag: trunk

Url Tokens for Post Content Replaces Tokens like %upload_path% with environment specific upload url.

== Description ==

This plugin makes it easy to manage wordpress content for different environments like develeopment, staging and production. 
The author of the post content just need to insert a URL token like %blog_url% or %upload_path% to refer to URLs that will work on all installs.

== Installation ==

1. Upload `url-tokens.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I use these tokens in Custom Fields or Wordpress Themes? =

These tokens can only be used in Post / Page Content and are currently not supported in Title, Custom Fields etc.
It will not be logical to use tokens in Wordpress themes as you can easily use Wordpress builtin functions to get blog specific urls.

= How many tokens are currently supported? =

Three tokens are currently supported:
1. %blog_url% for Home page
2. %template_url% for template path, typically [website home]/wp-content/themes/[active theme]/
3. %upload_path% for Media Library, typically [website home]/wp-content/files/2009/11/ (for Year /Month option ON)
* [website home]/wp-content/files/ (for Year /Month option OFF)
* [website home]/wp-content/blogs.dir/[Blog Id]/files/... (for Wordpress Multiuser - WPMU)

== Changelog ==

= 1.1 =
* Added support for another token, %template_url%. This token can be used to reference images and css 
from the active theme without having to write the environment specific path

== Screenshots ==

1. A sample page with url tokens