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

$anemane = new coccoto\anemane\Anemane();
$anemane->select('list', $data);
$result = $anemane->stmt->fetchAll();
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

$anemane = new coccoto\anemane\Anemane();
$anemane->select('list', $data);
$result = $anemane->stmt->fetchAll();
```

### Instructions executed by this operation

```sql
SELECT subject, score FROM list WHERE class=3
```