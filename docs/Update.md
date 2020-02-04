# Update

## Example

```php
$data = [
    'set' => [
        'subject' => 'math',
        'score' => 80,
    ],
    'where' => [
        'class' => 5,
        'name' => 'michael',
    ],
];

$crud = new coccoto\crud\CRUD();
$crud->update('list', $data);
```

### Instructions executed by this operation

```sql
UPDATE list SET subject='math', score=80 WHERE class=5 AND name='michael'
```