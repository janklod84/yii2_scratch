<?php 
namespace app\controllers;

use app\models\UserJoinForm;
use app\models\UserLoginForm;
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
          if(Yii::$app->request->isPost) {
              return $this->actionLoginPost();
          }
          $userLoginForm = new UserLoginForm();
	      return $this->render('login', compact('userLoginForm'));
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

      public function actionLoginPost()
      {
          $userLoginForm = new UserLoginForm();
          if($userLoginForm->load(Yii::$app->request->post()))
          {
              if($userLoginForm->validate())
              {
                  $userLoginForm->login();
                  return $this->redirect('/');
              }
          }
          return $this->render('login', compact('userLoginForm'));
      }


}