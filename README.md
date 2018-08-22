
## Using this skeleton (remove this section after you have completed these step)

First clone this repo to your development machine and remove the `.git` directory. Next run `git init` to create another repo. Create a new repo on GitHub (or another source control saas) and point the origin remote of your cloned repo to the one you just created. Here's an example: `git remote add origin git@github.com:spatie/newly-created-repo.git`. Commit all files and push to master.

Next replace these variables in all files of the project and delete this paragraph:
 - `:author_name` (example: 'Freek Van der Herten')
 - `:author_username` (example: 'freekmurze')
 - `:author_email` (example: 'freek@spatie.be')
 - `:package_name` (example: 'nova-tail-tool')
 - `:package_description` (example: 'A tool to tail the log')
 - `:vendor` (example: 'spatie')
 - `:namespace_vendor` (example: 'Spatie')
 - `:namespace_tool_name` (example: 'TailTool')
 
 Next run `composer install`, `yarn` and `yarn production`.
 
 To use the tool in a Nova app add this line in the `require` section of `composer.json`.
 
 ```
    "spatie/:package_name": "*",
```
 
 In your Nova app add a `repositiories` section to the `composer.json` with the path to your package repo.
 
 ```
     "repositories": [
         {
             "type": "path",
             "url": "../your-new-package-repo"
         },
```
 
Now you're ready to develop your package inside a Nova app. 
 
**When you are done with the steps above delete everything above**

# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)
[![Build Status](https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square)](https://travis-ci.org/:vendor/:package_name)
[![Quality Score](https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/:vendor/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square)](https://packagist.org/packages/:vendor/:package_name)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tool here.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require :vendor/:package_name
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function tools()
{
    return [
        // ...
        new \:namespace_vendor\:namespace_tool_name\Tool(),
    ];
}
```

## Usage

Click on the ":package_name" menu item in your Nova app to see the tool provided by this package.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [:author_name](https://github.com/:author_username)

## Support us

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/spatie). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
