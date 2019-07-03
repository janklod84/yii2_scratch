<?php 
namespace app\models;

use yii\db\ActiveRecord;
use Faker\Factory;



/**
 * class UserRecord
*/
class UserRecord extends ActiveRecord  // implements yii\web\IdentityInterface
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

     
     /**
      * Set user data
      * 
      * @return void
     */
     public function setTestUser()
     {
     	  $faker = Factory::create();
     	  $this->name   =  $faker->name;
     	  $this->email  =  $faker->email;
     	  $this->passhash = $faker->password;
     	  $this->status =  $faker->randomDigit; // [0-9]
     }


     public static function existsEmail ($email)
     {
         $count = static::find()->where(['email' => $email])->count();
         return $count > 0;
     }


     /**
     * @param $email
     * @return UserRecord|null
     */
      public static function findUserByEmail ($email)
      {
         return static::findOne(['email' => $email]);
      }


    /**
     * @param $userJoinForm
     */
     public function setUserJoinForm($userJoinForm)
     {
         $this->name = $userJoinForm->name;
         $this->email = $userJoinForm->email;
         $this->passhash = $userJoinForm->password;
         $this->status = 1;
     }
}