# Media assets

## Homepage hero slideshow

The hero cycles through four full-bleed background images. Replace the
placeholders in `img/hero/` with real photos (landscape, ~1920×1080 or larger,
JPG, ideally < 400 KB each). Keep the filenames or update the `background-image`
paths in `index.html`:

- `img/hero/1-suva-harbour.jpg` — Suva Harbour
- `img/hero/2-parliament-house.jpg` — Fiji Parliament House
- `img/hero/3-technology.jpg` — technology / digital theme
- `img/hero/4-commercial.jpg` — Fiji commercial / business district

A dark overlay sits on top, so images don't need to be bright — atmospheric shots
work best. To add or remove a slide, edit the `.hero-slide` divs in `index.html`;
the crossfade script in `js/script.js` adapts automatically.

## Other images

- `img/about.jpg` — About section image (currently a remote Unsplash URL)
- `img/speakers/*.jpg` — speaker portraits (square, ~600×600; currently remote)

The `logo.png`, `logo-white.png` and `favicon.png` files are derived from the
uploaded digitalFIJI logo — see the root `README.md`.
