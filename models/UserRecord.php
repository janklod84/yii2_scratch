<?php 
namespace app\models;

use yii\db\ActiveRecord;
use Faker\Factory;



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
}