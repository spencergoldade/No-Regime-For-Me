# Typography tokens – WordPress admin aligned

Type scale for plugin admin screens so they feel native to wp-admin.

**Reference:** WordPress admin uses ~13–14px base; wrap page titles use 24px. [Make/Design typography](https://make.wordpress.org/design/handbook/design-guide/foundations/typography/) and admin style guides.

## Base settings

- **Font family:** `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif` (WordPress admin default)
- **Base size:** 14px (admin body)
- **Line height:** 1.5

## Roles

| Role | Size | Weight | Use |
|------|------|--------|-----|
| `heading-page` | 24px | 400 | Page title (once per screen; matches `.wrap h1`) |
| `heading-section` | 18px | 400 | Section headings |
| `body` | 14px | 400 | Main content |
| `body-small` | 13px | 400 | Secondary text, descriptions |
| `caption` | 12px | 400 | Metadata, labels, table headers |

## Usage

- Use `heading-page` once per admin page as the main title.
- Use `heading-section` to structure sections under the main title.
- Avoid ad-hoc font sizes; map to one of these roles.
