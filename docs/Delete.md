# Delete

## Example

```php
$data = [
    'where' => [
        'type' => 'sweet',
        'name' => 'candy', 
    ],
];

$anemane->delete('products', $data);
```

### Instructions executed by this operation

```sql
DELETE FROM products WHERE type='sweet' AND name='candy'
```