<?php
namespace app\models;

use yii\base\Model;


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
//           ['email', 'email']
       ];
    }

}