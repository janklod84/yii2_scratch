<?php
# CONSOLE APPLICATION
/**
 * <command> php yii.php help
 * <command> php yii.php help migrate
 * 
*/

// autoload
require __DIR__.'/vendor/autoload.php';


// require bootstrap application
require  __DIR__.'/vendor/yiisoft/yii2/Yii.php';

// load configuration
$config = require __DIR__.'/config/console.php';

// run application
$app = new yii\console\Application($config);
$app->run();