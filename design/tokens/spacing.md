# Spacing tokens – WordPress admin aligned

A simple spacing scale for plugin admin UI, aligned with wp-admin patterns.

**Reference:** [Admin Design](https://make.wordpress.org/core/2023/07/12/admin-design/). Work area headers use padding top 14px, bottom 3px, right 15px, left 0; page titles use 24px font size.

## Scale

| Token | Value | Use |
|-------|-------|-----|
| `spacing-1` | 4px | Tight in-component (icon–text, label–input gap) |
| `spacing-2` | 8px | Inline gaps, small padding |
| `spacing-3` | 12px | Between related controls in a form |
| `spacing-4` | 16px | Between form fields, card padding |
| `spacing-5` | 24px | Between sections, wrap header spacing |
| `spacing-6` | 32px | Section separation |
| `spacing-7` | 40px | Page gutters, major blocks |
| `spacing-8` | 56px | Large layout boundaries |

## Usage guidance

- **Inside components:** `spacing-1`–`spacing-3` (label and input, icon and text).
- **Between related controls:** `spacing-3` or `spacing-4`.
- **Between sections on a page:** `spacing-5`–`spacing-7`.
- **Wrap / page margins:** Match wp-admin; use `spacing-7` or `spacing-8` for major boundaries.

Avoid one-off values; prefer increasing spacing between larger groups rather than ad-hoc gaps.
