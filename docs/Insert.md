# Insert

## Example

```php
$data = [
    'set' => [
        'name' => 'mary',
        'age' => 13,
    ],
];

$anemane->insert('user', $data);
```

### Instructions executed by this operation

```sql
INSERT INTO user (name, age) VALUES ('mary', 13)
```