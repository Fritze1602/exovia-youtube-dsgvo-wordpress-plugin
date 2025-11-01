=== exovia YouTube DSGVO ===
Contributors: exovia
Tags: GDPR, DSGVO, YouTube, YouTube Video, YouTube Plugin
Requires at least: 5.8
Tested up to: 6.8
Stable tag: 1.1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

exovia YouTube DSGVO enables you to integrate YouTube Videos in a privacy compliant manner that respects the privacy of your visitors.

== Description ==
You want to embed YouTube videos on your website and ensure that the data protection regulations according to GDPR are complied with? Our new plugin offers you a solution for exactly this!

With our YouTube DSGVO plugin, you can display YouTube videos on your website for free and in compliance with data protection laws. Instead of loading the videos directly, a colored placeholder of your choice is displayed first. By adding your own words, this becomes an attractive interaction area for your visitors.

Only when your visitors click on one of the consent buttons, a connection to the YouTube server is established and data is transferred to YouTube. Then the desired video is loaded and can be played.

Both the placeholder and the YouTube video are mobile-optimized and automatically adapt to the display size. You can also assign a maximum width to both elements to achieve the best possible visual result.

With our plugin, you protect the privacy of your visitors while taking advantage of videos for your website success.

Want a live demo? Then feel free to visit the following article. There we have integrated a YouTube video of ours with our DSGVO plugin in a data protection compliant manner and go into more detail on the topic of data protection and YouTube: [YouTube DSGVO konform einbinden](https://www.exovia.de/journal/wordpress-youtube-dsgvo-konform/).

**YOUR 6 EASY TODOS FOR 1 VIDEO**

1. Install and activate the plugin "exovia YouTube DSGVO".
1. Go to youtube.com, find the video you want to embed in your website and click on it
1. Click on share and then on embed
1. Embed the copied HTML code into the YouTube Fallback Iframe field in your plugin settings
1. Adjust the colors and sizes of "exovia YouTube DSGVO" to match your color scheme, web design and website terms. Simply from your WP backend.
1. Use the shortcode: <code>[exovia-dsgvo-youtube-video]</code> anywhere on your website where you want your video to appear - e.g. on the blog, on your about page - or even directly on your homepage.

**4 SIMPLE STEPS FOR YOUR 2ND OR 50TH VIDEO**
Extended Shortcode Example:
```
[exovia-dsgvo-youtube-video iframe='&lt;iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/qqobbcK0R-o?start=32" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen&gt;&lt;/iframe&gt;' layer_bg_color='#f88379' button_bg_color='#8379f8' layer_bg_image_id="11"]
```
1. Copy the extended shortcode above and place it on your website where you want your video to appear.
1. Go to youtube.com, find the video you want to embed in your website, and click on it.
1. Click "Share" and then click "Embed."
1. Replace the iframe in the extended shortcode you copied before with the new iframe code.

**WHAT THE PLUGIN DOES FOR YOU**

* Until the user's consent has been explicitly given, it prevents the connection to YouTube's servers (GDPR) and thus protects the privacy of your visitors.
* Thanks to an adjustable level, it reserves space for the video until it is loaded, thus stabilizing the design and impact of your website.
* Based on your color and size wishes, it ensures that your placeholder automatically adapts to your layout.
* The extended shortcode makes it possible to embed different videos in a privacy-compliant way and to style them differently or add different text if you wish.
* Whether Classic Editor or Block Editor (Gutenberg): the plugin is compatible with both and makes sure that your settings are accepted and realized.
* It works well with ACF and Carbon Fields
* You have a multilingual site? The plugin works in all languages and can be designed and re-written for specific pages. We will start working on the German translation after approval, and other languages will follow.
* It provides a required link to the YouTube / Google terms of use and
* offers a simple and advanced short code that allows you to use the secure videos anywhere.

**WHAT THE PLUGIN IS NOT FOR**

* Handling Videos form different platforms (Sorry. But feel free to let us know if there is interest. If enough people get together we will adapt or write a new plugin).
* Saving users content settings in web databases. Last but not least, this is why the plugin is simple and secure.

**Shortcode parameter**
* title (string)
* iframe (string from youtube embed)
* button_title (string)
* button_title_all (string)
* layer_text (string)
* anchor_text (string)
* layer_bg_image_id (integer — WordPress attachment ID used as placeholder background image)
* layer_bg_color (css color, hex)
* button_bg_color (css color, hex)
* font_color (css color, hex)
* enable_info_box (true or false)
* show_load_all_button (true or false)
* info_box_text (string)

**BUGS & FEEDBACK**
Your feedback is important to us. If you find mistakes, have wishes, ideas or suggestions, please send us an e-mail to kontakt@exovia.de.

This plugin was developed with love by our Hamburg-based web design agency exovia.

Legal notice (German): [www.exovia.de/impressum/](https://www.exovia.de/impressum/)

You are free to use it on any website across countries to protect the privacy of your users.

Note: Of course, activating this plugin cannot guarantee that your website is completely compliant with the GDPR. When using Google Analytics or Facebook pixels, for example, other or additional measures must be taken.

== Development and Build Tools ==

If you want to view the complete source code, including the `src` files, build tools, and test tools, you can do so on [GitHub](https://github.com/Fritze1602/exovia-youtube-dsgvo-wordpress-plugin).

After cloning the repository, you can install the necessary modules by running `npm install` in the base directory. Developers can then use `npm run dev` for development mode and `npm run build` for production builds. The correct proxy can be set in the `webpack.config.js`.

This provides complete transparency of the functionality and source code, giving developers the opportunity to customize and enhance the plugin.

We welcome feedback and contributions from the developer community.

== Installation ==
This section describes how to install and run the plugin.

1. login to /wp-admin
1. go to Plugin -> Add new plugin
1. Search for "exovia YouTube DSGVO"
1. Install and activate the plugin directly from your WordPress backend
1. Configure the "exovia YouTube DSGVO", via the plugin settings
1. Visit [YouTube](https://www.youtube.com/) to get your iframe code
1. Go to the YouTube video you want to embed
1. Click SHARE
1. From the list of Share options, click Embed
1. From the box that appears, copy the HTML code
1. Paste your code into the YouTube Fallback Iframe input field of the plugin in the plugin settings
1. Customize the colors and sizes if you want to fit them to your design
1. Use the shortcode: <code>[exovia-dsgvo-youtube-video]</code> anywhere on your website
1. Wrapp your video as you wish by giving it a max-width
1. Look at your new Video
1. From the second video, use the extended shortcode to add a different video than before

Alternatively, the plugin can be installed by uploading it to your plugin files directory 'wp-content/plugins/plugin-name'. The activation as well as all further steps are then carried out as usual from the WP-Admin area.

== Frequently asked questions ==

= How do I get my iframe code =

* Visit [YouTube](https://www.youtube.com/)
* Search for your desired video and click on it.
* Click SHARE
* From the list of Share options, click Embed
* From the box that appears, copy the HTML code
* Paste your code into the iframe input field of the plugin in the plugin settings

= What is GDPR? =
The General Data Protection Basic Regulation (GDPR) is a legal framework regulating the collection and processing of personal data of persons living in the European Union (EU).

= For whom is the GDPR relevant? =
The Regulation applies regardless of where websites are located.
It must be complied with by all websites that attract European visitors. Even if goods and services are offered that are not specifically aimed at EU citizens.

= What are shortcodes? =
Shortcodes are short code characters that allow you to add dynamic elements, such as YouTube Videos, within your WordPress content area in compliance with your privacy policy.
The shortcut for the plugin is <code>[exovia-dsgvo-youtube-video]</code>.

= How can I use shortcodes in widgets? =
The shortcode can be added via the shortcode widget [/], which is specially designed for short codes.

= How can I use ACF with the plugin to embed multiple videos? =
With the recent security release of Advanced Custom Fields (ACF), iframes embedded in rich text fields are filtered out when using `the_field`. This change enhances security by preventing potentially unsafe HTML from being displayed. However, if you still wish to use our plugin to embed multiple videos within your content, you can include the iframe in the shortcode and use `echo get_field()` to output this unsafe HTML. This approach ensures that your iframe is not filtered out by ACF, allowing you to display videos as intended.

== Privacy and Data Usage ==

This plugin connects to YouTube to embed videos in a GDPR-compliant manner. When a user interacts with the video, a connection to YouTube's servers (https://www.youtube-nocookie.com) is established, and data may be transmitted.

**Third-Party Service:**
- **YouTube:** This plugin uses YouTube's no-cookie iframe embed to display the fallback videos. By clicking on the video, users agree to YouTube's privacy policy and terms of use.
- **No-Cookie Domain for fallback video:** [https://www.youtube-nocookie.com](https://www.youtube-nocookie.com/embed/FQnEL7pqo40)
- **Privacy Policy:** [YouTube Privacy Policy](https://policies.google.com/privacy)
- **Terms of Service:** [YouTube Terms of Service](https://www.youtube.com/static?template=terms)

== Screenshots ==

1. Embed the copied Iframe code into the iframe field 'YouTube Fallback iframe' in the plugin settings
2. Insert the shortcode <code>[exovia-dsgvo-youtube-video]</code> in the text field - without block editor
3. insert the shortcode <code>[exovia-dsgvo-youtube-video]</code> in the text field - with block editor
4. Flexibility: GDPR Video Wrap with Fallback from settings-page on top of GDPR Video Wrap with individual parameters.
5. Youtube Video iframe code as basis for the integration into your plugin
6. Plugin rendering with background image


== Upgrade Notice ==
= 1.1.0 =
Adds optional placeholder background images and improves asset loading. Recommended update for all users.


== Change log ==
= 1.1.0 =
* Fix: Assets now load correctly on archive and landing pages (thanks to Erik Tews)
* Feature: Added support for a background image placeholder via `layer_bg_image_id` (thanks to Erik Tews)
* Polish: Cleaned up inline styles (fallback color + optional image; layout moved to CSS)
= 1.0.3 =
* Successful tested with WordPress 6.8
= 1.0.2 =
* Successful tested with WordPress 6.7.1
= 1.0.1 =
* Compatibility fix with php 7.0
= 1.0.0 =
* Addition of the initial version of the exovia YouTube DSGVO plugin

