<?php 
namespace app\controllers;

use yii;
use yii\web\Controller;


class UserController  extends Controller
{
      

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