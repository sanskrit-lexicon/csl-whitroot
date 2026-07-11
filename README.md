# csl-whitroot

_Created: 14-06-2026 · Last updated: 11-07-2026_

A **scanned-book display** repository in the Cologne Digital Sanskrit Lexicon
([sanskrit-lexicon](https://github.com/sanskrit-lexicon)) project. It serves the
scanned pages of *The Roots, Verb-Forms, and Primary Derivatives of the Sanskrit
Language* by William Dwight Whitney (Leipzig, 1885) as a small self-contained web
application, linked from the Monier-Williams dictionary display for root entries.

This is **not** the Whitney-root *data/crosswalk* asset — the machine-readable root
hub, the MW↔Whitney↔DCS triangulation join, and the linguistic helpers live in the
separate [`WhitneyRoots`](https://github.com/gasyoun/WhitneyRoots) repository (see
[`SHARED_CODE.md`](https://github.com/gasyoun/SanskritLexicography/blob/main/SHARED_CODE.md)
§17). csl-whitroot only publishes the page images.

## What is in the repo

| Path | Purpose |
|---|---|
| [`disp/`](https://github.com/sanskrit-lexicon/csl-whitroot/tree/main/disp) | The web application — a PHP `index.php` page with a YUI 2.6.0 TreeView navigator plus `ajax.js`/`main.js`, `serveimg.php`, and stylesheets |
| [`disp/index.php`](https://github.com/sanskrit-lexicon/csl-whitroot/blob/main/disp/index.php) | Entry page; reads a `page` parameter and renders the requested scan |
| [`disp/whitscans.txt`](https://github.com/sanskrit-lexicon/csl-whitroot/blob/main/disp/whitscans.txt) | The scan manifest — one filename per line, 284 entries, one per image in `jpg/` |
| [`jpg/`](https://github.com/sanskrit-lexicon/csl-whitroot/tree/main/jpg) | 284 scanned page images (`whit-NNN-<root>.jpg`) of the Whitney root book |
| [`misc/roots-with-upasargas.txt`](https://github.com/sanskrit-lexicon/csl-whitroot/blob/main/misc/roots-with-upasargas.txt) | List of 848 Whitney roots with their upasargas (preverbs) |

## Usage

The display is a self-contained PHP application (PHP CLI + Apache/XAMPP, or any PHP
web server). Serve the [`disp/`](https://github.com/sanskrit-lexicon/csl-whitroot/tree/main/disp)
directory and open `index.php`; the TreeView lists the scanned roots, and:

```
disp/index.php?page=N
```

displays the Nth page of the Whitney root book. This is the link target used by the
Monier-Williams dictionary display when a user follows a root entry back to Whitney's
scan.

## Repository conventions

- Agent/session guidance for this repo lives in
  [`CLAUDE.md`](https://github.com/sanskrit-lexicon/csl-whitroot/blob/main/CLAUDE.md);
  org-wide conventions are in the parent
  [`sanskrit-lexicon` CLAUDE.md](https://github.com/sanskrit-lexicon) tree.
- There is no build or test suite. The only workflow is
  [`dependabot-auto-merge.yml`](https://github.com/sanskrit-lexicon/csl-whitroot/blob/main/.github/workflows/dependabot-auto-merge.yml),
  which merges passing Dependabot updates automatically.
- Issues follow the
  [Cologne tooling-repo taxonomy](https://github.com/sanskrit-lexicon/csl-observatory/blob/main/runbook/cologne-tooling-runbook.md).

## License

Released under the [GNU General Public License v3.0](https://github.com/sanskrit-lexicon/csl-whitroot/blob/main/LICENSE).

_Dr. Mārcis Gasūns_
