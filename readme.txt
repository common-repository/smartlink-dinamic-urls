=== SmartLink Dynamic URLs ===
Contributors: sebastopolys
Donate link: https://paypal.me/sebastopolys/
Tags:  smartlink,dynamic link,linkbuilding,geolocalize URL,links
Requires at least: 6.5
Tested up to: 6.6.2
Requires PHP: 7.4
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Attach up to 5 URLs to a single link in random way or depending on user geo-localization.

== Description ==

With SmartLink DU plugin you can attach up to 5 URLs to a single link and use them in a single anchor text depending on visitor Geo-Localization or randomly.
 
Every time the page is loaded, one of the 5 URLs you've entered will be inserted randomly in the link if there is no GeoTargeting match or if Geotargeting feature is off.

As the link sintaxis is same as a normal link, it works exactly the same.
There is no risk of being penalized by Search engines, &iexcl;THIS is NOT a black hat Plugin!

SmartLink can be used to make a more impressive internal linking strategy, specially useful if you have tons of content and want to link to your posts more aggressively.


Also it can be useful for essential links within posts excerpts showing in top of the main page, where you can't add another link and want to use the existing one, linking to several URLs. Also can be used as a link shortener, compressing up to five urls in a single link

You can use SmartLink to show different external URLs to each of your visitors from different countrys using the GeoTargeting feature. 

If facing some kind of issue or error and you think it is related to this plugin, please <a href="https://wordpress.org/support/plugin/smartlink-dinamic-urls/">open a thread on the support Forum</a>.

This plugin will be updated and more features will be added depending on the community support, 

* [Leave a positive review here.](https://wordpress.org/support/plugin/smartlink-dinamic-urls/reviews/)
* [Make a PayPal donation](https://www.paypal.com/paypalme/sebastopolys/)

== Features ==

> Insert up to 5 urls to a single link
> Attach URL to link in random way
> Select nofollow  attribute for each URL
> Open link in new tab for each URL (target="_blank" rel="noopener noreferal")
> GEOTARGETNG: Geolocalize visitors and use URL depending on country.

== Installation ==

1. Download here the .zip file
2. Open your Plugins page in dashboard of your WordPress website
3. Click on "add new"
4. Click on "upload plugin"
4. Browse the file you've just downloaded
5. Click "install now"
6. Activate plugin

Alternative:

1. Go to your plugins page in dashboard of your WordPress website
2. Click on "add new"
3. Type "Smartlink Dynamic URLs" in search box
4. Click on 'install now'
5. Activate plugin
 
== Frequently Asked Questions ==
 
= &iquest;What does this plugin exactly do? =

SmartLink DU allows to create links with more than one URL in it.
You can use up to 5 URLs in each link and only one smartlink in each post.
When clicking the link, visitor will be redirected to one of the 5 URLs randomly just like a normal link.
Visitor won't notice nothing at all if they don't click on a same link twice. When that happens, odds of seeing the same page are higher if less URLs are used.

= &iquest;How does SmartLink DU works? =

When entering two or more URLs in meta box, the plugin generates a shortcode that must be inserted manually by webmaster.
The shortcode looks like this:  <code>[smartlink]anchor text[/smartlink]</code> enclosing the anchor text just like a normal link.
Shortcode is not shown in frontend, even you can see it in visual editor it won't be seen when anybody access the page.
You can also insert shortcode manually without using the button.

= &iquest;How does GeoTargeting feature work? =

GT feature uses Geo-localization API to know were user is located.
This way it is possible to choose which URLs will be used in smartlink depending on users country location.
GT feature supports a limited list of countries.
Current list of countries available: Argentina, Australia, Brasil, Canada, Chile, China, Colombia, Germany, Spain, United Kingdom, France, Mexico, EEUU, India, Israel, Italy.

= &iquest;What about SEO? =

A link created with this plugin looks exactly the same to eyes of spider bots. So they are crawled just as a normal link.
Anyway, URL in link will change each time bots index it. So it will assume that link has been edited changing URL. That's nothing bad at all, also can be a good thing as Search engines bots adress edits as updates of content, and that is something good for SEO.

= &iquest;What is this plugin useful for? =

You can atach up to 5 URLs to a link, so if you have one single link and you want to insert more than one
url to it, this is the right plugin for that. Specially recommended for internal linking, if you have several posts you have to link in one single anchor text.
This plugin it's perfect to improve your linking strategy with a more agressive kind of link.
 
== Screenshots ==

1. SmartLink Dynamic Links Meta Box. 

== Changelog ==

= 1.1.1 =
* Fix unproper escaping & sanitization
* use wp_remote_get() instead of CURL

= 1.0.9 =
* Code optimization
* Fix API error on localhost

= 1.0.6 =
* Major Update
* Admin menu dashboard
* Set default URL
* Code optimization

= 1.0.5 =
* Major update
> Code optimization
> Fix GT bugs
> Guttenberg support

= 1.0.3 =
* New feature added: GeoTargeting

= 1.0.2 =
* Code optimization

= 1.0.1 =
* Fix new post bug
* New features added:
> rel="nofollow" 
> target="_blank" rel="noopener noreferal"

= 1.0 =
* First version









