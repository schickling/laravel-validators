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

2. Add `Schickling\Backup\ValidatorsServiceProvider` to your config/app.php

## Available Rules

#### Boolean
```
'isEnabled' => 'boolean'
```


## Upcoming Features

* Number precision rule
* language specific string rule (umlauts etc)
* Array validation
