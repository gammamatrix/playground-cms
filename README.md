# Playground: CMS

[![Playground CI Workflow](https://github.com/gammamatrix/playground-cms/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-cms/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-cms/testing/develop/coverage.svg)](tests)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-level%2010-brightgreen)](.github/workflows/ci.yml#L128)

The Playground CMS is a package for [Laravel](https://laravel.com/docs/12.x) applications.

Playground: Provides the CMS models for the Playground Content Management System.

Read more on using [Playground: CMS at Read the Docs](https://gammamatrix-playground.readthedocs.io/en/develop/components/cms.html)

## Installation

**NOTE:** This package is required by:
- [Playground: CMS API](https://github.com/gammamatrix/playground-cms-api): API without UI
- [Playground: CMS Resource](https://github.com/gammamatrix/playground-cms-resource): API with UI

Install this package, with composer, to get access to the CMS Models:

```bash
composer require gammamatrix/playground-cms
```

## `artisan:about`

Playground CMS provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-playground-cms.png" alt="screenshot of artisan about command with Playground: CMS.">

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-cms.php](config/playground-cms.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Cms\ServiceProvider" --tag="playground-config"
```

### Environment Variables

|  env()                           | config()                         | Default |
|----------------------------------|----------------------------------|---------|
| `PLAYGROUND_CMS_ABOUT`           | `playground-cms.about`           | `true`  |
| `PLAYGROUND_CMS_LOAD_MIGRATIONS` | `playground-cms.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Page](src/Models/Page.php)
- [PageRevision](src/Models/PageRevision.php)
- [Snippet](src/Models/Snippet.php)
- [SnippetRevision](src/Models/SnippetRevision.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 4 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Cms\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-cms git:(develop) ✗ composer cloc
      74 text files.
      70 unique files.
       6 files ignored.

github.com/AlDanial/cloc v 2.06  T=0.04 s (1930.0 files/s, 431128.8 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                            29              0              0          11710
PHP                             28            317            723           2074
XML                              8              0              7            350
YAML                             1              5              0            275
Markdown                         3             45              0            116
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                            70            370            730          14537
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 10 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## Testing

Unit tests
```sh
composer test
```

Unit and feature tests
```sh
composer test-dev
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
