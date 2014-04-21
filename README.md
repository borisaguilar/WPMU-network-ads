WPMU-network-ads
================

Multisite Plugin, display ads code on every site on your network.

=== Installation and Usage===
V0.0.1: Place the file in mu-plugins directory of your wpmu. Edit 
adsense code accordingly. Enjoy :)

=== Future Features ===
- Select the sites that don't have to display ads.
- Network Admin interface to paste adsense code :)
- Internationalization

== Author ==
Boris Aramis Aguilar Rodriguez 
me <at> borisaguilar.com

== License ==
GPLv2 License

Changelog:
==========
= 0.0.1 =
- Hook on wp_foot to inject adsense code manually added on plugin
- Generate random class in HTML injected code to avoid not displaying 
ads by hiding with css.
