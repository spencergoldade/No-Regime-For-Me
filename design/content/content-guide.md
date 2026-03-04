# Content guide – No regime for me

Where to add or edit plugin content, and how to keep it consistent.

## Where content lives

- **Plugin content (what users see):** [content/library.php](../../content/library.php)  
  This is the only file you edit to add or change quotes, tips, and insights. The plugin reads it automatically. The file has inline comments and section headers; follow them so the file stays valid.

- **Working document (drafts and sourcing):** [content/source-quotes-and-ideas.md](../../content/source-quotes-and-ideas.md)  
  Use this for drafting new items, tracking sources, and keeping a backup of content before you port it into library.php. Do not put the ebooks or full book text in the repo.

## Citation and brevity

- **Citation:** See [citation-and-content.md](citation-and-content.md). Quotes use `author` and optionally `source`; the plugin displays “— Author, Source”. Tips, insights, and admin bar one-liners have no attribution.

- **Brevity:** Keep every item short.
  - **Admin bar** (short_quotes, admin_bar_tips): ~10–12 words, ~60–80 characters.
  - **Long quotes:** 2–4 sentences, ~30–80 words.
  - **Tips and insights:** 1–2 sentences, ~15–40 words.

One idea per item; cut filler.

**Overlap:** The same idea may appear as a short line in admin_bar_tips and a longer version in tips; that is intentional. See [citation-and-content.md](citation-and-content.md) for when overlap is by design vs. redundancy.

## Source books

Content is sourced from six public-domain ebooks in the project’s reference folder (not shipped with the plugin). For how to get plain text and extract more quotes, see the “Source texts” section in [source-quotes-and-ideas.md](../../content/source-quotes-and-ideas.md).

## Quick reference

| Content type    | Where it appears        | Attribution | Max length        |
|-----------------|-------------------------|-------------|--------------------|
| short_quotes    | Admin bar               | Yes         | ~10–12 words       |
| admin_bar_tips  | Admin bar               | No          | ~10–12 words       |
| long_quotes     | Dashboard, shortcode    | Yes         | 2–4 sentences      |
| tips            | Dashboard, shortcode    | No          | 1–2 sentences      |
| insights        | Dashboard, shortcode    | No          | 1–2 sentences      |
