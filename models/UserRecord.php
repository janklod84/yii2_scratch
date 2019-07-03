<?php 
namespace app\models;

use yii\db\ActiveRecord;


/**
 * class UserRecord
*/
class UserRecord extends ActiveRecord 
{
     
     /**
      * Get table name
      * 
      * @return string
     */
     public static function tableName()
     {
     	 return "user";
     }


     public function setTestUser()
     {
     	  $this->name   =  "Jean";
     	  $this->email  =  "jeanyao@ymail.com";
     	  $this->passhash = "sha512 qwerty";
     	  $this->status =  2;
     }
}