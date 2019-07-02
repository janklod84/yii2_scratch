<?php 
namespace app\controllers;

use yii;
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
      	   Yii::trace("Жан-Клод", "My Blog");
      	   return $this->render('index');
      }


      /**
       * Action join
       * 
       * @return string
      */
      public function actionJoin()
      {
      	   return $this->render('join');
      }


      /**
       * Action login
       * 
       * @return string
      */
      public function actionLogin()
      {
      	   return $this->render('login');
      }
}