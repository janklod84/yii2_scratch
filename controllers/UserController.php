<?php 
namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\UserRecord;
use app\models\UserIdentity;



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
          // id concret user we want to login ($uid)
          $uid = UserIdentity::findIdentity(1);
          Yii::$app->user->login($uid);
	      return $this->render('login');
      }
}