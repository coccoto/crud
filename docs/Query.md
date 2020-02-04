# Query

## Example

- 1

```php
$sql = "UPDATE list SET subject='math', score=80 WHERE class=5 AND name='michael'"

$crud = new coccoto\crud\CRUD();
$crud->run($sql);
```

- 2

```php
$sql = "SELECT :column FROM list WHERE class=:num"

$data = [
    'columns' => [
        'column' => 'score',
    ],
    'where' => [
        'num' => 3,
    ],
];

$crud = new coccoto\crud\CRUD();
$crud->run($sql, $data);
$result = $crud->stmt->fetchAll();
```

### Instructions executed by this operation

```sql
SELECT score FROM list WHERE class=3
```