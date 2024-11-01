=== Flip Slideshow ===

Contributors: wpslideshow.com
Author URI: http://wpslideshow.com/flip-slideshow/
Tags: 3d slideshow, flip slideshow, wp slider, slider, slideshow
Requires at least: 3.0
Tested up to: 3.4.1
Stable tag: trunk

Flip Slideshow Plugin for WordPress a free image slideshow. Use [flip] code snippet in your content to dispaly this gallery. It also supports categories and multiple iamge uploads. It is possible to use this slideshow multiple instances.

== Description ==

Flip slideshow Plugin for WordPress a free image slideshow. Use [flip] code snippet in your content to dispaly this gallery. It also supports categories and multiple iamge uploads. It is possible to use this slideshow multiple instances.

Warning: Do not auto update to 2.0 version. You need to remove existing one and install new one. You need to take backup of images and image data before you proceed. 

**Features**

* Plug and play
* Customizable Flip vertical/Horizontal effect to Images
* Images scale/noscale
* Play,pevious,next control navigation
* Customizable auto slide show time
* Customizable Image background color
* Customizable Auto play feature
* Customizable transition time

For a working demo, visit http://wpslideshow.com/flip-slideshow/

Installation video:  http://www.youtube.com/embed/8ssiIr0guhQ

== Installation ==

1. Install automatically through the 'Plugins', 'Add New' menu in WordPress, or upload the 'wp-flipslideshow' folder to the '/wp-content/plugins/' directory. 

2. Activate the plugin through the 'Plugins' menu in WordPress. Look for the "settings" link  under "Flip Slideshow" on left side menu to configure the Options. 


= short codes to use in content =
* <code>[flip]</code> - Use this short code in the content / post to display all images under all categories which are not disabled.

* <code>[flip cats=2,3]</code> - Use this short code in the content / post to display all images under the categories with ID's 2,3.

* <code>[flip imgs=1,2,3]</code> - Use this short code in the content / post to display images which has ID's 1,2,3.

= short codes to use in template =

* <code><?php echo do_shortcode('[flip]');?></code> - Use this short code in the template (php file) to display all images under all categories which are not disabled.

* <code><?php echo do_shortcode('[flip cats=2,3]');?></code> - Use this short code in the template (php file) to display all images under the categories with ID's 2,3.

* <code><?php echo do_shortcode('[flip imgs=1,2,3]');?></code> - Use this short code in the template (php file) to display images which has ID's 1,2,3.

If you facing any issues in using this plugin email us to addons@wpslideshow.com

For a working demo, visit http://wpslideshow.com/flip-slideshow/

Installation video:  http://www.youtube.com/embed/8ssiIr0guhQ

== Screenshots ==

1. screenshot-1.png - Slideshow front end. 

2. screenshot-2.gif - Add new album / category.

3. screenshot-3.gif - Edit image.

4. screenshot-4.png - bulk upload.

5. screenshot-5.gif - edit album / category.

6. screenshot-6.gif - short code to be placed in the content.


== change log ==


=2.0=
This is major change. It is not possible to upgrade from older version to this version. You must remove your old plugin and install new one. Please take backup of your images.

=2.1=
Fixed security bugs