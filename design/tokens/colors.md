# Color tokens – WordPress admin aligned

This plugin uses the **WordPress admin color palette** for consistency with wp-admin. Semantic roles below map to official WP values.

**Sources:** [WordPress 5.7 admin color standardization](https://make.wordpress.org/core/2021/02/23/standardization-of-wp-admin-colors-in-wordpress-5-7/), [Make/Design colors](https://make.wordpress.org/design/handbook/design-guide/foundations/colors/). The 5.7 palette uses 7 core colors with 56 perceptually uniform shades and meets WCAG 2.0 AA.

## Semantic roles (plugin admin UI)

| Role | Use | WordPress-aligned value |
|------|-----|-------------------------|
| `color-bg-surface` | Default screen background | `#f0f0f1` (admin body bg) |
| `color-bg-subtle` | Grouped content, cards, alternate rows | `#fff` or `#f6f7f7` |
| `color-fg-default` | Primary text | `#1d2327` (WP ultra dark gray) |
| `color-fg-muted` | Secondary text, metadata, hints | `#646970` / `#50575e` |
| `color-accent-primary` | Links, primary buttons, focus | `#2271b1` (WP blue) |
| `color-accent-primary-hover` | Link/button hover | `#135e96` (darker blue) |
| `color-border-subtle` | Borders, dividers | `#c3c4c7` / `#dcdcde` |
| `color-border-critical` | Errors, destructive actions | `#d63638` (accent red) |
| `color-status-success` | Success messages, confirmations | `#00a32a` (green) |
| `color-status-warning` | Warnings | `#dba617` (yellow) |

## Classic WordPress palette (reference)

- **Blues:** WordPress Blue `#0073aa`, Medium Blue `#00a0d2`
- **Grays:** Ultra Dark `#191e23`, Dark `#23282d`, Base `#32373c`, Dark Silver `#82878c`, Silver `#a0a5aa`, Light Silver `#b4b9be`
- **Auxiliary:** Accent Red `#dc3232`, Accent Green `#46b450`, Accent Yellow `#ffb900`, Accent Orange `#f56e28`

Use core admin CSS classes where possible (e.g. `.wrap`, `.button-primary`) so colors stay consistent. For custom UI, use the semantic roles above. If this plugin later adopts `@wordpress/theme` design tokens, migrate these mappings to that system.
