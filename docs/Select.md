# Select

## Example

- 1

```php
$data = [
    'columns' => [
        'subject',
        'score',
    ],
];

$crud = new coccoto\crud\CRUD();
$crud->select('list', $data);
$result = $crud->stmt->fetchAll();
```

### Instructions executed by this operation

```sql
SELECT subject, score FROM list
```

- 2

```php
$data = [
    'columns' => [
        'subject',
        'score',
    ],
    'where' => [
        'class' => 3,
    ],
];

$crud = new coccoto\crud\CRUD();
$crud->select('list', $data);
$result = $crud->stmt->fetchAll();
```

### Instructions executed by this operation

```sql
SELECT subject, score FROM list WHERE class=3
```