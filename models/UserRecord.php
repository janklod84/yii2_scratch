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


     public static function existsEmail ($email) // findUserByEmail
     {
         $count = self::find()->where(['email' => $email])->count();
         return $count > 0;
     }
}