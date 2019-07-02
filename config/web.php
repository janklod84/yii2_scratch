<?php  

/**
 * id : идентификации проекта
 * basePath: Базовая директория нашего проекта
 * components: ( Конфигурации компоненты )
 *   -- urlManager (Управление URL)
 *      - enablePrettyUrl : разрешение красивый УРЛ адресса   (убирает ?r=site/login ...)
 *      - showScriptName  : разрешение показ ямия скрипт файл (убирает index.php)
*/
return [
  'id' => 'school', 
  'basePath' => realpath(__DIR__.'/../'),
  'components' => [
     'urlManager' => [
        'enablePrettyUrl' => true, // false by default
        'showScriptName'  => false
     ]
  ]
];