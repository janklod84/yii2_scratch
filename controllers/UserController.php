<?php 
namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\UserRecord;


class UserController  extends Controller
{
      

      /** 
       * Action join
       * 
       * @return string
      */
      public function actionJoin()
      {
          // $userRecord = new UserRecord();
          // $userRecord->setTestUser();
          // $userRecord->save();

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