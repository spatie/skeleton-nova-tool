# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/nova-backup-tool.svg?style=flat-square)](https://packagist.org/packages/spatie/nova-backup-tool)
[![Build Status](https://img.shields.io/travis/spatie/nova-backup-tool/master.svg?style=flat-square)](https://travis-ci.org/spatie/nova-backup-tool)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/nova-backup-tool.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/nova-backup-tool)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/nova-backup-tool.svg?style=flat-square)](https://packagist.org/packages/spatie/nova-backup-tool)

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_email``` ```:package_name``` ```:tool_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

This is where your description should go. Try and limit it to a paragraph or two and add a screenshot.

## Requirements

The requirements for installing this tool.

## Installation

You can install the package via composer:

```bash
composer require spatie/:package_name

Next up, you must register the tool with Nova. This is typically done in the `register` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function register()
{
    Nova::tools([
        // ...
        new \Spatie\:tool_name\:tool_name(),
    ]);
}
```

## Usage

Click on the "Backups" menu item in your Nova app to see the log.

### Authentication

By default the tool can only be seen and used in the local environment. To define a more specific access policy for the tool, you should use the `:tool_name::auth` method. The `auth` method accepts a callback which should return true or false, indicating whether the user should have access to the tool. Typically, you should call `NovaTool::auth` in the boot method a service provider:

```php
// in a service provider

use Spatie\:tool_name\:tool_name;

// ...

:tool_name::auth(function ($request) {
    // return true / false;
});
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## Support us

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/spatie). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
