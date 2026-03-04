# Tests – No regime for me

Tests are **maintained separately** from the core plugin files. This directory is for development only and is **not included** in the plugin distribution (zip or copy to `wp-content/plugins/`). When packaging the plugin for installation, omit the `tests/` directory.

- **Bootstrap:** `bootstrap.php` loads plugin classes for standalone PHPUnit runs (no WordPress runtime required for current tests).
- **Test classes:** `NrfmContentTest.php` (content loading and random pickers), `NrfmSettingsTest.php` (sanitization).
- **Run:** From the plugin root, `vendor/bin/phpunit` or `phpunit` if PHPUnit is installed globally. Requires PHPUnit 9+ and PHP 7.4+.

Tests do not depend on the specific content of `content/library.php`; they assert structure and behavior only.
