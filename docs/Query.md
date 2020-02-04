# Query

## Example

- 1

```php
$sql = "UPDATE list SET subject='math', score=80 WHERE class=5 AND name='michael'"

$anemane = new coccoto\anemane\Anemane();
$anemane->run($sql);
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

$anemane = new coccoto\anemane\Anemane();
$anemane->run($sql, $data);
$result = $anemane->stmt->fetchAll();
```

### Instructions executed by this operation

```sql
SELECT score FROM list WHERE class=3
```