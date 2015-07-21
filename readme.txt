=== Post Date Change Redirection ===
Contributors: gagan0123
Tags: Post Date, Redirection, 301
Requires at least: 1.5.1
Tested up to: 4.4.2
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Handles the changes in the permalink due to change in post date by providing 301 redirection

== Description ==

Plugin handles the permalink changed due to changes in the post date when post date is used in the permalink structure.
Tries to correct any malformed permalinks by trying to find the post in case of 404(File not found) header.
It is just plug and play, activate it and it starts working, no configuration required.


== Installation ==

1. Add the plugin's folder in the WordPress' plugin directory.
1. Activate the plugin.
1. Now the plugin will handle the 301 redirections for the changed date posts

== Changelog ==

= 1.0 =
* Initial plugin

= 1.1 =
* Tested with WordPress 4.0

= 2.0 =
* Added feature to search old post slugs as well
* Made sure that query variables, if any, are also passed along in the new URL