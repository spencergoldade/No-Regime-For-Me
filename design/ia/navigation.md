## Navigation and IA – No Regime For Me

IA **principles** are in `.cursor/rules/core/design-core.mdc`; **implementation rules** (patterns, labeling) are in `.cursor/rules/frontend/ia-navigation-and-structure.mdc`.

**Goal:** Capture the plugin’s admin menu and screen structure so navigation and naming stay consistent.

### Sitemap (plugin admin)

- **No Regime For Me** (top-level admin menu) – Entry point; links to main plugin screen(s).
- **Settings** (or main subpage) – Configure plugin behavior; primary admin screen.
- **Help / About** (optional) – Links to docs, version, or support. Add subpages only if needed.

Keep depth to **one or two levels** (e.g. one menu item with one main screen, or one menu with Settings + optional About). Expand only when the plugin gains distinct sections (e.g. “Lists”, “Options”, “Tools”).

### Guidelines

- Use **noun-based labels** in the present tense (e.g. “Settings”, not “Configure plugin”).
- Keep navigation depth to **three levels or fewer**.
- Use the same label in the menu, page heading, and buttons for the same concept.
- For deeper structures later, add breadcrumbs (e.g. `Settings / Section name`).
