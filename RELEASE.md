# Release and submission guide

This document covers testing, version control with Git, and preparing for WordPress.org submission via SVN.

## Testing

### Unit tests (PHPUnit)

The plugin uses PHPUnit for unit tests. Run them from the repository root (the directory that contains `no-regime-for-me/`, `tests/`, and `composer.json`):

```bash
composer install
./vendor/bin/phpunit
```

Or with a path:

```bash
./vendor/bin/phpunit tests/
```

**What’s covered:**

* **NrfmContentTest** – Library loading, `get_random_admin_bar_item()`, `get_random_long_item()`, empty pool behavior.
* **NrfmSettingsTest** – `sanitize_display_location()`: allowed values (`dashboard`, `shortcode`, `both`) and rejection of invalid/empty/non-string values.

Tests run without a full WordPress install; `tests/bootstrap.php` points to the `no-regime-for-me/` plugin package and loads the needed classes.

### Manual testing checklist

Before tagging a release:

1. **Activation** – Activate the plugin; confirm no PHP errors and the admin bar shows a quote.
2. **Settings** – Open **No Regime For Me** in the menu; change “Where to show longer content” and save; confirm the dashboard widget appears or disappears as expected.
3. **Shortcode** – Add `[no_regime_content]` to a page; view the page and confirm one random item appears and styles load.
4. **Security** – Confirm only users with `manage_options` can access the settings page; unauthenticated access to options.php with the plugin’s option should not update the option (WordPress nonce verification).
5. **Escape** – Confirm quotes and tips in the admin bar and widget display as plain text (no HTML/script execution).

## Version control (Git)

Use Git for day-to-day development:

* Commit often with clear messages (e.g. “Fix sanitization for empty string”, “Add i18n for settings labels”).
* Keep `composer.json` and `composer.lock` in the repo so CI and other devs get the same test deps.
* The `.gitignore` excludes `vendor/`, `tickets/`, `.cursor/`, and common OS/IDE files so they are not committed.
* Tag releases: e.g. `git tag -a 1.0.0 -m "Release 1.0.0"` and push tags when you’re ready to publish.

Suggested branch strategy:

* `main` (or `trunk`) – stable, release-ready code.
* Feature branches – branch from `main`, merge back after review/tests.

## WordPress.org submission (SVN)

The WordPress.org plugin directory uses **Subversion (SVN)**, not Git. You maintain a separate SVN checkout and copy your plugin files into it.

### First-time setup

1. Create a WordPress.org account and apply to host your plugin (if you haven’t already).
2. Check out your plugin’s SVN repo (replace `your-plugin-slug` with the slug assigned by WordPress.org):

   ```bash
   svn co https://plugins.svn.wordpress.org/your-plugin-slug /path/to/plugin-svn
   cd /path/to/plugin-svn
   ```

3. You’ll see folders: `trunk/`, `tags/`, and `branches/`. For a simple workflow you use `trunk` and `tags`.

### What goes where

* **trunk/** – Current development/stable code. The contents of `trunk` are what reviewers and “Development Version” users get. For a stable release, copy your plugin files (excluding dev-only files) into `trunk`.
* **tags/1.0.0/** – A snapshot for version 1.0.0. Copy the **exact** files you want for that version into `tags/1.0.0/`. The “Stable tag” in `readme.txt` (e.g. `1.0.0`) tells WordPress.org which tag to offer as the stable download.
* **assets/** – In the SVN repo root (same level as `trunk`): banner and icon images, and optionally screenshots for the plugin page. See [Plugin Assets](https://developer.wordpress.org/plugins/wordpress-org/plugin-assets/).

### Sync a release from Git to SVN

1. In your **Git** repo, ensure the code is at the version you want (e.g. `1.0.0`), run tests, and confirm `readme.txt` “Stable tag” and the main plugin header “Version” match (e.g. `1.0.0`).
2. Copy the **`no-regime-for-me/`** folder (the complete plugin package). It already contains only distributable files: main PHP file, `admin/`, `includes/`, `assets/`, `content/`, `readme.txt`, and `LICENSE`. Do not include repo-only items like `vendor/`, `tests/`, `design/`, or `.cursor/`.
3. Update **trunk** (replace the contents of `trunk/` with the contents of your `no-regime-for-me/` folder, so `trunk/no-regime-for-me.php`, `trunk/includes/`, etc.):

   ```bash
   cd /path/to/plugin-svn
   # Copy your plugin files over trunk (replace contents of trunk with your release files)
   svn add --force trunk/
   svn status
   svn commit -m "Update trunk for 1.0.0"
   ```

4. Create the tag for 1.0.0:

   ```bash
   svn cp trunk tags/1.0.0
   svn commit -m "Tag 1.0.0"
   ```

5. In `trunk/readme.txt`, the line `Stable tag: 1.0.0` tells WordPress.org to serve `tags/1.0.0` as the stable version. After commit, the site may take a few minutes to update.

### readme.txt and assets

* **readme.txt** – Must be in the plugin root (same folder as the main PHP file). It must live in both `trunk/` and each `tags/X.Y.Z/` so the repo parser can read it. The “Stable tag” in **trunk’s** readme.txt is what determines the current stable release.
* **Screenshots** – If you list “Screenshots” in readme.txt, add `screenshot-1.png`, `screenshot-2.png`, etc. to the **assets** folder in SVN (repo root), not inside trunk. See the [Plugin Handbook](https://developer.wordpress.org/plugins/wordpress-org/how-your-readme-txt-works/).
* Validate readme.txt with the [readme validator](https://wordpress.org/plugins/developers/readme-validator/) before or after submission.

### Checklist before SVN commit

* [ ] Plugin header “Version” matches the release (e.g. 1.0.0).
* [ ] readme.txt “Stable tag” matches that version.
* [ ] Changelog and Upgrade Notice in readme.txt updated.
* [ ] No dev-only files in the copied files (e.g. no `vendor/`, no `tests/`, no `.git`).
* [ ] PHPUnit (or your test suite) passes.
* [ ] Manual smoke test: activate, settings, shortcode, admin bar.

---

**Summary:** Develop and tag in Git; when you’re ready to publish a version, copy the release files into SVN `trunk`, commit, then copy `trunk` to `tags/X.Y.Z` and commit. Keep readme.txt and the main plugin header version in sync.
