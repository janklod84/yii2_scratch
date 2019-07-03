<?php
namespace app\models;

use yii\base\Model;
use yii;



class UserLoginForm extends Model
{

    public $email;
    public $password;


    /**
     * L'ordre de verification est important
     *
     * @return array
     */
    public function rules()
    {
       return [
           ['email', 'required'],
           ['password', 'required'],
           ['email', 'email'],
           ['email', 'errorIfEmailNotFound']
       ];
    }


    /**
     * @return void
     */
    public function errorIfEmailNotFound ()
    {
        $userRecord = UserRecord::findUserByEmail($this->email);
        if($userRecord->email != $this->email)
        {
            $this->addError("email", "This e-mail does not registered");
        }
    }

    /**
     * Login user
     * @return void
     */
    public function login()
    {
        if($this->hasErrors())
        {
            return;
        }
        $userRecord = UserRecord::findUserByEmail($this->email);
        $userIdentity = UserIdentity::findIdentity($userRecord->id);
        Yii::$app->user->login($userIdentity);
    }

}