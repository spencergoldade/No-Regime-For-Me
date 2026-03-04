=== No Regime For Me ===
Contributors: spencergoldade
Donate link: https://spencergoldade.ca
Tags: quotes, dashboard, shortcode, admin bar, inspiration
Requires at least: 5.9
Tested up to: 6.7
Stable tag: 1.0.0
Requires PHP: 7.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Displays short quotes in the admin bar and longer quotes, tips, and insights in a dashboard widget or on pages via the shortcode [no_regime_content].

== Description ==

No Regime For Me adds light, thoughtful quotes and tips to your WordPress admin experience. A short quote or one-liner appears in the admin bar (similar to Hello Dolly); longer content can appear in a dashboard widget and/or on the front end via the shortcode `[no_regime_content]`.

**Features:**

* **Admin bar** – A random short quote or tip in the top admin bar when logged in.
* **Dashboard widget** – Optional widget on the main Dashboard with a random longer quote, tip, or insight.
* **Shortcode** – Use `[no_regime_content]` in any post or page to display one random longer item.
* **Settings** – Choose where longer content appears: dashboard only, shortcode only, or both.

All user-facing strings are translation-ready (Text Domain: no-regime-for-me). Settings use the WordPress Options API with sanitization and capability checks.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/`, or install via **Plugins → Add New** and upload a zip of the plugin folder.
2. Activate **No Regime For Me** from the Plugins screen.
3. Go to **No Regime For Me** in the admin menu to choose where longer content appears (dashboard, shortcode, or both).
4. Optionally add the shortcode `[no_regime_content]` to a post or page to show a random quote, tip, or insight on the front end.

== Frequently Asked Questions ==

= Where does the admin bar quote come from? =

The plugin ships with a built-in library of short quotes and tips in `content/library.php`. The admin bar shows one random item from that library each time the page loads.

= Can I add my own quotes? =

Yes. Edit the file `content/library.php` in the plugin folder. Follow the comments and structure already in the file. Keep short_quotes and admin_bar_tips very short so they fit in the admin bar.

= How do I show longer content on the front end? =

Add the shortcode `[no_regime_content]` to any post or page. In **No Regime For Me** settings, choose "Shortcode only" or "Both" so the shortcode is active.

== Credits ==

The plugin's quotes and ideas are drawn from six reference works (all in the public domain or otherwise credited). Credit where credit is due—and a reminder that fascism and authoritarianism are not new problems; these texts have long warned us.

* *The Federalist Papers* (Hamilton, Madison, Jay)
* *Readings on Fascism and National Socialism* (anthology)
* *Secret Armies* (Project Gutenberg)
* *The Pedigree of Fascism* (Project Gutenberg)
* *It Can't Happen Here* – Sinclair Lewis
* *They Thought They Were Free* – Milton Mayer

== Screenshots ==

1. Admin bar with a short quote.
2. Dashboard widget with a longer quote and attribution.
3. Settings page: choose where longer content appears.

== Changelog ==

= 1.0.0 =
* Initial release.
* Admin bar short quotes and tips.
* Dashboard widget for longer content.
* Shortcode `[no_regime_content]`.
* Settings: dashboard, shortcode, or both.

== Upgrade Notice ==

= 1.0.0 =
Initial release.
