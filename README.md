# anemane

A little support for database operations.

## Prerequisites

- PHP 7.4

## Installation

```sh
$ composer require coccoto/anemane
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

$anemane = new coccoto\anemane\Anemane();
```

## Example

- ### [SELECT.md](https://github.com/coccoto/anemane/blob/master/docs/Select.md)

- ### [INSERT.md](https://github.com/coccoto/anemane/blob/master/docs/Insert.md)

- ### [UPDATE.md](https://github.com/coccoto/anemane/blob/master/docs/Update.md)

- ### [DELETE.md](https://github.com/coccoto/anemane/blob/master/docs/Delete.md)

- ### [QUERY.md](https://github.com/coccoto/anemane/blob/master/docs/Query.md)

## License
MIT License