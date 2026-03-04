# Getting No Regime For Me into the WordPress.org Plugin Directory

Use this as a step-by-step guide. For more detail (SVN commands, assets, checklist), see [RELEASE.md](RELEASE.md).

---

## 1. Apply to host your plugin (first time only)

1. Go to [WordPress.org](https://wordpress.org/) and create an account (or log in).
2. Go to [Developers – Add Your Plugin](https://wordpress.org/plugins/developers/add/).
3. Read the guidelines (GPL, no trademark violations, etc.).
4. Submit your plugin. You’ll need:
   - Plugin name and a short description.
   - The **zip file** of your plugin (e.g. `no-regime-for-me-1.0.1.zip` from the repo root).
5. After review, WordPress.org will create a plugin page and give you a **plugin slug** (e.g. `no-regime-for-me`) and an **SVN repository URL**:  
   `https://plugins.svn.wordpress.org/no-regime-for-me/`

---

## 2. Install SVN and check out the repo (first time only)

On your machine you need Subversion (SVN):

- **macOS:** `brew install svn` or use Xcode Command Line Tools.
- **Windows:** [TortoiseSVN](https://tortoisesvn.net/) or [Silk SVN](https://www.sliksvn.com/download/).

Then check out the plugin’s SVN repo (use the URL WordPress gave you):

```bash
svn co https://plugins.svn.wordpress.org/no-regime-for-me /path/to/no-regime-for-me-svn
cd /path/to/no-regime-for-me-svn
```

You’ll see: `trunk/`, `tags/`, `branches/`, and sometimes `assets/`.

---

## 3. Put your plugin code into SVN

**trunk** = current development/stable code. **tags/X.Y.Z** = specific release.

### Option A: Copy the folder manually

1. From your Git repo root, copy **everything inside** `no-regime-for-me/` (all files and subfolders).
2. Paste into the SVN **trunk/** folder so you have:
   - `trunk/no-regime-for-me.php`
   - `trunk/includes/`
   - `trunk/admin/`
   - `trunk/assets/`
   - `trunk/content/`
   - `trunk/readme.txt`
   - `trunk/LICENSE`
3. Do **not** put a top-level `no-regime-for-me` folder inside trunk — the contents of the plugin folder go directly in trunk.

### Option B: Use the zip you built

1. Unzip `no-regime-for-me-1.0.1.zip` somewhere.
2. Copy the contents of the `no-regime-for-me/` folder (not the folder itself) into your SVN `trunk/` so that `trunk/no-regime-for-me.php`, `trunk/readme.txt`, etc. exist.

### Add and commit trunk

```bash
cd /path/to/no-regime-for-me-svn
svn add --force trunk/
svn status
svn commit -m "Update trunk for 1.0.1"
```

(You’ll be prompted for your WordPress.org username and password.)

---

## 4. Create the release tag

WordPress.org serves the **stable** version from a tag. The “Stable tag” in `trunk/readme.txt` (e.g. `1.0.1`) must match a tag folder.

```bash
svn cp trunk tags/1.0.1
svn commit -m "Tag 1.0.1"
```

After a few minutes, the plugin page will offer 1.0.1 as the download.

---

## 5. Optional: Add assets (banner, icon, screenshots)

To get icons and banners on the plugin page:

1. Create images per [Plugin Assets](https://developer.wordpress.org/plugins/wordpress-org/plugin-assets/):
   - Banner: 772×250 (and optionally 1544×500).
   - Icon: 128×128 (and optionally 256×256).
   - Screenshots: `screenshot-1.png`, `screenshot-2.png`, etc. if listed in readme.txt.
2. Put them in the **assets/** folder at the **root** of the SVN repo (same level as `trunk/` and `tags/`), not inside trunk.
3. Add and commit:

   ```bash
   svn add assets/
   svn commit -m "Add plugin assets"
   ```

---

## 6. Checklist before you commit

- [ ] Plugin header “Version” in `no-regime-for-me.php` = 1.0.1
- [ ] readme.txt “Stable tag” = 1.0.1
- [ ] Changelog and Upgrade Notice in readme.txt updated for 1.0.1
- [ ] No dev-only files in trunk (no `vendor/`, `tests/`, `.git`, `design/`, etc.)
- [ ] PHPUnit passes; manual test (activate, settings, shortcode, admin bar) done

---

## Summary

| Step | What to do |
|------|------------|
| 1 | Apply at WordPress.org to add your plugin; get SVN URL. |
| 2 | Check out SVN repo locally. |
| 3 | Copy plugin files (from `no-regime-for-me/` or the zip) into `trunk/`; `svn add --force trunk/`; `svn commit`. |
| 4 | Create tag: `svn cp trunk tags/1.0.1`; `svn commit`. |
| 5 | (Optional) Add banner/icon/screenshots to `assets/`. |

The “Stable tag” in **trunk’s** readme.txt tells WordPress.org which tag to offer as the stable download. Keep that in sync with the tag you create.
