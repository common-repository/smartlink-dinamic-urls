<?php
echo 
'<div class="wrap">
	
	<h1>Smartlink Dynamic URLs</h1>
	<h2>Instructions</h2>
<p><i>Follow these steps to create a smartlink in a post:</i></p>
<ol>
	<li>Open Smartlink Meta Box (Tools & Options in Gutemberg editor / Screen Options in Classic editor)</li>
	<li>Create new post or edit existing one</li>
	<li>Scroll down were Smartlink Creator is found</li>
	<li>Enter two or more URLs and set No Follow, Target blank and Geotargeting for each one of them</li>
	<li>Insert Smartlink shortcode in post content</li>
	<li>Save post</li>
</ol>
<h2>Use smartlink shortcode enclosing anchor text like this: </h2><h4><code>[smartlink]anchor text[/smartlink]</code></h4>
<p>~Currently only one smartlink can be used in each post.</p>
<p>~Smartlinks can be used only in posts, not in pages</p>
<p> ~It is possible to insert more than one shortcode with different anchor text, but urls and metabox settings will be the same.</p>
<h2>Meta Box ~ Smartlink Creator</h2>

<p>~At least two URLs must be entered to activate smartlink</p>
<p>~Set No follow and Target blank for each URL</p>

<h3>GeoTargeting</h3>

	<p>~Always leave one URL with GT off (---) so visitors from rest of the world can have that URL</p>
	<p>~If all URLs are set for GT, visitors form any other country that is not in the list will have the default GT URLS entered in Settings page</p>
	<p>~If two or more URLs are off, visitors that don´t match with any other geotargeted URL will have one of the URLs in random way</p>
	<p>~If two or more URLs are set for same country, visitors will have a random URL if they match with GT selection</p>

<h2>Settings page</h2>

<p><b>Default URL</b></p>
<p>~Enter default URL to use if there is no URL in metabox and smartlink shortcode is inserted in post</p>

<p><b>Default GT URL</b></p>
<p>~Choose a gloabl URL to be used if there is no GT match and all URLs are set for GT</p>

<p><b>Clean database on uninstall</b></p>
<p>~This action cannot be undone. If you select this option, all data of smartlink will be deleted from database when uninstalling plugin and will not be available if installing again</p>
<h2>Take action</h2>
<p>~<a href="https://woopy.cyou/">Visit Plugin website</a></p> 
<p>~If you find this plugin usefull and you want to show some gratitude, <a href="https://es.wordpress.org/plugins/smartlink-dinamic-urls/#reviews">please leave a positive review here</a></p>
<p>~<a href="https://profiles.wordpress.org/sebastopolys/">Contact plugin author</a></p>
<p>~<a href="https://paypal.me/smarltink">Donate and Support plugin development.</a></p>
</div>';

