# No Regime For Me

A WordPress plugin that adds short quotes and tips to the admin bar, and longer quotes, tips, and insights in a dashboard widget or on the front end via shortcode. Content is drawn from a built-in library focused on liberty, vigilance, and civic reflection.

[**Getting started & docs**](GETTING_STARTED_PLUGIN.md) · [**Release & submission**](RELEASE.md)

## Table of Contents

- [About the project](#about-the-project)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Project structure](#project-structure)
- [Development](#development)
- [License](#license)
- [Contact](#contact)

## About the project

**No Regime For Me** gives your WordPress admin a light, thoughtful touch: a short quote or one-liner appears in the top admin bar (similar to Hello Dolly), and you can show longer content in a dashboard widget and/or on any post or page with a shortcode.

- **Admin bar** — One random short quote or tip in the black bar when you’re logged in.
- **Dashboard widget** — Optional widget on the main Dashboard with a random longer quote, tip, or insight.
- **Shortcode** — Use `[no_regime_content]` in the block editor or classic editor to display one random longer item on the front end.
- **Settings** — Choose where longer content appears: dashboard only, shortcode only, or both (under **No Regime For Me** in the admin menu).

The plugin ships with a curated library in `content/library.php`. You can edit that file to add your own quotes and tips; see the comments in the file and [design/content/citation-and-content.md](design/content/citation-and-content.md) for guidance. All user-facing strings are translation-ready (text domain: `no-regime-for-me`).

## Requirements

- **WordPress** 5.9 or later  
- **PHP** 7.4 or later  

## Installation

1. Get the plugin files (clone the repo or download a zip from [Releases](https://github.com/spencergoldade/No-Regime-For-Me/releases)).
2. Ensure the main plugin file and its folders sit **inside one folder** (e.g. `no-regime-for-me`). That folder goes in your WordPress `wp-content/plugins/` directory.
3. In WordPress admin, go to **Plugins**, find **No Regime For Me**, and click **Activate**.

**From a zip (e.g. after downloading a release):**

1. Create a folder named `no-regime-for-me` and put the plugin files inside it (the main PHP file plus `admin/`, `includes/`, `assets/`, `content/`).
2. Zip that folder so the archive contains one folder named `no-regime-for-me` with the files inside.
3. In WordPress: **Plugins → Add New → Upload Plugin**, choose the zip, then **Install Now** and **Activate**.

**Required for the plugin to work:** `no-regime-for-me.php`, `admin/`, `includes/`, `assets/`, `content/`. Optional: `languages/` for translations, `readme.txt` and `LICENSE` if you’re packaging for distribution.

## Usage

- **Admin bar** — After activation, a random short quote or tip appears in the admin bar on every admin page.
- **Dashboard widget** — If you leave the default setting or choose “Dashboard” or “Both”, a widget appears on the main Dashboard with one random longer quote, tip, or insight.
- **Shortcode** — Add `[no_regime_content]` to any post or page. The plugin enqueues its styles automatically. In **No Regime For Me** settings, choose “Shortcode only” or “Both” so the shortcode is active.
- **Settings** — In the admin menu, open **No Regime For Me** to choose: **Dashboard widget**, **Shortcode only**, or **Both**.

## Project structure

```
no-regime-for-me/
├── no-regime-for-me.php   # Main plugin file
├── admin/                 # Settings page and admin styles
├── includes/              # Content loading and display logic
├── assets/                # CSS for shortcode and base styles
├── content/               # Quote/library (library.php; edit here to add content)
├── readme.txt             # WordPress.org readme (for plugin directory)
├── RELEASE.md             # Testing, Git, and SVN submission notes
└── GETTING_STARTED_PLUGIN.md
```

The repo also includes `design/` (tokens, content guide, IA), `profiles/`, `tests/` (PHPUnit), and `.cursor/`. These are for development and design; they are not required on a live site.

## Development

- **Tests:** From the plugin root, run `composer install` then `./vendor/bin/phpunit`. See [tests/README.md](tests/README.md).
- **Releases and WordPress.org:** See [RELEASE.md](RELEASE.md) for versioning, Git tagging, and SVN workflow for the plugin directory.

## License

GNU General Public License v3.0 or later. See [LICENSE](LICENSE).

## Contact

**Spencer Goldade** — [spencergoldade.ca](https://spencergoldade.ca)  

Repository: [github.com/spencergoldade/No-Regime-For-Me](https://github.com/spencergoldade/No-Regime-For-Me)
