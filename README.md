# dbmanager

A little support for database operations.

## Prerequisites

- PHP 7.4

## Installation

```sh
$ composer require coccoto/dbmanager
```

## Usage

Connect to the database.

- src/conf/connInfo.php

```php
$connInfo = [
    'host' => '',
    'dbname' => '',
    'user' => '',
    'pass' => '',
];
```

```php
require_once 'vendor/autoload.php';

$crud = new coccoto\dbmanager\CRUD();
```

List of database operation methods.

- ### [SELECT.md]()

- ### [INSERT.md]()

- ### [UPDATE.md]()

- ### [DELETE.md]()

- ### [QUERY.md]()

## License
MIT License