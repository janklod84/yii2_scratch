<?php 
namespace app\controllers;

use app\models\UserJoinForm;
use yii;
use yii\web\Controller;
use app\models\UserRecord;
use app\models\UserIdentity;



class UserController  extends Controller
{
      

      /** 
       * Action join
       * 
       * @return mixed
      */
      public function actionJoin()
      {
          // $userRecord = new UserRecord();
          // $userRecord->setTestUser();
          // $userRecord->save();

        $userJoinForm = new UserJoinForm();
//        $userJoinForm->name = "John";
	    return $this->render('join', compact('userJoinForm'));
      }


      /**
       * Action login
       * 
       * @return mixed
      */
      public function actionLogin()
      {
          //  id concret user we want to login ($uid)
          // $uid = UserIdentity::findIdentity(mt_rand(1,2));
          // Yii::$app->user->login($uid);
	      return $this->render('login');
      }


     /**
     * Action logout
      *
      * @return mixed
     */
      public function actionLogout()
      {
           Yii::$app->user->logout();
           return $this->redirect("/");
      }
}