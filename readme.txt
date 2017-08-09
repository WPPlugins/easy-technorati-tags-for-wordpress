== Easy Technorati Tags for WordPress ==

== Plugin Name  ==

Contributors: christopherross
Plugin URI: http://thisismyurl.com/downloads/wordpress/plugins/easy-technorati-tags-for-wordpress/
Tags: Technorati tags, tags, terms, links, link building, traffic building,  plugin, post, posts
Requires at least: 3.0.0
Tested up to: 3.5.1
Stable tag: 1.5.0
Donate link:  http://thisismyurl.com/

The Easy Technorati Tags for WordPress quickly adds Technorati tags to a WordPress website.

== Description  ==

There are a few other Technorati Tags generators for WordPress out there but I found most of them overly complicated and fairly difficult to use, often requiring custom fields or complex processes. What this plugin does is takes the native tags from WordPress and generates a list of Technorati tags for your blog.

== Installation  ==

To install the plugin, please upload the folder to your plugins folder and active the plugin.

== Updates ==

Updates to the plugin will be posted here, to [Christopher Ross] (http://thisismyurl.com/)

== Frequently Asked Questions ==

How do I call the function?

Simply add the following code to your WordPress theme files where you'd like the list to appear:

echo thisismyurl_technorati_tags();

Note: the code must be called from within the Loop

= General results =

= Altering the before and after values =
By default the plugin wraps your code in list item (&lt;li&gt;) tags but you can specify how to format the results using the following code:

 thisismyurl_technorati_tags('before=&lt;p&gt;&amp;after=&lt;/p&gt;');


== Donations ==
If you would like to donate to help support future development of this tool, please visit [Christopher Ross](http://thisismyurl.com/downloads/wordpress/plugins/easy-technorati-tags-for-wordpress/)



== Change Log ==

= 1.5.0 (April 6, 2013) =

* Code cleanup
* Removed broken links
* Compatibility test

= 1.2 =
- added wp admin
- can now add to the post automatically.
- added newwindow attribute

= 1.1.6 =
- added nofollow options

= 1.1.5 =
- Added links
- Removed empty options page
- Added credit line
- Added switch to turn credit line off
- Added echo switch
- Added case options
- added instructions link


= 1.1.1 =
- Testing for 2.9.1

= 1.1.0 =
- Fixed 2.8.0 format errors

= 1.0.0 (2009-04-26) =
- Official release as a full, stable plugin.


= 0.3.7 =
- Added admin menu

= 0.3.2 (2009-03-26) =
- Happy Birthday to me
- Fixed a link in the readme.txt file

= 0.3.0 (2009-03-16) =
Added the change log
