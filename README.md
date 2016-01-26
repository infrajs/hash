[![Latest Stable Version](https://poser.pugx.org/infrajs/hash/v/stable)](https://packagist.org/packages/infrajs/hash) [![Total Downloads](https://poser.pugx.org/infrajs/hash/downloads)](https://packagist.org/packages/infrajs/hash) [![Latest Unstable Version](https://poser.pugx.org/infrajs/hash/v/unstable)](https://packagist.org/packages/infrajs/hash) [![License](https://poser.pugx.org/infrajs/hash/license)](https://packagist.org/packages/infrajs/hash)
# Hash - generates a hash code (md5) data.
>creates a unique hash from an array or a simple value.

```php
$data = array('test' => 'hi');
$hash = Hash::make($data); //hash - Уникальный идентификатор для данных $data
```

# Hash - генерирует хэш-код (md5) данных. 
>создает уникальный хэш из массива или простого значения.

Используется для идентификации сложных данных. Например, хэш-идентификатор позволяет хранить дополнительную информацию о данных, без изменения самих данных. Обеспечивает связь одного набора данных с другим.

Вынесено отдельно так как используется в абсолютно разных расширениях.
