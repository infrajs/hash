[![Latest Stable Version](https://poser.pugx.org/infrajs/hash/v/stable)](https://packagist.org/packages/infrajs/hash) [![Total Downloads](https://poser.pugx.org/infrajs/hash/downloads)](https://packagist.org/packages/infrajs/hash)

# Generate a hash string of data (md5)
>creates a unique hash from an array or a simple value.

```php
$data = array('test' => 'hi');
$hash = Hash::make($data); //$hash - Уникальный идентификатор для данных $data
```

### Testing

##### Return in json: run the file test.php from the folder hash:

> positive answer

```
{result:1}
```

> negative answer

```
{result:0, msg:"значение поменялось"}
```

##### Testing with PHPunit, it is necessary in the command line from the folder hash

```
phpunit --bootstrap Hash.php tests/HashTest
```

# Генерация хэш-строки для данных (md5)

> создает уникальный хэш из массива или простого значения.

Используется для идентификации структуры данных. Например, хэш-идентификатор позволяет хранить дополнительную информацию о данных, без изменения самих данных. Обеспечивает связь одного набора данных с другим.

### Тестирование

##### Для получения данных в json формате, необходимо запустить test.php, находящийся в папке hash:

> при положительном ответе вы увидете следующее сообщение

```
{result:1}
```

> если в работе кода произойдет сбой, то сообщение будет

```
{result:0, msg:"значение поменялось"}
```

##### Для тестирование с помощью PHPunit, необходимо в командной строке, находясь в папке hash прописать следующее

```
phpunit --bootstrap Hash.php tests/HashTest
```
