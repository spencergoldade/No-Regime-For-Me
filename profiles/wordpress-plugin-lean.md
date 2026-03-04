# WordPress plugin – lean product profile

Use this profile for the **No regime for me** WordPress plugin. It gives you core design principles, WordPress PHP/code conventions, and the frontend rules that attach when editing admin UI (PHP, CSS, admin JS).

## Rules in this profile

**Always-on (core):**

- `.cursor/rules/core/design-core.mdc`
- `.cursor/rules/core/cursor-behavior-constraints.mdc`

**WordPress / code:**

- `.cursor/rules/wordpress/wordpress-php.mdc` (PHP, coding standards, hooks, security)
- `.cursor/rules/wordpress/wp-plugin-admin-ui.mdc` (admin UI: design tokens, core patterns)

**Frontend (attach to admin UI files):**

- `frontend/ui-layout-and-density.mdc`
- `frontend/ux-forms-and-validation.mdc`
- `frontend/accessibility-frontend.mdc`
- `frontend/ux-flows-and-feedback.mdc`

Optional for copy and IA:

- `frontend/ux-writing-and-microcopy.mdc`
- `frontend/ia-navigation-and-structure.mdc`

## Globs for this project

Frontend rules should attach when editing plugin admin UI. Each of the frontend `.mdc` files listed above has been set to:

```yaml
globs: ["**/*.php", "**/*.css", "**/*.scss", "**/admin/**/*.js"]
```

If your plugin uses a different structure (e.g. a single `no-regime-for-me/` directory), update the `globs` in each of those frontend rule files to match (e.g. `["**/no-regime-for-me/**/*.php", "**/no-regime-for-me/**/*.css", ...]`).

## Design docs

This project uses WordPress-aligned design tokens and IA:

- `design/tokens/colors.md`, `spacing.md`, `typography.md` – source of truth for admin UI
- `design/ia/navigation.md` – plugin menu and screen structure
- `design/content/voice-and-tone.md` – in-product copy

## Reference

For full profile definitions and “What to copy where”, see the main [README](../README.md) section “Profiles: core, lean, and full”.
