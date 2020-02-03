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

- index.php

```php
require_once 'vendor/autoload.php';

$crud = new coccoto\dbmanager\CRUD();
```

## Example

- ### [SELECT.md](https://github.com/coccoto/dbmanager/blob/master/docs/Select.md)

- ### [INSERT.md](https://github.com/coccoto/dbmanager/blob/master/docs/Insert.md)

- ### [UPDATE.md](https://github.com/coccoto/dbmanager/blob/master/docs/Update.md)

- ### [DELETE.md](https://github.com/coccoto/dbmanager/blob/master/docs/Delete.md)

- ### [QUERY.md](https://github.com/coccoto/dbmanager/blob/master/docs/Query.md)

## License
MIT License