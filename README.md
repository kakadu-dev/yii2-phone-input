Yii2 phone input widget
===========================
Add phone mask to input.  

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist matthew-p/yii2-phone-input "@dev"
```

or add

```
"kakadu-dev/yii2-phone-input": "@dev"
```

to the require section of your `composer.json` file.

Usage
-----

Once the extension is installed, simply use it in your code by:

```php

```

Add action in controller (only for gridview sorting):
```php
<?php
use Kakadu\Yii2PhoneInput\MPInputPhoneMask;

echo $form->field($model, 'phone')->widget(MPInputPhoneMask::class, ['options' => ['type' => 'tel', 'autocomplete' => 'off']]) 
?>
```

That's all. Check it.