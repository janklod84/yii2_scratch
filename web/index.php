<?php
# WEB APPLICATION

// define YII_DEBUG to true
define('YII_DEBUG', true);

// autoload
require __DIR__.'/../vendor/autoload.php';

// require bootstrap application
require  __DIR__.'/../vendor/yiisoft/yii2/Yii.php';

// load configuration
$config = require __DIR__.'/../config/web.php';

// run application
$app = new yii\web\Application($config);
$app->run();