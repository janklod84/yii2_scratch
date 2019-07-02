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