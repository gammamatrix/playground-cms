# Playground CMS

[![Playground CI Workflow](https://github.com/gammamatrix/playground-cms/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-cms/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-cms/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)

The Playground CMS is a package for [Laravel](https://laravel.com/docs/11.x) applications.

This application provides the models to use the Playground CMS, a Content Management System.

Read more on using Playground CMS [at the Read the Docs for Playground.](https://gammamatrix-playground.readthedocs.io/)

## Installation

You can install the package via composer:

```bash
composer require gammamatrix/playground-cms
```

## `artisan:about`

Playground CMS provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-playground-cms.png" alt="screenshot of artisan about command with Playground CMS.">

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-cms.php](config/playground-cms.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Cms\ServiceProvider" --tag="playground-config"
```

### Environment Variables

|  env()                              | config()                            |
|-------------------------------------|-------------------------------------|
| `PLAYGROUND_CMS_LOAD_MIGRATIONS` | `playground-cms.load.migrations` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Pages](src/Models/Page.php)
- [Page Revisions](src/Models/PageRevision.php)
- [Snippets](src/Models/Snippet.php)
- [Snippet Revisions](src/Models/SnippetRevision.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 15 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Cms\ServiceProvider" --tag="playground-migrations"
```

## PHPStan

Tests at level 9 on:
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

```sh
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
