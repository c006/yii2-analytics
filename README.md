Yii2  Analytics
===================


Simple way to organize analytics and tracking.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-source "c006/yii2-analytics" "*"
```

or add

```
"c006/yii2-analytics": "*"
```

to the require section of your `composer.json` file.

Setup
-----

Add `_[my-tracker].php ` to `\c006\analytics\views\`

Then add `include "_[my-tracker].php";` to ` \c006\analytics\views\index.php`

Usage
-----

views/layouts/`[my-layout].php`
>
    ...
    ...
    <?= \c006\analytics\Analytics::widget() ?>
    </body>


Skip tracking
`\c006\analytics\Analytics.php`
>
    private $skip = ['108.11.100.136','108.11.100.140'];


Comments / Suggestions / Help
--------------------

Use the issue ticket to provide any helpful feedback, requests or questions.

Thanks.


