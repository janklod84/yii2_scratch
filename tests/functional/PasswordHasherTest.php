<?php 
class PasswordHasherTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }


    // tests
    public function testPasswordIsHash()
    {
       $my_password = 'qwerty';

       $userRecord_local = new \app\models\UserRecord();
       $userRecord_local->setTestUser();


       $userRecord_local->setPassword($my_password);
       $userRecord_local->save();


       $userRecord_found = \app\models\UserRecord::findOne($userRecord_local->id);
       $this->assertInstanceOf(get_class($userRecord_local), $userRecord_found);

       $security = new \yii\base\Security();
       $this->assertTrue($security->validatePassword(
           $my_password,
           $userRecord_found->passhash
       ));
    }


    public function testPasswordIsNotRehashed()
    {
        $my_password = 'qwerty';

        $userRecord_local = new \app\models\UserRecord();
        $userRecord_local->setTestUser();


        $userRecord_local->setPassword($my_password);
        $userRecord_local->save();

        $first_hash = $userRecord_local->passhash;

        $userRecord_local->name .= mt_rand(1, 9);
        $userRecord_local->save();

        $this->assertEquals($first_hash, $userRecord_local->passhash);

        $userRecord_found = \app\models\UserRecord::findOne($userRecord_local->id);
        $this->assertEquals($first_hash, $userRecord_found->passhash);
    }

    // tests
    /*
    public function testSomeFeature()
    {
        $userRecord = \app\models\UserRecord::findOne(1);
        $this->assertEquals("Jean", $userRecord->name, 'Jean not Found');
    }
    */
}