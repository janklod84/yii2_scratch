<?php  

/**
 * id : Identifiant du projet
 * basePath: Chemin de base du projet
 * bootstrap: Charger du point d'entree du chargement 
 *    'debug', on indique qu'on charge 'debug' avant tout chargement
 *
 * components: ( Configuration des composants )
 *   -- urlManager (Gestionnaire d' URL)
 *      - enablePrettyUrl : permet d'avoir de beau URL (supprime ?r=site/login ...) 
 *      - showScriptName  : permet l'affichage du fichier script (cas : index.php)
 * 
 *   -- request (Request)
 *      'cookieValidationKey' : (insere ce qu'on veut ) comme cle cookie
 * 
 *   -- db (Include Database components)
 * 
 * modules : permet d'ajouter des modules a charger
 *   'debug' => yii\debug\Module (La cle 'debug' return le module yii\debug\Module)
 * 
*/
return [
  'id' => 'school-web', 
  'basePath' => realpath(__DIR__.'/../'),
  'bootstrap' => [
     'debug' 
  ], 
  'components' => [
     'urlManager' => [
        'enablePrettyUrl' => true, 
        'showScriptName'  => false
     ],  
     'request' => [
        'cookieValidationKey' => 'my-secret-code'
     ],
     'db' => require(__DIR__.'/db.php'),
      'user' => [
          'identityClass' => 'app\models\UserIdentity', // Add authentification class
          'enableAutoLogin' => true // permet l'authentification automatic par cookie [cas remember me]
      ]
  ],
  'modules' => [
      'debug' => 'yii\debug\Module'
  ]
];