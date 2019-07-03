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
          if(Yii::$app->request->isPost)
          {
              return $this->actionJoinPost();
          }
          $userJoinForm = new UserJoinForm();
          $userRecord = new UserRecord();
          $userRecord->setTestUser();
          $userJoinForm->setUserRecord($userRecord);
//          $userJoinForm->name = "Magic";
	      return $this->render('join', compact('userJoinForm'));
      }

      public function actionJoinPost()
      {
          $userJoinForm = new UserJoinForm();
          // $userJoinForm->load(Yii::$app->request->post()); // assign field to value from $_POST
          /*
           * $userJoinForm->name  = $_POST['name'];
           * $userJoinForm->email = $_POST['email']
           */
          // $userJoinForm->name .= ".";

          // если данные загружены
          if($userJoinForm->load(Yii::$app->request->post()))
          {
              if($userJoinForm->validate())
              {
                  $userRecord = new UserRecord();
                  $userRecord->setUserJoinForm($userJoinForm);
                  $userRecord->save();
                  return $this->redirect('/user/login');
              }
          }
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