# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**csl-whitroot** provides a web display of scanned pages from Whitney's *The Roots, Verb-Forms, and Primary Derivatives of the Sanskrit Language* (William Dwight Whitney, 1885). It is linked from the Monier-Williams dictionary display for root entries.

The display is a self-contained PHP application serving scanned page images.

## Architecture

| Directory/File | Purpose |
|---|---|
| `disp/` | PHP web application: `index.php` serves scanned page images |
| `jpg/` | Scanned page images of the Whitney root book |
| `misc/` | Miscellaneous data files |
| `misc/roots-with-upasargas.txt` | List of 845 Whitney roots with their upasargas (preverbs) |

### URL parameter

`disp/index.php?page=N` — display the Nth page of the Whitney root book. Used by MW displays to link to the relevant root entry.

## Dependencies

- **PHP** (CLI + Apache/XAMPP)
- Scanned images in `jpg/`
