# Citation and content standard – No regime for me

**Who maintains content:** The designer (or designated editor) maintains [content/library.php](../content/library.php). This file is the single source for all plugin copy.

## When it's a quote

- **Quotes** (short or long) use `author` and optionally `source` in the library.
- **Display:** The plugin shows “— Author, Source” below the quote (e.g. “— Milton Mayer, They Thought They Were Free”).
- **Conventions:**
  - **Author:** Use the person’s name as commonly cited (e.g. “Milton Mayer”, “Sinclair Lewis”). For *The Federalist Papers* use “Hamilton et al.” or “Hamilton, Madison, Jay” and keep it consistent. For anthology essays (e.g. *Readings on Fascism and National Socialism*) use the essay author (e.g. “Benito Mussolini”) and put the book title in `source`.
  - **Source:** Full book title as on the cover or in citations (e.g. “They Thought They Were Free: The Germans, 1933-45”, “It Can’t Happen Here”). For an essay in an anthology you may use “Essay Title, Book Title” in source if you want the essay name visible.
- **No attribution** for tips, insights, or admin bar one-liners – they are original sentences inspired by the source books, not verbatim quotes.

**Long quote without author:** If a long_quote entry has no `author` (and no `source`), the plugin renders it as a plain paragraph (same as tips/insights), not a blockquote. To get blockquote + “— Author, Source”, add `author` (and optionally `source`) to the entry.

## Content types and placement

| Type | Where it appears | Attribution |
|------|------------------|-------------|
| short_quotes | Admin bar | Yes — Author (, Source if space allows) |
| admin_bar_tips | Admin bar | No |
| long_quotes | Dashboard widget, shortcode | Yes — Author, Source |
| tips | Dashboard widget, shortcode | No |
| insights | Dashboard widget, shortcode | No |

## Brevity

- **Admin bar:** ~60–80 characters, ~10–12 words (short_quotes and admin_bar_tips).
- **Long quotes:** 2–4 sentences, ~30–80 words.
- **Tips and insights:** 1–2 sentences, ~15–40 words.

One idea per item; cut filler.

## Overlap between admin_bar_tips and tips

The same idea can intentionally appear in both **admin_bar_tips** (short, ~10–12 words for the admin bar) and **tips** (1–2 sentences for the dashboard/shortcode). That overlap is by design: a short variant for the bar and a longer variant for the widget. When reviewing content, distinguish these intentional short/long pairs from true redundancy (exact duplicate in the same context). Only deduplicate when the same text appears in the same placement without reason.
