Yii2 module ver. 0.2
===========
Module for orders listing

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vanitokurason/orderlist "*"
```

or add

```
"vanitokurason/orderlist": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Add to main.config:

```php
'modules' => [
    'orderlist' => [
        'class' =>’vanitokurason\orderlist\Orderlist'
    ]
]
```


Once the extension is installed, simply use it in your code by  :

```php
<?= \vanitokurason\orderlist\AutoloadExample::widget(); ?>
```


To enable caching add at config db.php:

```php
return [
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 120,
    'schemaCache' => 'cache',
];
```

