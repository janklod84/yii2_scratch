<?php 
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

?>
<!DOCTYPE html>
<?php $this->beginPage(); ?>
<html>
<head>
	<title>MySite</title>
	<?php $this->head(); ?>
</head>
<body>
<?php  $this->beginBody() ?>
<?php 
   NavBar::begin([
    'brandLabel' => 'MyBrand', // Brand
    'brandUrl'   => Yii::$app->homeUrl, // base URL
    'options' => [
       'class' => 'navbar-default navbar-fixed-top'
    ]
 ]);

   // if user is Guest
 if(Yii::$app->user->isGuest):

     $menu = [
       ['label' => 'Join', 'url' => ['/user/join']],
       ['label' => 'Login', 'url' => ['/user/login']]
     ];

 else:
     $menu = [
         ['label' => Yii::$app->user->getIdentity()->name], // getIdentity() return instance of UserRecord
         ['label' => 'Logout', 'url' => ['/user/logout']]
     ];

 endif;
 echo Nav::widget([
    'options' => ['class'=> 'navbar-nav navbar-right'],
    'items'   => $menu 
 ]);
 NavBar::end();
?>
 
  <div class="container" style="margin-top: 70px;">
  	 <?= $content ?>
  </div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>