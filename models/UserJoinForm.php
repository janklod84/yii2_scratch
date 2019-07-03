<?php
namespace app\models;

use yii\base\Model;


class UserJoinForm extends Model
{

     public $name;
     public $email;
     public $password;
     public $password2;


     public function rules()
     {
         return [
             ['name', 'required'],
             ['email', 'required'],
             ['password', 'required'],
             ['password2', 'required'],
             ['name', 'string', 'min' => 3, 'max' => 30],
             ['email', 'email'], // or write like ['email', 'email', 'message' => 'Адрес эл. почта указан неверно']
             ['password', 'string', 'min' => 4],
             ['password2', 'compare', 'compareAttribute' => 'password'], // (matches)
             ['email', 'errorIfEmailUsed']

         ];
     }


     public  function setUserRecord ($userRecord)
     {
         $this->name = $userRecord->name;
         $this->email = $userRecord->email;
         $this->password = $this->password2 = "qwerty";
     }

     public function errorIfEmailUsed()
     {
         // если не найдено такой е-майл то все хорошо
         if(UserRecord::existsEmail($this->email))
         {
              return;
         }
         $this->addError('email', 'This e-mail already exists');
     }
}