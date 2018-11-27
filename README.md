# WP general purpose shortcodes
General purpose shortcodes for WordPress.

Just install the plugin from the [WordPress plugins directory](https://developer.wordpress.org/plugins/wp-general-purpose-shortcodes/) and start adding the shortcodes to your content. That easy.

## Shortcodes
### [ahl_year]
This shortcode adds the current year with 4 digits.

E.g.: You write ``[ahl_year]`` and you get something like `` 2018 ``.

### [ahl_yearsFromDate]
This shortcode adds the number of years from a given day to present. You must pass that date as an attibute named ``date``.

E.g.: You write ``[ahl_yearsFromDate date="2003-01-01"]`` and you get something like `` 2015 ``.

> Note that date must be written in the format showed in the example: yyyy-mm-dd

## Changelog
### 0.2.0
* Added the shortcode: [ahl_yearsFromDate]

### 0.1.0
* Added the first shortcode: [ahl_year]