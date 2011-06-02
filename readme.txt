=== ligatures-js ===
Contributors: csixty4
Donate link: http://catguardians.org/
Tags: typography, ligatures
Requires at least: 3.0
Tested up to: 3.1.3
Stable tag: 1.0

Loads Chip Cullen's Ligatures.js library and provides an interface for applying to a specific set of CSS selectors.

== Description ==

Chip Cullen's [Ligatures.js](http://chipcullen.com/ligatures/) plugin for jQuery is an extremely lightweight tool automatically inserting ligatures in content where appropriate. Ligatures are glyphs that combine two letter forms into one for stylistic and legibility reasons.

Since it depends on fonts for ligature rendering, it's limited to the four ligatures that are reliably supported: fi, fl, AE, and ae.

The configuration screen lets you pick which text on your site gets ligatures using CSS selectors. Use this plugin to enhance readability in headlines and flavor text on your site.

== Installation ==

1. Upload this plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Find the "Ligatures" configuration option in the WordPress admin interface to configure.

== Frequently Asked Questions ==

= Why does this plugin only change four glyphs? =

The Unicode standard has code points for quite a few ligatures, but most fonts we use on the web only have support for a basic set of characters. Chip Cullen determined that fi, fl, AE, and ae were the only ones he could count on being there.

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial release
