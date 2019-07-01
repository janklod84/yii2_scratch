<?php 
namespace app\controllers;

use yii\web\Controller;


class SiteController  extends Controller
{
      
      /**
       * Action index
       * 
       * @return string
      */
      public function actionIndex()
      {
      	   return $this->render('index');
      }
}