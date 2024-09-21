# laravel-uuid-model-support

[![Latest Version](https://img.shields.io/github/v/release/floor9design-ltd/laravel-uuid-model-support?include_prereleases&style=plastic)](https://github.com/floor9design-ltd/laravel-uuid-model-support/releases)
[![Packagist](https://img.shields.io/packagist/v/floor9design/laravel-uuid-model-support?style=plastic)](https://packagist.org/packages/floor9design/laravel-uuid-model-support)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=plastic)](LICENCE.md)

[![Build Status](https://img.shields.io/travis/com/floor9design-ltd/laravel-uuid-model-support?style=plastic)](https://travis-ci.com/github/floor9design-ltd/laravel-uuid-model-support)
[![Code Coverage](https://img.shields.io/codecov/c/github/floor9design-ltd/laravel-uuid-model-support?style=plastic)](https://codecov.io/gh/floor9design-ltd/laravel-uuid-model-support)

[![Github Downloads](https://img.shields.io/github/downloads/floor9design-ltd/laravel-uuid-model-support/total?style=plastic)](https://github.com/floor9design-ltd/laravel-uuid-model-support)
[![Packagist Downloads](https://img.shields.io/packagist/dt/floor9design/laravel-uuid-model-support?style=plastic)](https://packagist.org/packages/floor9design/laravel-uuid-model-support)

A quick to implement Trait for laravel models using Ramsey\Uuid

## Introduction

Laravel models have default behaviours associated with them that do not work "out of the box" with the excellent
Ramsey\Uuid class.

For example, `newUniqueId()` will not work as expected unless overwritten in a model. These Traits offer sensible 
defaults.

## Features

[![Latest Version](https://img.shields.io/github/v/release/floor9design-ltd/laravel-uuid-model-support?include_prereleases&style=plastic)](https://github.com/floor9design-ltd/laravel-uuid-model-support/releases)
[![Packagist](https://img.shields.io/packagist/v/floor9design/laravel-uuid-model-support?style=plastic)](https://packagist.org/packages/floor9design/laravel-uuid-model-support)

The package offers traits for UUIDs in the form of `Uuid[x]`, offering the following methods:

* `newUniqueId()`
* `uniqueIds()`

Currently supports UUIDv1 and v4 - other versions are in development.

## Install

Via Composer/packagist

[![Packagist Downloads](https://img.shields.io/packagist/dt/floor9design/laravel-uuid-model-support?style=plastic)](https://packagist.org/packages/floor9design/laravel-uuid-model-support)

``` bash
composer require floor9design/laravel-uuid-model-support
```

Via git

[![Github Downloads](https://img.shields.io/github/downloads/floor9design-ltd/laravel-uuid-model-support/total?style=plastic)](https://github.com/floor9design-ltd/laravel-uuid-model-support)

``` bash
git clone https://github.com/floor9design-ltd/laravel-uuid-model-support.git
```
Or:
``` bash
git clone git@github.com:floor9design-ltd/laravel-uuid-model-support.git
```

## Usage

Add a `use` statement into the model, and ensure you select the correct class.

For example, a user model might resemble:

``` php

namespace App\Models;

use Floor9design\LaravelUuidModelSupport\Uuid4;
// ...
class User extends Authenticatable
{
    use Uuid4;
    // ...
   
```

## Setup

There are no specific config setup steps required. The class should autoload in PSR-4 compliant systems.

## Testing

[![Build Status](https://img.shields.io/travis/com/floor9design-ltd/laravel-uuid-model-support?style=plastic)](https://travis-ci.com/github/floor9design-ltd/laravel-uuid-model-support)
[![Code Coverage](https://img.shields.io/codecov/c/github/floor9design-ltd/laravel-uuid-model-support?style=plastic)](https://codecov.io/gh/floor9design-ltd/laravel-uuid-model-support)

Tests can be run as follows:

* `./vendor/phpunit/phpunit/phpunit`

The following tests and also creates code coverage (usually maintained at 100%)

* `./vendor/phpunit/phpunit/phpunit --coverage-html docs/tests/`

Static analysis/code review can be performed by using [phpstan](https://phpstan.org/):

* `./vendor/bin/phpstan`

## Credits

- [Rick](https://github.com/elb98rm)

## Changelog

A changelog is generated here:

* [Change log](CHANGELOG.md)

## License

This software is available under the MIT licence.

* [License File](LICENCE.md)
