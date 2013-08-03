laravel-validators [![Build Status](https://travis-ci.org/schickling/laravel-validators.png?branch=master)](https://travis-ci.org/schickling/laravel-validators)
==================

A set of additional validator rules for Laravel 4

## Installation

1. Add the following to your composer.json and run `composer update`

    ```json
    {
        "require": {
            "schickling/validators": "dev-master"
        }
    }
    ```

2. Add `Schickling\Validators\ValidatorsServiceProvider` to your config/app.php

## Available Rules

#### Boolean
```php
'isEnabled' => 'boolean'
```

#### Optional
```php
'isOptional' => 'optional'
```


## Upcoming Features

* Number precision rule
* language specific string rule (umlauts etc)
* Array validation
