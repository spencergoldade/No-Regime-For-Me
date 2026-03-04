# No Regime For Me

A WordPress plugin.

[**Explore the docs**](GETTING_STARTED_PLUGIN.md) · Report Bug · Request Feature

## Table of Contents

- [About The Project](#about-the-project)
  - [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Roadmap](#roadmap)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)
- [Acknowledgments](#acknowledgments)

## About The Project

Describe what this plugin does and why it exists. Replace this section with a short overview of the problem it solves and the main features.

### Built With

- [WordPress](https://wordpress.org/)
- PHP 7.4+

## Getting Started

### Prerequisites

- A **WordPress site** (you need a working WordPress installation—see [wordpress.org](https://wordpress.org/) if you’re new to WordPress).
- **PHP 7.4 or higher** (your host usually provides this; most WordPress hosts do).

### What You Need to Install

WordPress runs your site; **plugins** add features. Plugins live in a folder inside your WordPress install. For **No Regime For Me** to work, that folder must contain these files and folders:

**Required (the plugin won’t work without them):**

| File or folder        | Purpose |
|------------------------|--------|
| `no-regime-for-me.php` | Main plugin file (WordPress looks for this). |
| `admin/`               | Admin screens and settings. |
| `includes/`            | Core logic (content, display). |
| `assets/`              | CSS for the shortcode on the front end. |
| `content/`             | Quote/content library (includes `library.php`). |

**Optional:**

| File or folder   | Purpose |
|------------------|--------|
| `languages/`     | Translation files (if you add them later). |
| `README.md`      | This file—handy to keep for reference. |
| `LICENSE`        | GPL license text—good to keep. |

**Not needed on the live site:** The repo also has `design/`, `profiles/`, `.cursor/`, and `tests/`. Those are for design docs, Cursor rules, and development-only tests. You can leave them out when you copy or zip the plugin for installation.

**Important:** WordPress expects the main plugin file and these folders to sit **inside one folder** (e.g. `no-regime-for-me`). So the structure on your server should look like:

```
wp-content/plugins/no-regime-for-me/
├── no-regime-for-me.php
├── admin/
├── includes/
├── assets/
└── content/
```

### Installation

**Option A — Install from a zip (good if you download the plugin as a zip)**

1. On your computer, create a folder named **`no-regime-for-me`**.
2. Put **only** the required files and folders listed above inside it (the main PHP file plus `admin/`, `includes/`, `assets/`, `content/`).
3. Zip that **folder** (so the zip contains one folder named `no-regime-for-me`, with the files inside it).
4. In your WordPress admin, go to **Plugins → Add New**.
5. Click **Upload Plugin**, choose your zip file, then **Install Now**.
6. After it installs, click **Activate Plugin**.

**Option B — Copy the folder (e.g. via FTP or file manager)**

1. Upload or copy the **entire plugin folder** (the one that contains `no-regime-for-me.php`) into your WordPress **plugins** directory.  
   On a typical WordPress install, that path is:  
   **`wp-content/plugins/`**
2. Make sure the folder name is something like **`no-regime-for-me`** (no spaces is safest). The folder you drop into `plugins/` should contain `no-regime-for-me.php` directly inside it.
3. In WordPress admin, go to **Plugins**. You should see **No Regime For Me** in the list.
4. Click **Activate** under the plugin name.

**After activation:** The plugin adds a short quote to the top admin bar and can show longer content in a dashboard widget or via the shortcode `[no_regime_content]`. Use **No Regime For Me** in the admin menu to choose where the longer content appears.

## Usage

- **Admin bar:** After activation, a short quote or tip appears in the black bar at the top of the WordPress admin (when you’re logged in).
- **Dashboard widget:** Longer quotes, tips, or insights can appear in a widget on the main Dashboard screen. Use **No Regime For Me** in the menu to choose whether to show this content on the dashboard, via shortcode, or both.
- **Shortcode:** To show a random longer item on a post or page, add the shortcode `[no_regime_content]` in the editor. The plugin will enqueue its styles automatically.
- **Settings:** In the WordPress admin, look for **No Regime For Me** in the menu to choose where the longer content appears: Dashboard only, shortcode only, or both.

## Roadmap

- [ ] Initial release
- [ ] (Add features or fixes as you go)

See the [open issues](https://github.com/your_username/no-regime-for-me/issues) for a list of proposed features and known bugs.

## Contributing

Contributions are welcome. If you have a suggestion or find a bug, please open an issue or submit a pull request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

Distributed under the GNU General Public License v3.0. See [LICENSE](LICENSE) for more information.

## Contact

Your Name – [@your_twitter](https://twitter.com/your_twitter) – your.email@example.com

Project Link: [https://github.com/your_username/no-regime-for-me](https://github.com/your_username/no-regime-for-me)

## Acknowledgments

- [Best README Template](https://github.com/othneildrew/Best-README-Template) by [othneildrew](https://github.com/othneildrew)
- [WordPress Plugin Handbook](https://developer.wordpress.org/plugins/)
